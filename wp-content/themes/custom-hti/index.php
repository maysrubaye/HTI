<?php 
get_header();
?>

<div class="feature">
<?php

if (have_posts()):
	while(have_posts()) : the_post();?>
		<?php 
		if ((get_the_title() != "header" && get_the_title() != "banner")) : 
			?>
		<div class="wider-container">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
	<?php 
	endif;  
	
	endwhile;

else:
	echo '<p>no posts to show</p>';

endif;
?>
</div>

<?php
get_footer();
?>