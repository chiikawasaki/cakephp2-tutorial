<h2>Add Post</h2>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
//textereaの行数を決める
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->end('Save Post'); 

