

<?php
    echo $this->Html->css('libs/quill.snow.css');
    echo $this->Html->script('libs/quill.core.js');
    echo $this->Html->script('libs/quill.min.js');

    echo $this->Form->create($article,['class'=>'form admin']);
    echo $this->Form->input('title', ['default'=> '', 'placeholder'=> 'タイトルを入力してください']);
    echo $this->Form->input('category', ['type'=> 'select', 'options'=> ['開発', 'デザイン']]);
    echo $this->Form->input('content', ['id'=> 'editor']);
    echo $this->Form->button($btn_text ,['class'=>'btn btn-primary']);
    echo $this->Form->end();
?>

<script>
    var quill = new Quill('#editor', {
        theme : 'snow'
    });

</script>
