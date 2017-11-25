<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">
  <h1 class="controll-title">記事の編集</h1>
  <p class="controll-caption">記事の管理を行います。</p>

  <?= $this->Flash->render('auth') ?>

  <div class="edit--block">
    <?php echo $this->element('form/articles', ['btn_text'=> '編集内容を保存する']); ?>
  </div>

  <?= $this->Html->link('一覧へ戻る',['action'=>'articleList'])?>
</div>
