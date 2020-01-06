<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wp Theme</title>
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="container">
		<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					// 'menu' => 'Top Bar'
					'menu_class' => 'top-bar'
				)
			);
		?>
	</div>
</header>
