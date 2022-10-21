<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->Html->css('okearin');
		echo $this->Html->css('jqzoom');
		echo $this->Html->css('square/red');
		echo $this->Html->css('easytabs');
		echo $this->Html->css('magnific-popup');

		echo $this->Html->script('jquery');
		echo $this->Html->script('jqzoom-core');
		echo $this->Html->script('icheck');
		echo $this->Html->script('hashchange');
		echo $this->Html->script('easytabs');
		echo $this->Html->script('magnific-popup');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
</head>
<body>

	<div id="banner-container">
		<div id ="banner-wrapper">
			
			<div id="user-options">
				<ul>
					<li>
						<i class="options-icon help-icon"></i>
						<span class="options-label">Help</span>
					</li>
					<li>
						<i class="options-icon track-icon"></i>
						<span class="options-label">Track Order</span>
					</li>
					<li>
						<i class="options-icon account-icon"></i>
						<span class="options-label">Account</span>
					</li>
					<li>
						<i class="options-icon more-icon"></i>
						<span class="options-label">More</span>
					</li>
					<li>
						<div id="cart-counter">20</div>
						<i class="options-icon cart-icon"></i>
						<span class="options-label">Cart</span>
					</li>
					<div class="clearfloat"></div>
				</ul>
			</div>

			<div id="search-box">
				<?php 
					echo $this->Form->create('find');
					echo $this->Form->input('search', array('placeholder'=>'Search for okearin goods: e.g spagetti'));
				 	echo $this->Form->end(''); 
				?>
			</div>

			<div id="logo-box">
				<?php echo $this->Html->image('page/okearin-logo.png', array("alt"=>"Okearin.ng", "url" => array("controller"=>"okearins", "action"=>"home"))); ?>
			</div>



			<div class="clearfloat"></div>

		</div>
	</div>
	<div id="menu-container">
		<div id="menu-wrapper">
			<?php echo $this->element('main_menu') ?>

			<ul id="log-reg">
				<li>login</li>
				<li>Register</li>
				<div class="clearfloat"></div>
			</ul>

			<div class="clearfloat"></div>
		</div>
	</div>

	<div id="crumbs"><span class="draw-attention">You are here:</span>
			<?php echo $this->Html->getCrumbs(' » ', 'Home'); ?>
	</div>
	
		
		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		
	<?php echo $this->fetch('script'); ?>
</body>
</html>
