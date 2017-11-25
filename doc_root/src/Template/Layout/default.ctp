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

$cakeDescription = 'NZM';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap_extends.css') ?>
    <?= $this->Html->css('styles.css') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- bootstrap -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <?= $this->Html->script('layout.js') ?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
</head>
<body class="base-template">
    <div class="column-wrap">
      <!-- 左カラムナビ -->
      <header id="gNav">
        <div class="go-home activate primal">
          <?php echo $this->Html->image('/webroot/img/logo/crocodile-wht.svg',array('width'=>'25','url'=>array('controller'=>'Articles','action'=>'index'))); ?>
        </div>
        <nav class="archive-nav">
          <ul class="archive-category-list naked">
            <li>
              <a href="#">
                <div class="list-box">
                  <p class="nav-label font">LATEST</p>
                  <small class="nav-ruby">最新の投稿</small>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="list-box">
                  <p class="nav-label font">PICKUP</p>
                  <small class="nav-ruby">人気の記事</small>
                </div>
              </a>
            </li>
            <li>
              <a href="/doc_root/articles/indexDev">
                <div class="list-box">
                  <p class="nav-label font">DEV</p>
                  <small class="nav-ruby">開発系の記事</small>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="list-box">
                  <p class="nav-label font">DESIGN</p>
                  <small class="nav-ruby">デザイン系の記事</small>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="list-box">
                  <p class="nav-label font">REVIEW</p>
                  <small class="nav-ruby">レビュー</small>
                </div>
              </a>
            </li>
          </ul>
        </nav>
        <small class="copyright brand-typeface"><a href="/">&copy;NZM</a></small>
      </header>
      <!-- //左カラムナビ -->

      <!-- 記事コンテンツ -->
      <?= $this->Flash->render() ?>
      <div id="contentsBlock" class="archive-index">
          <?= $this->fetch('content') ?>
      </div>
      <!-- //記事コンテンツ -->

      <!-- 右カラムインフォ -->
      <footer id="footerBlock" class="footer--block">
        <section class="footer--block__introduce introduce">
          <h1 class="title brand-typeface">ABOUT<small class="title-caption">このブログについて</small></h1>
          <figure class="footer--block__image"><?php echo $this->Html->image('/webroot/img/logo/logo-square.svg',array('width'=>'100')); ?></figure>
          <figcaption class="footer--block__imagecaption">
            このテキストはダミーテキストです。文字の大きさ・時間などご確認ください。この文章ダミーテキストです。
            文字の大きさ・時間などご確認ください。この文章はダミーテキストです。文字の大きさ・時間などご確認ください。
          </figcaption>
          <div class="footer--block__btn">
            <button class="btn btn-primary btn-contact brand-typeface" type="button" name="button">CONTACT ME</button>
          </div>
        </section>
        <section class="sns">
          <div class="instagram">

          </div>
          <div class="other-sns">
            <?= $this->Html->link('管理画面',['controller'=>'Admin','action'=>'index'])?>
          </div>
        </section>
      </footer>
      <!-- // 右カラムインフォ -->
  </div><!-- // column-wrap -->
</body>
</html>
