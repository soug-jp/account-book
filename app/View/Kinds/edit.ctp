<h1>edit code</h1>

<?php 
echo $this->Form->create('Kind', array('action' => 'edit'));
echo $this->Form->input('code');
echo $this->Form->input('name');
echo "isincoming" . $this->Form->checkbox('isincoming');
echo $this->Form->end('save code');
?>
