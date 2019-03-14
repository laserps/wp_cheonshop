<?php 
/**
 * Template Name: ติดต่อเรา
 */
get_header(); ?>

<br><br>

<!-- <div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php the_title(); ?></h2>
	</div>
</div> -->

<div class="container">


	<?php 
	$args = array(
		'post_type' => 'page',
		'p'=> 62
	);
	$the_query = new WP_Query( $args );?>
	<br>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php   the_content(); ?>
		<?php endwhile; wp_reset_postdata(); ?>
		<br><br>
	</div><!--container-->
	<?php get_footer(); ?>

