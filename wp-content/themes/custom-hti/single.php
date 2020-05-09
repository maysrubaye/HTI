<?php 
/**
* Template Name: Single Post Page Template
*/
get_header();
?>

<div class="container">
<?php

if (have_posts()):
	while(have_posts()) : the_post();?>
		<?php 
		if ((get_the_title() != "header" && get_the_title() != "banner" && get_the_title() != "footer")) : 
			?> 
		<!-- <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2> -->
		<?php
			the_content();
		endif;  
	endwhile;
else:
	echo '<p>no posts to show</p>';

endif;
?>
</div>

<?php
get_footer();
