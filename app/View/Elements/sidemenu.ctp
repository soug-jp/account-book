<div class="span4">
<?php /**
 * $id: sidemenu.ctp
 * @author bis5 <bis5@bis5.mydns.jp>
 */
 ?>
<?php /*$this->append('sidebar');*/ ?>
<h2>集計操作</h2>
<ul id='nav nav-list'>

    <li><?php echo $this->Html->link('収支差算出(全期間)', array('action'=>'all', 'controller'=>'calc')); ?></li>
    <li>収支差算出(年毎)<br />
    算出する年を選択して「算出」ボタンをクリック<?php
    echo $this->Form->create('Account', array('action'=>'calc_year'));
    echo $this->Form->year('date', 2011, date('Y'));?>
    <input type="submit" value="算出" class="btn btn-primary"></form></li>
    <li>収支差算出(月毎)</li>
    

</ul>
<br />
<?php /*$this->end();*/ ?>
</div>
