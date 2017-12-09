<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="article-list admin-display">

  <div class="admin-display__head">
      <h1 class="admin-display__head__title">ユーザー一覧</h1>
      <p class="admin-display__head__caption">ユーザーの管理を行います。</p>
  </div>

  <?= $this->Html->link('ユーザーを追加する',['action'=>'addUser'],['class'=>'btn btn-default']) ?>

  <?= $this->Flash->render('auth') ?>

  <div class="admin-display__body">
      <?php foreach($users as $user): ?>
      <article class="content--block index">
        <div class="content--block__wrap">
          <figure class="content--block__image eycatch"><img src="" alt=""></figure>
          <h1 class="content--block__title title">
            <span><?= $user->id ?></span>
            <?= $this->Html->link($user->username,['action'=>'editUser',$user->id]) ?>
          </h1>
          <p><?= $user->role ?></p>
        </div>
        <div class="content--block__action">
          <?= $this->Html->link('編集',['action'=>'editUser',$user->id],['class'=>'action']) ?>
          <?= $this->Html->link('削除',['action'=>'userDelete',$user->id],['class'=>'action']) ?>
          <?= $this->Html->link('表示',['action'=>'viewUsers',$user->id],['class'=>'action','target'=>'_blank']) ?>
        </div>

      </article>
      <?php endforeach; ?>
  </div>

</div>
