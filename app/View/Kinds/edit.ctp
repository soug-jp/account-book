<h1>区分情報の編集</h1>
<p><?php echo $this->Html->link('区分一覧へ戻る',array('action'=>'index')); ?></p>
<p><?php echo $this->Html->link('トップへ戻る', array('action'=>'index','controller'=>'Accounts')); ?></p>
<?php 
echo $this->Form->create('Kind', array('action' => 'edit'));
echo $this->Form->input('code');
echo $this->Form->input('name');
echo "収入ならチェック" . $this->Form->checkbox('isincoming');
echo $this->Form->hidden('user_id',array('value'=>$user['id']));
echo $this->Form->end('保存');
?>
