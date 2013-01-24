<div class="users form container">
<?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
    <h2 class="form-signin-heading"><?php echo __('新規ユーザー登録'); ?></h2>
    <p>アスタリスク(*)がついている項目は必須です。メールアドレスを登録した方には障害発生時に連絡することがあります。</p>
    <?php
      echo $this->Form->input('username');
      echo $this->Form->input('password');
      echo $this->Form->input('mail', array('type'=>'text'));
    ?>
    <input type="submit" value="登録" class="btn btn-large btn-primary">
</form>
</div>
