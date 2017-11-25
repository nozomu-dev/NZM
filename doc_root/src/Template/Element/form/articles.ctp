<?php
  echo $this->Form->create($article,['class'=>'form admin']);
  echo $this->Form->input('title');
  echo $this->Form->input('content');
  echo $this->Form->button($btn_text ,['class'=>'btn btn-primary']);
  echo $this->Form->end();
?>
