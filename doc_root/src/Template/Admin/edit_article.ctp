<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">

  <div class="admin-display__head">
      <h1 class="admin-display__head__title">記事の編集</h1>
      <p class="admin-display__head__caption">記事の管理を行います。</p>
  </div>

  <?= $this->Flash->render('auth') ?>

  <div class="admin-display__body">
      <div class="edit--block">
        <?php echo $this->element('form/articles', ['btn_text'=> '編集内容を保存する']); ?>
      </div>
  </div>

  <?= $this->Html->link('一覧へ戻る',['action'=>'articleList'])?>
</div>
