

<?php
    echo $this->Html->css('libs/quill.snow.css');
    echo $this->Html->script('libs/quill.core.js');
    echo $this->Html->script('libs/quill.min.js');
?>


<?= $this->Form->create($article,['class'=>'form admin']) ?>

<?= $this->Form->input('title', ['default'=> '', 'placeholder'=> 'タイトルを入力してください']) ?>
<?= $this->Form->input('category', ['type'=> 'select', 'options'=> ['開発', 'デザイン']]) ?>

<?= $this->Form->input('content', ['type'=>'hidden', 'id'=>'content_input']) ?>

<div id="editor"></div>
<button id="editor_submit_test" type="button" name="button">sousin </button>

<?= $this->Form->button($btn_text ,['type'=>'submit', 'id'=>'editor_submit', 'class'=>'btn btn-primary'])?>
<?= $this->Form->end()?>


<script>
    var quill = new Quill('#editor', {
        theme : 'snow'
    });

    var cont;
    var input = document.getElementById('content_input');
    var button = document.getElementById('editor_submit');
    var editor = document.getElementsByClassName('ql-editor');

    button.addEventListener('click', function(){
        for(var i = 0; i < editor.length; i++) {
            cont = editor[i].innerHTML;
        }

        input.value = cont;
    });
</script>
