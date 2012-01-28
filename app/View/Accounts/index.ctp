<style>
.left {
    width:70%;
    float:left;
}
.right {
    width:30%;
    float:right;
}
</style>
<div class="left">
<h1>account list</h1>
<?php echo $this->Html->link('add new account',array('action'=>'add')); ?>
<table>
  <tr>
    <th>id</th>
    <th>date</th>
    <th>code</th>
    <th>yen</th>
    <th>memo</th>
  </tr>

  <?php foreach ($accounts as $ac): ?>
  <tr>
    <td><?php echo $ac['Account']['id']; ?></td>
    <td><?php echo $ac['Account']['date']; ?></td>
    <td><?php echo $ac['Account']['kind_id']; ?></td>
    <td><?php echo $ac['Account']['yen']; ?></td>
    <td><?php echo $ac['Account']['memo']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</div>

<div class="right">
<h1>code list</h1>
<?php echo $this->Html->link('add code',array('controller'=>'Kinds',
                                              'action'=>'add')); ?>
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
    <td><?php if ($kind['Kind']['isincoming']==1) 
    echo "in";
    else echo "out"; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
