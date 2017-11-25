<!-- File:src/Template/Article/view.ctp -->

<section class="selecter--back">
  <a href="#">一つ前の記事へ</a>
</section>

<article class="content--block detail">
  <figure class="content--block__image"></figure>
  <h1 class="content--block__title title">
    <?= h($article->title)?>
    <time class="content--block__title__date brand-typeface"><?= $article->created->format(DATE_RFC850) ?></time>
  </h1>
  <p class="content--block__text">
    <?= h($article->content) ?>
  </p>
  <?= $this->Html->link('インデックスへ戻る',['action' => 'index'],['class'=>'btn btn-default btn-full']) ?>

</article>


<div class="index">
</div>
