<div class="sec-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="green.png" height="175">
			</div>
			<div class="col-md-8">
				<h2>Historic Takoma, Inc</h2>
				<p>Historic Takoma, Inc. Celebrating Service to the Community <br> Since 1979 </p>
			</div>
		</div>
	</div>
</div>
<?php

get_header();

if (have_posts()) : ?>
	
	<h2>Search results for: <?php the_search_query(); ?></h2>
	
	<?php
	while (have_posts()) : the_post(); ?>
	
	<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
		
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
		
		
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>