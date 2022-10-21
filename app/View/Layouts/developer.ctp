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

		echo $this->Html->css('cake.generic');

		echo $this->Html->css('okearin');
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
</head>
<body>

	<div id="banner-container">
		<div id ="banner-wrapper">

			<div id="logo-box">
				<?php echo $this->Html->image('page/okearin-logo.png', array("alt"=>"Okearin.ng", "url" => array("controller"=>"okearins", "action"=>"home"))); ?>
			</div>
			<div class="clearfloat"></div>

		</div>
	</div>
	
	
		
		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		
	<?php echo $this->fetch('script'); ?>
</body>
</html>
