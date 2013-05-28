<?php
/**
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Tiendas ROCKY - admin');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?> :
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('estilos');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		
		<div id='cssmenu'>
		<ul>
		   <li class='active'><a href='index.html'><span>Inicio</span></a></li>
		   <li class='has-sub'><a href='#'><span>Ventas</span></a>
		      <ul>
		         <li><a href='#'><span>Productos</span></a></li>
		         <li class='last'><a href='#'><span>Extras</span></a></li>
		      </ul>
		   </li>
		   <li><a href='#'><span>About</span></a></li>
		   <li class='last'><a href='#'><span>Contact</span></a></li>
		</ul>
		</div>
			
		
		<div id="content">
	<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<!-- <?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?> -->
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
