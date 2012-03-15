<div class="left">
<h1>収支記録の登録</h1>
<?php
echo $this->Form->create('Account');
echo $this->Form->input('date', array('type' => 'date'));
echo $this->Form->input('kind_id');
echo $this->Form->input('yen');
echo $this->Form->input('memo');
echo $this->Form->hidden('user_id',array('value'=>$user['id']));
echo $this->Form->end('登録実行');
?>
</div>
<div class="right">
<?php echo $this->element('codelist'); ?>
</div>
