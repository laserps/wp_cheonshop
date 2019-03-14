<?php 
/**
 * Template Name: เกี่ยวกับร้าน
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
				'post_type' => 'post',
				'p' =>  42 ,
				'posts_per_page' => 1
				);
			$the_query = new WP_Query( $args );?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



         <?php  the_content(); ?>



		<?php endwhile; wp_reset_postdata(); ?>
<br><br>
</div><!--container-->
<?php get_footer(); ?>
