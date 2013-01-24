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
$cakeDescription = '家計簿Webシステム(仮称): Powered by CakePHP 2.0.5';
$user = AuthComponent::user();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
    <link rel="stylesheet" type="text/css" href="/css/common.css.php" />
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php 
            if ($user == null) 
                echo $this->Html->link($cakeDescription, '/'); 
            else 
                echo $this->Html->link($cakeDescription,
                        array('controller' => 'Accounts',
                              'action' => 'index'));?></h1>
		</div>
		<div id="content">
        <div id="welcome" style="text-align:right">
            <?php if ($user != null): ?>
            Welcome, <?php echo $user['username'];?> !&nbsp;<?php echo $this->Html->link('ログアウト',array('controller'=>'Users','action'=>'logout'));?>
            <?php endif; ?>
        </div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php if (defined('DEBUG')) echo $this->element('sql_dump'); ?>
</body>
</html>
