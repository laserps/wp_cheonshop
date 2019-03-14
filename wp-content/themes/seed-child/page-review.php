<?php 
/**
 * Template Name: รีวิวสินค้าและบทความ
 */
get_header(); ?>
<br><br>

<!-- <div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php the_title(); ?></h2>
	</div>
</div>
 -->
<div class="container">


	<?php 
	$args = array(
		'post_type' => 'post',
		 'category_name' => 'review',
		'posts_per_page' => 12
	);
	$the_query = new WP_Query( $args );?>
	<br>
	<div class="text-center"> <h1>รีวิว และ บทความ </h1>
		<div>รายละเอียดสั้นๆ รายละเอียดสินค้าเบื้องต้น</div>
	</div>
	<br>

	<div class="row">

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full', array(
						'class' => 'full')); ?>

						<div class="text-center"> 
							<div class="product_name"><b> <?php the_title();  ?> </b></div>
							<div class="dt_set" "> <?php   the_excerpt();  ?> </div>
							<div class="btn_blog">อ่านรายละเอียด</div>
						</div>
					</a>
				</div>

			


		<?php endwhile; wp_reset_postdata(); ?>

</div>

		<br><br>
	</div><!--container-->
	<?php get_footer(); ?>

