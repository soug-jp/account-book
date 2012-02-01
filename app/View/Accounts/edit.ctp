<style>
.left {
    width:70%;
    float: left;
}
.right {
    width: 29%;
    float: right;
}
</style>
<div class="left">
<h1>add</h1>
<?php
echo $this->Form->create('Account');
echo $this->Form->input('date', array('type' => 'date'));
echo $this->Form->input('kind_id');
echo $this->Form->input('yen');
echo $this->Form->input('memo');
echo $this->Form->hidden('id');
echo $this->Form->end('save kindcount');
?>
</div>
<div class="right">
<h1>code list</h1>
<table>
  <tr>
    <th>code</th>
    <th>name</th>
    <th>in or out</th>
  </tr>
  <?php foreach ($kindl as $kind): ?>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td>
      <?php if ($kind['Kind']['isincoming']==1)
        echo "in";
      else echo "out";?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
