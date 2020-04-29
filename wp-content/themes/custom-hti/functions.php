<?php

function hti_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hti_resources');


//nav menus
register_nav_menus(array(
	'primary' => __('Primary Menu')
));

// Remove p tags from category description
remove_filter('the_content','wpautop');
?>