<?php 
/**
* Template Name: Blog Page (Post list) Template
*/
get_header();
?>

<div class="container">
	<br>
		<h2>All Features</h2>

<?php
if (have_posts()):
	while(have_posts()) : the_post();?>
		<?php 
		if ((get_the_title() != "header" 
			&& get_the_title() != "banner" 
			&& get_the_title() != "footer" 
			&& (get_the_title() != "Focus Areas" && get_the_title() != "focus areas") 
			&& (get_the_title() != "Upcoming Events" && get_the_title() != "upcoming events"))) : ?>

		<div class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
			
			<!-- post-thumbnail -->
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
			</div><!-- /post-thumbnail -->
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<p class="post-info"><?php the_time('F j, Y g:i a');?>
				</p>		
			<?php the_excerpt(); ?>		
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