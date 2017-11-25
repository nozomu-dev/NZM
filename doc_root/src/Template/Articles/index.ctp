<!--  File: src/Template/Articles/index.ctp  -->

<h1 class="title brand-typeface">BLOGS<small class="title-caption">全ての記事一覧</small></h1>

<?php foreach($articles as $article): ?>
<article class="content--block index">
  <figure class="content--block__image eycatch"><img src="" alt=""></figure>
  <h1 class="content--block__title title">
    <?= $this->Html->link($article->title,['action'=>'view',$article->id]) ?>
    <time class="content--block__title__date brand-typeface"><?= $article->created->format(DATE_RFC850) ?></time>
    <span class="cat-icon cat-icon-develop"><?= $article->category ?></span>
  </h1>
  <p class="content--block__text">
    <?= $this->Text->truncate($article->content,200,array('ellipsis'=>'<span class="ellipsis">…</span>','exact'=>true)) ?>
  </p>
  <?= $this->Html->link('詳しく見る',['action'=>'view',$article->id],['class'=>'btn btn-default btn-full']) ?>
</article>
<?php endforeach; ?>


<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>　
      <th>Created</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article): ?>
    <tr>
      <td><?= $article->id ?></td>
      <td><?= $this->Html->link($article->title , ['action' => 'view',$article->id]) ?></td>
      <td><?= $article->created->format(DATE_RFC850) ?></td>
      <td>
        <?= $this->Html->link('編集する',['action' => 'edit' , $article->id]) ?>
        <?=
          $this->Form->postLink(
            '　削除',
            ['action' => 'delete' , $article->id],
            ['confirm' => '削除しますか？'])
        ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<div class="add_form">
  <?= $this->Html->link('記事を追加する',['action' => 'add']) ?>
</div>

<div class="to-login">
  <?= $this->Html->link('ログイン',['controller' => 'admin' , 'action' => 'login'])?>
  <?= $this->Html->link('ログアウト',['controller' => 'admin' , 'action'=>'logout'])?>
</div>
