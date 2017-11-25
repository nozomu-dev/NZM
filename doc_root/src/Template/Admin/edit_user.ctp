<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="user-list admin-display">
  <h1 class="controll-title">ユーザーの編集</h1>
  <p class="controll-caption">ユーザーの管理を行います。</p>

  <?= $this->Flash->render('auth') ?>

  <div class="edit--block">
    <?= $this->element('form/users', ['btn_text'=>'編集内容を保存する']) ?>
  </div>

  <?= $this->Html->link('一覧へ戻る',['action'=>'viewUsers'])?>
</div>
