<?php 
get_header(); 
?>

<div class="container">
<?php
if (have_posts()):
	while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;

else:
	echo '<p>no posts to show</p>';

endif;
?>
</div>
<?php
get_footer();
?>