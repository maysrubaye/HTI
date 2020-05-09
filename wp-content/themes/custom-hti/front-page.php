<?php 
/**
* Template Name: Home Page Template
*/
get_header(); 
		echo "string";

		$query = new WP_Query( array( 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes' ) );
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
					the_content();
				endwhile;
			endif;
get_footer();
?>