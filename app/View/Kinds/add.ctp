<div class="row-fluid">
  <div class="span4 offset2">
    <h2>収支区分を追加</h2>
    <?php echo $this->Html->link('区分一覧へ', array('action' => 'index')); ?><br />
    <?php echo $this->Html->link('トップへ', array('controller'=>'Accounts','action'=>'index')); ?>
    <?php
echo $this->Form->create('Kind');
echo $this->Form->input('code');
echo $this->Form->input('name');
echo '<label>収入ならチェック'.$this->Form->checkbox('isincoming', array('class'=>'checkbox')).'</label>';
echo $this->Form->hidden('user_id', array('value'=>$user['id']));
    ?>
    <input type="submit" value="区分登録" class="btn btn-primary">
    </form>
  </div>
  
  <div class="span4">
    <table class="table table-striped">
      <tr>
        <th>区分コード</th>
        <th>区分名</th>
        <th>収入or支出</th>
      </tr>
      <?php foreach ($kinds as $kind): ?>
      <tr>
        <td><?php echo $kind['Kind']['code']; ?></td>
        <td><?php echo $kind['Kind']['name']; ?></td>
        <td><?php echo ($kind['Kind']['isincoming']==1) ? "収入" : "支出"; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
