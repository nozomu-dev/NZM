<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class ArticlesController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash'); //include flash component about a form actions flash message
  }

  //public function beforeFilter(Event $event)
  //{
  //  parent::beforeFilter($event);
  //  $this->Auth->allow(['index','view','display']);
  //}

  public function beforeFilter( Event $event )
  {
      parent::beforeFilter($event);
  }

  //記事のインデックスを表示する。
  public function index()
  {
        $this->set('articles' , $this->Articles->find('all'));
  }

  public function indexDev()
  {
        $this->set('articles' , $this->Articles->find('all'));
  }

  //記事の詳細を表示する
  public function view($id = null)
  {
          $article = $this->Articles->get($id);
          $this->set(compact('article'));
  }

  //記事投稿画面を表示する、atrticlesテーブルにデータを追加する
  public function add()
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

  //記事編集画面を表示する,データを取得し再度投稿する。
  public function edit($id = null)
  {
        $article = $this->Articles->get($id);
            if($this->request->is(['POST','put'])){
                  $this->Articles->patchEntity($article , $this->request->data);
                  if($this->Articles->save($article)){
                        $this->Flash->success(__('記事の編集が完了しました。'));
                        return $this->redirect(['action' => 'index']);
                  }
                  $this->Flash->error(__('記事の編集でエラーが発生しました。'));
            }
        $this->set('article',$article);
  }

  //データを削除する
  public function delete($id)
  {
          $this->request->allowMethod(['POST','delete']);

          $article = $this->Articles->get($id);
          if($this->Articles->delete($article)){
                $this->Flash->success(__('削除が完了しました。'));
                return $this->redirect(['action' => 'index']);
          }
  }

  public function isAuthrized($user)
  {
    //登録ユーザーに投稿を許可
    if($this->action === 'add'){
      return true;
    }

    if(in_array($this->action , array('edit' , 'deleat'))){
      $postId = (int) $this->request->params['pass'][0];
      if($this->Post->isOwnedBy($postId,$user['id'])){
        return true;
      }
    }

    return parent::isAuthorized($user);
  }
}

?>
