<!-- File: src/Template/Articles/add.ctp -->

<h1>記事を新規投稿する</h1>
<?php
  echo $this->Form->create($article);
  echo $this->Form->input('title');
  echo $this->Form->input('content');
  echo $this->Form->button(__('記事を投稿する'));
  echo $this->Form->end();
?>

<div class="index">
    <?= $this->Html->link('インデックスへ戻る',['action' => 'index']) ?>
</div>

<div class="logout">
  <?= $this->Html->link('ログアウト' , ['controller' => 'users' , 'action' => 'logout']) ?>
</div>
