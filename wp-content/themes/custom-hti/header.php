<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head();?>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5a06ce366f.js" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
	<!-- site header -->
	<header class="site-header">
		
		<nav class="site-nav navbar navbar-default" role="navigation">
			
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>

			<!-- header-search -->
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		    <!-- <div> -->
		    	<!-- <label class="screen-reader-text" for="s">Search for:</label> -->
		        <input type="text" value="<?php the_search_query()?>" name="s" id="s" placeholder="Search the Site"/>
		        <!-- <input type="submit" id="searchsubmit" value="Search" /> -->
		    <!-- </div> -->
			</form> 
        	<!-- /header-search -->
		</nav>

<?php 
		$args = array(
        	'post_type' => 'post'
    	);

    	$post_query = new WP_Query($args);

	    if($post_query->have_posts() ) {
	        while($post_query->have_posts() ) {
	            $post_query->the_post();

	            if ( is_front_page() ) :
	            	if ((get_the_title() == "banner")) : 
						the_content();
					endif; 
            		if ((get_the_title() == "header")) : 
						the_content();
					endif;
				else:
					if ((get_the_title() == "header")) : 
						the_content();
					endif;
				endif; 
	        }
        }

?>
	</header>

</body>
