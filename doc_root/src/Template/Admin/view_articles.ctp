<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">
  <h1 class="controll-title">記事管理</h1>
  <p class="controll-caption">記事の管理を行います。</p>

  <?= $this->Flash->render('auth') ?>
  <?php foreach($articles as $article): ?>
  <article class="content--block index">
    <div class="content--block__wrap">
      <figure class="content--block__image eycatch"><img src="" alt=""></figure>
      <h1 class="content--block__title title">
        <?= $this->Html->link($article->title,['action'=>'editArticle',$article->id]) ?>
      </h1>
      <p class="content--block__text">
        <?= $this->Text->truncate($article->content,200,array('ellipsis'=>'<span class="ellipsis">…</span>','exact'=>true)) ?>
      </p>
    </div>
    <div class="content--block__action">
      <?= $this->Html->link('編集',['action'=>'articleEdit',$article->id],['class'=>'action']) ?>
      <?= $this->Html->link('削除',['action'=>'articleDelete',$article->id],['class'=>'action']) ?>
      <?= $this->Html->link('表示',['controller'=>'Articles','action'=>'view',$article->id],['class'=>'action','target'=>'_blank']) ?>
    </div>

  </article>
  <?php endforeach; ?>
</div>
