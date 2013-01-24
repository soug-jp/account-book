<h2>Welcome!</h2>
<?php
echo $this->Html->link('ログイン', array('action'=>'login')); 
echo "<br />";
echo $this->Html->link('新規登録', array('action'=>'add'));
?>
