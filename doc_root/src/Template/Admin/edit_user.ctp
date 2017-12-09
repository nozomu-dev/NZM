<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="user-list admin-display">

  <div class="admin-display__head">
      <h1 class="admin-display__head__title">ユーザーの編集</h1>
      <p class="admin-display__head__caption">ユーザーの管理を行います。</p>
  </div>

  <?= $this->Flash->render('auth') ?>

  <div class="admin-display__body">
      <div class="edit--block">
        <?= $this->element('form/users', ['btn_text'=>'編集内容を保存する']) ?>
      </div>
  </div>


  <?= $this->Html->link('一覧へ戻る',['action'=>'viewUsers'])?>
</div>
