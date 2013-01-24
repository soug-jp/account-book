<style type="text/css">
.form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
</style>
<div class="users form container">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('class'=>'form-signin')); ?>
    <h2 class="form-signin-heading"><?php echo __('登録したユーザー名とパスワードを用いてログインして下さい'); ?></h2>
    <?php
      echo $this->Form->input('username');
      echo $this->Form->input('password');
    ?>
    <input type="submit" value="ログイン" class="btn btn-large btn-primary">
</form>
</div>
