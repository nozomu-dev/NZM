<!-- File:src/Tmplate/Admin/login.ctp  -->
<div id="articleList" class="user-list admin-display">
  <h1 class="controll-title">ユーザーの編集</h1>
  <p class="controll-caption">ユーザーの管理を行います。</p>

  <?= $this->Flash->render('auth') ?>
  <div class="edit--block">
    <?php
      echo $this->Form->create($user,['class'=>'form admin']);
      echo $this->Form->input('username');
      echo $this->Form->input('password');
      echo $this->Form->input('role',['options'=>['admin','author'],'empty'=>'管理権限を選んでください。']);
      echo $this->Form->button('編集内容を保存する',['class'=>'btn btn-primary']);
      echo $this->Form->end();
    ?>
  </div>
  <?= $this->Html->link('一覧へ戻る',['action'=>'userList'])?>
</div>
