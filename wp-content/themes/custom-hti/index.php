<?php 
/**
* Template Name: Blog Page Template
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
		<div class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
			
			<!-- post-thumbnail -->
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
			</div><!-- /post-thumbnail -->
			
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | Posted in
				<?php
				$categories = get_the_category();
				$separator = ", ";
				$output = '';
				
				if ($categories) {
					
					foreach ($categories as $category) {
					
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
						
					}
					echo trim($output, $separator);
				}
				
				?>
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