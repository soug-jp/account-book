<h1>code list</h1>
<?php echo $this->Html->link('add code', array('controller' => 'kinds',
                                               'action' => 'add')); ?>
<table>
  <tr>
    <th>code</th>
    <th>name</th>
    <th>in or out</th>
    <th>action</th>
  </tr>
  <?php foreach ($kinds as $kind): ?>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td><?php
      if ($kind['Kind']['isincoming'] == 1)
        echo "in";
      else echo "out"; ?>
    </td>
    <td>
      <?php echo $this->Html->link('view', array('action'=>'view',$kind['Kind']['id'])); ?>
      <?php echo $this->Html->link('edit', array('action'=>'edit',$kind['Kind']['id'])); ?>
      <?php echo //$this->Form->postLink(
        'delete'//,
        //array('action' => 'delete', $kind['Kind']['id']),
        /*array('confirm' => 'are you sure?'));*/ ?>
  </tr>
  <?php endforeach; ?>
</table>
