<div class="row-fluid">
  <div class="span8">
    <h2>収支区分一覧</h2>
    <?php echo $this->Html->link('収支区分を追加', array('controller' => 'kinds',
                                               'action' => 'add'),
                                               array('class'=>'btn')); ?>
    <table class="table table-striped">
      <tr>
        <th>区分コード</th>
        <th>区分名</th>
        <th>収入or支出</th>
        <th>操作</th>
      </tr>
      <?php foreach ($kinds as $kind): ?>
      <tr>
        <td><?php echo $kind['Kind']['code']; ?></td>
        <td><?php echo $kind['Kind']['name']; ?></td>
        <td><?php
          if ($kind['Kind']['isincoming'] == 1)
            echo "収入";
          else echo "支出"; ?>
        </td>
        <td>
          <?php echo $this->Html->link('区分別集計', array('action'=>'view',$kind['Kind']['id']),array('class'=>'btn')); ?>&nbsp;&nbsp;
          <?php echo $this->Html->link('編集', array('action'=>'edit',$kind['Kind']['id']),array('class'=>'btn')); ?>
          <?php echo //$this->Form->postLink(
            'delete'//,
            //array('action' => 'delete', $kind['Kind']['id']),
            /*array('confirm' => 'are you sure?'));*/ ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
