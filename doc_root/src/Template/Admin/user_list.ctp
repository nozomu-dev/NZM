<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">
  <h1 class="controll-title">ユーザー管理</h1>
  <p class="controll-caption">ユーザーの管理を行います。</p>

  <?= $this->Html->link('ユーザーを追加する',['action'=>'add'],['class'=>'btn btn-default']) ?>

  <?= $this->Flash->render('auth') ?>
  <?php foreach($users as $user): ?>
  <article class="content--block index">
    <div class="content--block__wrap">
      <figure class="content--block__image eycatch"><img src="" alt=""></figure>
      <h1 class="content--block__title title">
        <span><?= $user->id ?></span>
        <?= $this->Html->link($user->username,['action'=>'userEdit',$user->id]) ?>
      </h1>
      <p><?= $user->role ?></p>
    </div>
    <div class="content--block__action">
      <?= $this->Html->link('編集',['action'=>'userEdit',$user->id],['class'=>'action']) ?>
      <?= $this->Html->link('削除',['action'=>'userDelete',$user->id],['class'=>'action']) ?>
      <?= $this->Html->link('表示',['action'=>'userView',$user->id],['class'=>'action','target'=>'_blank']) ?>
    </div>

  </article>
  <?php endforeach; ?>
</div>
