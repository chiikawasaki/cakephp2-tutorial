<h2><?php echo h($post['Post']['title']); ?></h2>

<p><?php echo h($post['Post']['body']); ?></p>

<ul>
<h2>Comments</h2>
<?php foreach ($post['Comment'] as $comment): ?>
<li id="comment_<?php echo h($comment['id']); ?>">
    <?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?>
    <?php 
        echo $this->Html->link('削除','#',array('class'=>'delete','data-comment-id'=>$comment['id']));
    ?>
     </li>
<?php endforeach; ?>
</ul>

<h2>Add Comment</h2>
<?php 
echo $this->Form->create('Comment',array('url' =>array('action'=>'add')));
echo $this->Form->input('commenter');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('post comment');

?>

<script>
    $(function(){
        $('a.delete').click(function(e){
            
            if(confirm('sure?')){
                e.preventDefault();
                $.post('/comments/delete/'+$(this).data('comment-id'),{},function(res){
                    $('#comment_'+res.id).fadeOut();
                },"json");
            }
            return false;
        });
    });
</script>