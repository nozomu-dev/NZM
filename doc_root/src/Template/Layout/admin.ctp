<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('bootstrap_extends.css') ?>-->
    <?= $this->Html->css('admin.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- bootstrap -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <?= $this->Html->script('layout.js') ?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
</head>
<body id="adminBody" class="base-template">

      <!-- 記事コンテンツ -->
      <?= $this->Flash->render() ?>
      <div id="adminMasterControll">
          <div class="admin-master__info">
              <img class="logo" src="/doc_root/webroot/img/logo/crocodile-wht.svg" alt="" width="20">
              <span class="logined-user">
                  User :
                  <?= $this->request->session()->read('Auth.User.username') ?>
              </span>
          </div>
          <div class="admin-master__menu">
              <?= $this->Html->link('サイトに戻る',['controller'=>'Articles','action'=>'index'])?>
              <?= $this->Html->link('ログアウト' , ['action' => 'logout']) ?>
          </div>
      </div>

      <header id="adminSidebar" class="admin-sidebar">
        <nav>
          <ul class="naked list">
            <li><?= $this->Html->link('データ分析',['action'=>'index'])?></li>
            <li>
                <a href="#menuArticles" data-toggle="collapse">記事</a>
                <ul id="menuArticles" class="collapse">
                    <li><?= $this->Html->link('新規登録', ['action'=>'addArticles'])?></li>
                    <li><?= $this->Html->link('記事一覧', ['action'=>'viewArticles'])?></li>
                </ul>
            </li>
            <li>
                <a href="#menuUsers" data-toggle="collapse">ユーザー</a>
                <ul id="menuUsers" class="collapse">
                    <li><?= $this->Html->link('新規登録',['action'=>'addUser'])?></li>
                    <li><?= $this->Html->link('ユーザー一覧',['action'=>'viewUsers'])?></li>
                </ul>
            </li>
            <li><?= $this->Html->link('サイト設定',['action'=>'config'])?></li>
          </ul>
        </nav>
      </header>

      <div id="adminBodyBlock" class="archive-index">
          <?= $this->fetch('content') ?>
      </div>
      <!-- //記事コンテンツ -->


  </div><!-- // column-wrap -->

  <?= $this->Html->script('admin.utils.js') ?>
</body>
</html>
