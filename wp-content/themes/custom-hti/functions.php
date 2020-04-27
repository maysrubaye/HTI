<?php

function hti_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'script', get_template_directory_uri() . '/custom.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'hti_resources');


//nav menus
register_nav_menus(array(
	'primary' => __('Primary Menu')
));

?>

