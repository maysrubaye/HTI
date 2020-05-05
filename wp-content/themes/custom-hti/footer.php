<footer class="site-footer">
	<?php 
		$args = array(
        	'post_type' => 'post'
    	);

    	$post_query = new WP_Query($args);

	    if($post_query->have_posts() ) {
	        while($post_query->have_posts() ) {
	            $post_query->the_post();
				if ((get_the_title() == "footer")) : 
					the_content();
				endif;
	        }
        }
?>
</footer>


<?php wp_footer();?>
</body>
</html>