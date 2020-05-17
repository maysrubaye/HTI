<?php 
/**
* Template Name: Single Post Page Template
*/
get_header();

if (have_posts()):
	while(have_posts()) : the_post();
		the_content();
	endwhile;
else:
	echo '<p>no posts to show</p>';
endif;

get_footer();
?>