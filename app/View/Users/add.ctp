<div class="users form">
<?php echo $this->Form->create('User'); ?>
  <fieldset>
    <legend><?php echo __('新規ユーザー登録'); ?></legend>
    <p>アスタリスク(*)がついている項目は必須です。メールアドレスを登録した方には障害発生時に連絡することがあります。</p>
    <?php
      echo $this->Form->input('username');
      echo $this->Form->input('password');
      echo $this->Form->input('mail', array('type'=>'text'));
    ?>
  </fieldset>
<?php echo $this->Form->end(__('登録')); ?>
</div>
