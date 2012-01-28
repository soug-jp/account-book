<h1>add code</h1>
<?php echo $this->Html->link('一覧へ戻る', array('action' => 'index')); ?>
<style>
.left {
  float: left;
  width: 80%;
}
.right {
  float: right;
  width:19%;
}
</style>

<div class="left">
<?php
echo $this->Form->create('Kind');
echo $this->Form->input('code');
echo $this->Form->input('name');
echo 'isincoming' . $this->Form->checkbox('isincoming');
echo $this->Form->end('save code');
?>

</div>
<div class="right">
<table>
  <tr>
    <th>code</th>
    <th>name</th>
    <th>in or out</th>
  </tr>
  <?php foreach ($kinds as $kind): ?>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td><?php echo ($kind['Kind']['isincoming']==1) ? "in" : "out"; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
