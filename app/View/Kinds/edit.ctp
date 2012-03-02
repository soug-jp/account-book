<h1>edit code</h1>

<?php 
echo $this->Form->create('Kind', array('action' => 'edit'));
echo $this->Form->input('code');
echo $this->Form->input('name');
echo "isincoming" . $this->Form->checkbox('isincoming');
echo $this->Form->hidden('user_id',array('value'=>$user['id']));
echo $this->Form->end('save code');
?>
