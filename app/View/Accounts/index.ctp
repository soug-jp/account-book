<div class="left">
<h1>家計簿</h1>
<?php echo $this->Html->link('収支記録を登録',array('action'=>'add')); ?>
<table>
  <tr>
    <th>日付</th>
    <th>区分名</th>
    <th>金額</th>
    <th>操作</th>
    <th>備考</th>
  </tr>
  <?php foreach ($accounts as $ac): ?>
  <tr>
    <td><?php echo $ac['Account']['date']; ?></td>
    <td><?php echo $kindn[$ac['Account']['kind_id']]; ?></td>
    <td><?php echo $ac['Account']['yen']; ?></td>
    <td>
      <?php echo $this->Html->link("編集",array("action"=>"edit",$ac['Account']['id'])); ?>
    </td>
    <td><?php echo $ac['Account']['memo']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</div>

<div class="right">
<?php echo $this->element('sidemenu'); ?>
</div>

<div class="right">
<?php echo $this->element('codelist'); ?>
</div>
