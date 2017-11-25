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
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('login.css') ?>

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
<body class="admin-template">

      <header class="logo-area">
        <img src="/doc_root/webroot/img/logo/logo-square-wht.svg" alt="" width="100px">
      </header>

      <?= $this->Flash->render() ?>
      <div id="contentsBlock" class="archive-index">
          <?= $this->fetch('content') ?>
      </div>

  </div><!-- // column-wrap -->
</body>
</html>
