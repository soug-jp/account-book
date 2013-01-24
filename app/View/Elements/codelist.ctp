<div class="span4">
  <?php if (!isset($kindl)): ?>
  <h2>Undefined vaiable `kindl` !!!</h2>
  <?php else: ?>
  <h2>収支区分リスト</h2>
  <?php echo $this->Html->link('新規収支区分を追加',array('controller'=>'Kinds',
                                              'action'=>'add')); ?><br />
  <?php echo $this->Html->link('区分のみの一覧',array('controller'=>'Kinds','action'=>'index')); ?>
  <table class="table table-striped">
    <tr>
      <th>区分コード</th>
      <th>区分名</th>
      <th>収入or支出</th>
      <th>操作</th>
    </tr>
    <?php foreach ($kindl as $kind): ?>
    <tr>
      <td><?php echo $kind['Kind']['code']; ?></td>
      <td><?php echo $kind['Kind']['name']; ?></td>
      <td><?php if ($kind['Kind']['isincoming']==1) 
      echo "収入";
      else echo "支出"; ?></td>
      <td><?php
      echo $this->Html->link('区分別集計',array('controller'=>'Kinds',
                                          'action'=>'view',$kind['Kind']['id']),
                                          array('class'=>'btn'));
      ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <?php endif; ?>
</div>
