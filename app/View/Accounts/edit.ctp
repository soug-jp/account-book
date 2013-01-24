<div class="left">
<h1>収支項目の編集</h1>
<?php
echo $this->Form->create('Account');
echo $this->Form->input('date', array('type' => 'date'));
echo $this->Form->input('kind_id');
echo $this->Form->input('yen');
echo $this->Form->input('memo');
echo $this->Form->hidden('id');
echo $this->Form->end('記録更新');
?>
</div>
<div class="right">
<?php echo $this->element('codelist'); ?>
</div>
