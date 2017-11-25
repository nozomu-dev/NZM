<?php
  echo $this->Form->create($user,['class'=>'form admin']);
  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('role',['options'=>['admin','author'],'empty'=>'管理権限を選んでください。']);
  echo $this->Form->button($btn_text, ['class'=>'btn btn-primary']);
  echo $this->Form->end();
?>
