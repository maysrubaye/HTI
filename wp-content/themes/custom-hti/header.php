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

		<!-- header-search -->


                    
        <!-- /header-search -->
		
		<nav id="main-navvv" class="site-nav navbar navbar-default" role="navigation">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
		<?php if ( is_front_page() ) : 
			$posttitle = 'banner';
			$postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
			$post = get_post($postid); //assuming $id has been initialized
			
			setup_postdata($post);
			the_content();
		endif;


			$posttitle = 'header';
			$postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
			$post = get_post($postid); //assuming $id has been initialized
			
			setup_postdata($post);
			// display the post
			the_content();
		?>
	</header>

</body>
