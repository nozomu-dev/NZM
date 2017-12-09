<!-- File: src/Template/Articles/add.ctp -->
<div id="articleList" class="article-list admin-display">

    <div class="admin-display__head">
        <h1 class="admin-display__head__title">記事を新規投稿する</h1>
        <p class="admin-display__head__caption">記事の新規投稿を行います。</p>
    </div>

    <?= $this->Flash->render('auth') ?>

    <div class="admin-display__body">
        <div class="edit--block">
            <?php echo $this->element('form/articles', ['btn_text'=> '投稿する']); ?>
        </div>
    </div>



    <?= $this->Html->link('インデックスへ戻る',['action' => 'index']) ?>
</div>
