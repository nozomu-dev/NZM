<!-- File:src/Tmplate/Admin/login.ctp  -->
<div class="admin-form">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create('',['class'=>'form-controll-wrapper']) ?>
    <?= $this->Form->input('ユーザー名',['class'=>'form-controll typeface','name'=>'username','placeholder'=>'ユーザー名']) ?>
    <?= $this->Form->input('パスワード',['class'=>'form-controll typeface','name'=>'password','type'=>'password','placeholder'=>'パスワード']) ?>
  <?= $this->Form->button('ログインする',['class'=>'btn btn-primary login-btn']); ?>
  <?= $this->Form->end() ?>
</div>

<div class="to-add">
  <?= $this->Html->link('新規登録',['action'=>'add']) ?>
  <?= $this->Html->link('サイトへ戻る',['controller'=>'Articles','action'=>'index'])?>
</div>
