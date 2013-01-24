<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeDescription = '家計簿Webシステム(仮称): Powered by CakePHP';
$user = AuthComponent::user();
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');

    echo $this->Html->css('bootstrap-responsive.min');

    echo $scripts_for_layout;
  ?>
    <?php
        echo $this->Html->script('http://code.jquery.com/jquery-latest.js');
        echo $this->Html->script('bootstrap.min');
    ?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
</head>
<body>
<a href="https://github.com/bis5"><img style="position: absolute; top: 0; right: 0; border: 0; margin-top:40px;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <?php if ($user == null)
        echo $this->Html->link($cakeDescription, '/', array('class'=>'brand'));
      else
        echo $this->Html->link($cakeDescription,
                array('controller' => 'Accounts',
                      'action' => 'Index'), array('class'=>'brand'));
    ?>

    <?php if ($user == null):?>
      <?php echo $this->Form->create('User', array('action' => 'login', 'class' => 'navbar-form pull-right'));?>
        <input type="text" name="data[User][username]" maxlength="255" placeholder="Username">
        <input type="password" name="data[User][password]" placeholder="Password">
        <input class="btn" type="submit" value="ログイン">
      </form>
    <?php else:?>
    <div class="pull-right">
      Welcome, <?php echo $user['username'];?> !
      <?php echo str_replace('ログアウト', '<div class="btn">ログアウト</div>', $this->Html->link('ログアウト',
                    array('controller' => 'Users', 'action' => 'logout')));?>  
    </div>
    <?php endif;?>
  </diV>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <?php $flash = $this->Session->flash();
      if (!empty($flash)):?>
    <div class="span12 alert">
      <?php echo $flash ?>
    </div>
    <?php endif;?>
  </div>


      <?php echo $content_for_layout; ?>
  
  
  <footer class="footer">
    <div class="container" style="text-align:center;">
    <?php echo $this->Html->link(
        $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
        'http://www.cakephp.org/',
        array('target' => '_blank', 'escape' => false)
      );
    ?>
    <p>Copyright &copy; 2012- bis5, account-book is Open Source Software(OSS).</p>
    <p><a href="https://github.com/bis5/account-book">Github</a>&nbsp;-&nbsp;
    <a href="http://blog.bis5.net">Blog</a></p>
  <?php if (defined('DEBUG')) echo $this->element('sql_dump'); ?>
    </div>
  </footer>
</div>
</body>
</html>
