<?php
// src/Controller/AdminController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class AdminController extends AppController
{

    //命名規則と関係なく、[users][articles]のテーブルを使用できるようにする
    public function initialize()
    {
        parent::initialize();
        $this->Users = TableRegistry::get('users');
        $this->Articles = TableRegistry::get('articles');

        $this->loadComponent('Auth',[
            'loginAction' => [
                'controller' => 'Admin',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Admin',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Articles',
                'action' => 'index',
                'home'
            ],
            'authorize' => ['Controller']
        ]);
    }

    //デフォルトのレイアウトを[admin.ctp]に変更する
    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->layout('admin');
    }

    public function beforeFilter( Event $event )
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','logout','view']);
        $this->Auth->loginError = "パスワードが違います";
    }

    //「Users」「articles」テーブルを読み込み、一覧ページを定義
    public function index()
    {
        $this->set('users',$this->Users->find('all'));
        $this->set('articles',$this->Articles->find('all'));
    }

    //「Users」テーブルから「id」を取得、詳細ページを定義
    public function view()
    {
        $this->set('users',$this->Users->find('all'));

        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    //ユーザーの登録関数、登録画面を定義
    public function addUser()
    {
        $user = $this->Users->newEntity();
        if($this->request->is('POST')){
            $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success(__('ユーザーを登録しました'));
                return $this->redirect(['action'=>'login']);
            }
            $this->Flash->error(__('ユーザーの登録に失敗しました'));
        }
        $this->set('user',$user);
    }

    //ログイン画面を表示
    public function login()
    {
        $this->set('users',$this->Users->find('all'));

        if($this->request->is('POST')) {
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('IDかパスワードが認識できません'));
        }
        $this->render(null,'login');
    }

    public function logout()
    {
        $this->Flash->success(__('ログアウトしました'));
        return $this->redirect($this->Auth->logout());
    }

    public function viewArticles()
    {
        $this->set('articles',$this->Articles->find('all'));
    }

    public function addArticles()
    {
        $article = $this->Articles->newEntity();
        if($this->request->is('POST')){
                $this->request->data['Articles']['user_id'] = $this->Auth->user('id');
                $article = $this->Articles->patchEntity($article, $this->request->data);
                if($this->Articles->save($article)){
                    $this->Flash->success(__('記事の投稿が完了しました。'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('投稿でエラーが発生しました。'));
        }
        $this->set('article',$article);
    }

    public function editArticle($id = null)
    {
        $article = $this->Articles->get($id);
        if($this->request->is(['POST','put'])){
            $this->Articles->patchEntity($article,$this->request->data);
            if($this->Articles->save($article)){
                  $this->Flash->success(__('記事の編集が完了しました。'));
                  return $this->redirect(['action'=>'articleList']);
            }
            $this->Flash->error(__('エラーが発生しました。'));
        }
        $this->set('article',$article);
    }

    public function viewUsers()
    {
        $this->set('users',$this->Users->find('all'));
    }

    public function editUser($id = null)
    {
        $user = $this->Users->get($id);
        if($this->request->is(['POST','put'])){
            $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success(__('ユーザーの編集が完了しました。'));
                return $this->redirect(['action'=>'userList']);
            }
            $this->Flash->error(__('エラーが発生しました。'));
        }
        $this->set('user',$user);
    }

}

?>
