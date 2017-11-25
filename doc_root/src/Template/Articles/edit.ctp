<!-- File: src/Template/Article/edit.ctp -->

<h1>記事を編集する</h1>
<?php
  echo $this->Form->create($article);
  echo $this->Form->input('title');
  echo $this->Form->input('content');
  echo $this->Form->button(__('編集内容を保存する'));
  echo $this->Form->end();
?>

<div class="index_link">
  <?= $this->Html->link('インデックへ戻る',['action' => 'index']) ?>
</div>
