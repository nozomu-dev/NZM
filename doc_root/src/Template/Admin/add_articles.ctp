<!-- File: src/Template/Articles/add.ctp -->
<div id="articleList" class="article-list admin-display">

    <h1 class="controll-title">記事を新規投稿する</h1>
    <p class="controll-caption">記事の新規投稿を行います。</p>

    <?= $this->Flash->render('auth') ?>

    <div class="edit--block">
        <?php echo $this->element('form/articles', ['btn_text'=> '投稿する']); ?>
    </div>

    <?= $this->Html->link('インデックスへ戻る',['action' => 'index']) ?>
</div>
