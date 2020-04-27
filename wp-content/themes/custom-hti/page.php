<!-- <div class="sec-header">
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
</div> -->

<?php 
get_header(); 
?>

<div class="container">
<?php
if (have_posts()):
	while(have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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