<h2>Edit Post</h2>

<?php
echo $this->Form->create('Post',array('url' =>array('action'=>'edit')));
echo $this->Form->input('title');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->end('Save!');