<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
<header id="header" role="banner">
			<div id="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_theme_mod('montheme_logo'); ?>" alt=""></a>
			</div>
			</a>
			<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(array(
					'theme_location' => 'header',
					'menu_class' => 'menu-header', // Classe CSS pour le menu
					
				)); ?>
			</nav>
			
		</header>