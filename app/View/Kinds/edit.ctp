<div class="row-fluid">
  <div class="span4 offset4">
    <h2>区分情報の編集</h2>
    <p><?php echo $this->Html->link('区分一覧へ戻る',array('action'=>'index')); ?></p>
    <p><?php echo $this->Html->link('トップへ戻る', array('action'=>'index','controller'=>'Accounts')); ?></p>
    <?php 
echo $this->Form->create('Kind', array('action' => 'edit'));
echo $this->Form->input('code');
echo $this->Form->input('name');
echo "収入ならチェック" . $this->Form->checkbox('isincoming');
echo $this->Form->hidden('user_id',array('value'=>$user['id']));
    ?>
    <input type="submit" value="保存" class="btn btn-primary">
    </form>
  </div>
</div>
