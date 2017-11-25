<!-- File:src/Template/Users/add.ctp -->

<div class="users form">
  <?= $this->Form->create($user) ?>
  <fieldset>
    <legend><?= __('ユーザーを登録する') ?></legend>
    <?= $this->Form->input('username')?>
    <?= $this->Form->input('password')?>
    <?= $this->Form->input('role',[
      'options' => ['admin' => '管理者' , 'author' => '編集者']
      ])?>
  </fieldset>
  <?= $this->Form->button(__('登録する'))?>
  <?= $this->Form->end() ?>
</div>
