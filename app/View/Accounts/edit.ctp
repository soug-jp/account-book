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
<h1>収支区分リスト</h1>
<table>
  <tr>
    <th>区分コード</th>
    <th>区分名</th>
    <th>収入or支出</th>
  </tr>
  <?php foreach ($kindl as $kind): ?>
  <tr>
    <td><?php echo $kind['Kind']['code']; ?></td>
    <td><?php echo $kind['Kind']['name']; ?></td>
    <td>
      <?php if ($kind['Kind']['isincoming']==1)
        echo "収入";
      else echo "支出";?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
