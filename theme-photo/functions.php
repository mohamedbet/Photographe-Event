<?php

    // Enregistrement des menus
function theme_register_menus()
{
	register_nav_menus(array(
		'header' => __('Principal'),
		'footer' => __('Pied de page'),
	));
}
add_action('init', 'theme_register_menus');

// Personnalisation du thème
function montheme_customize_register($wp_customize)
{
	// Ajout d'une section pour le logo personnalisé
	$wp_customize->add_section('montheme_logo_section', array(
		'title'      => __('Logo personnalisé', 'montheme'),
		'priority'   => 30,
	));

	// Ajout de la fonctionnalité de logo personnalisé
	$wp_customize->add_setting('montheme_logo');

	// Ajout du contrôle pour téléverser le logo personnalisé
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'montheme_logo', array(
		'label'    => __('Téléverser votre logo', 'montheme'),
		'section'  => 'montheme_logo_section',
		'settings' => 'montheme_logo',
	)));
}
add_action('customize_register', 'montheme_customize_register');
