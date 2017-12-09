<!-- File:src/Template/Users/add.ctp -->
<div id="articleList" class="user-list admin-display">

  <div class="admin-display__head">
      <h1 class="admin-display__head__title">ユーザーを追加する</h1>
      <p class="admin-display__head__caption">ユーザーを新規登録します。</p>
  </div>

  <?= $this->Flash->render('auth') ?>

  <div class="admin-display__body">
      <div class="edit--block">
        <?= $this->element('form/users', ['btn_text'=>'ユーザーを追加する']) ?>
      </div>
  </div>

  <?= $this->Html->link('一覧へ戻る',['action'=>'viewUsers'])?>
</div>
