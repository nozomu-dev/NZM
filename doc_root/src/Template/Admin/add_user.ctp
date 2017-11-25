<!-- File:src/Template/Users/add.ctp -->
<div id="articleList" class="user-list admin-display">
  <h1 class="controll-title">ユーザーを追加する</h1>
  <p class="controll-caption">ユーザーを新規登録します。</p>

  <?= $this->Flash->render('auth') ?>

  <div class="edit--block">
    <?= $this->element('form/users', ['btn_text'=>'ユーザーを追加する']) ?>
  </div>

  <?= $this->Html->link('一覧へ戻る',['action'=>'viewUsers'])?>
</div>
