<!-- File:src/Tmplate/User/login.ctp  -->
<div class="users form">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create() ?>
  <fieldset>
    <legend><?= __('IDとパスワードを入力してください') ?></legend>
    <?= $this->Form->input('username') ?>
    <?= $this->Form->input('password') ?>
  </fieldset>
  <?= $this->Form->button(__('ログインする')); ?>
  <?= $this->Form->end() ?>
</div>

<div class="to-add">
  <?= $this->html->link('新規登録',['action'=>'add']) ?>
</div>
