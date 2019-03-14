<?php get_header(); ?>







<main id="main" class="site-main" role="main">

	




	<?php 
/*
<div class="home-section -news">
	<div class="container">
		<h2>Recent News</h2>
		<?php 
			$args = array(
				// 'post_type' => 'post',
				// 'category_name' => 'news',
				'posts_per_page' => 4
				);
			$the_query = new WP_Query( $args );
		?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php get_template_part( 'template-parts/content', '' ); ?>

		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--container-->
</div><!--home-section-->
*/
?>

</main><!--.site-main-->

<?php get_footer(); ?>