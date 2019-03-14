<?php get_header(); ?>

<div>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<!-- The slideshow -->
			<?php
			$args = array(
				'post_type' => 'post',
				'product_cat' => 'slide',
				'p' => 84,
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args );
			?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="carousel-item active">
					<?php the_post_thumbnail('full', array('class' => 'img_slide')); ?>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>

			<?php $args = array( 'post_type' => 'post', 'product_cat' => 'slide','p' => 86); $the_query = new WP_Query( $args ); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="carousel-item ">
					<?php the_post_thumbnail('full', array('class' => 'img_slide')); ?>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>

			<?php $args = array( 'post_type' => 'post', 'product_cat' => 'slide','p' => 84); $the_query = new WP_Query( $args ); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="carousel-item ">
					<?php the_post_thumbnail('full', array('class' => 'img_slide')); ?>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</div>
<br><br>
<section class="margin_low1">
	<div class="container">
		<br>
		<div class="text-center"> 
			<?php $args = array('post_type' => 'headpage','p'=> 111,  'posts_per_page' => 1);
			$the_query = new WP_Query( $args );?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h1> <?php    the_title();  ?> </h1>
				<div> <?php   the_excerpt();  ?> </div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		<br>

		<div class="row">

			<?php

			$args = array( 'post_type' => 'product',
				'product_cat' => 'product1',
				'posts_per_page' => 4

			);
			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>


				<div class="col-sm-3 col-6">

					<div class="box_img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array(
								'class' => 'img_center')); ?>
							</a>

						</div>

						<div class="text-center"> 
							<div class="product_name"><b><?php the_title();  ?></b></div>
							<div class="price_set"><b><?php echo "ราคา ". " " .$product->get_regular_price(); ?> บาท</b></div>
							<div class="dt_set" "><?php   the_excerpt();  ?></div>

							<a href="?add-to-cart=<?php echo $loop->post->ID; ?>" rel="nofollow" data-product-id="<?php echo $loop->post->ID; ?>" ><div class="cat_btn">หยิบใส่ตะกร้า</div></a>




						</div>
					</div>



				<?php endwhile; wp_reset_query(); // Remember to reset ?>




			</div>


		</div>	

	</section>


	<br>
	<br>
	<br>

	<section class="margin_low2">

		<div class="container">
			<br>
			<div class="text-center">
				<?php $args = array('post_type' => 'headpage','p'=> 112,  'posts_per_page' => 1);
				$the_query = new WP_Query( $args );?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<h1> <?php    the_title();  ?> </h1>
					<div> <?php   the_excerpt();  ?> </div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<br>


			<div class="row">
				<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 4,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_visibility',
							'field'    => 'name',
							'terms'    => 'featured',
						),
					),
				);
				$loop = new WP_Query( $args );


				while ( $loop->have_posts() ) : $loop->the_post(); ?>


					<div class="col-sm-3 col-6">

						<div class="box_img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full', array(
									'class' => 'img_center')); ?>
								</a>

							</div>

							<div class="text-center"> 
								<div class="product_name"><b><?php the_title();  ?></b></div>
								<div class="price_set"><b><?php echo "ราคา ". " " .$product->get_regular_price(); ?> บาท</b></div>
								<div class="dt_set" "><?php   the_excerpt();  ?></div>

								<a href="?add-to-cart=<?php echo $loop->post->ID; ?>" rel="nofollow" data-product-id="<?php echo $loop->post->ID; ?>" ><div class="cat_btn">หยิบใส่ตะกร้า</div></a>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); // Remember to reset ?>
				</div>
			</div>	
		</section>
		<br>
		<br>
		<br>
		<section style=" background-image: url(http://localhost/cheonshop/wp-content/uploads/2019/02/bg.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;">

		<br><br>
		<?php 
		$args = array(
			'post_type' => 'post',
			'category_name' => 'promotion',
			'posts_per_page' => 1
		);
		$the_query = new WP_Query( $args );?>

		<div class="container">
			<div class="row">

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<div class=" col-sm-12 text-center"> 
						<h1><?php the_title();  ?></h1>
						<div class="px-4"> <small><?php   the_excerpt();  ?></small> </div>
					</div>
					<br>
					<div class="col-sm-12">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array(
								'class' => 'mx-auto d-block')); ?>
							</a>
						</div>

						

					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>

			<br><br>

		</section>


		<br><br>
		<br><br>


		<section class="margin_low3">

			<div class="container">
				<br>
				<div class="text-center"> 
					<?php $args = array('post_type' => 'headpage','p'=> 113,  'posts_per_page' => 1);
					$the_query = new WP_Query( $args );?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h1> <?php    the_title();  ?> </h1>
						<div> <?php   the_excerpt();  ?> </div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<br>


				<div class="row">
					<?php
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => 4,
						'meta_query'     => array(
							'relation' => 'OR',
                    array( // Simple products type
                    	'key'           => '_sale_price',
                    	'value'         => 0,
                    	'compare'       => '>',
                    	'type'          => 'numeric'
                    ),
                    array( // Variable products type
                    	'key'           => '_min_variation_sale_price',
                    	'value'         => 0,
                    	'compare'       => '>',
                    	'type'          => 'numeric'
                    )
                )
					);
					$loop = new WP_Query( $args );


					while ( $loop->have_posts() ) : $loop->the_post(); ?>


						<div class="col-sm-3 col-6">
							<span class="onsale">Sale!</span>

							<div class="box_img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full', array(
										'class' => 'img_center')); ?>
									</a>

								</div>

								<div class="text-center"> 
									<div class="product_name"><b><?php the_title();  ?></b></div>

									<div class="price_set"><b><?php echo "ราคา ". " " .$product->get_regular_price(); ?> บาท</b></div>
									<div class="dt_set" "><?php   the_excerpt();  ?></div>

									<a href="?add-to-cart=<?php echo $loop->post->ID; ?>" rel="nofollow" data-product-id="<?php echo $loop->post->ID; ?>" ><div class="cat_btn">หยิบใส่ตะกร้า</div></a>
								</div>
							</div>



						<?php endwhile; wp_reset_query(); // Remember to reset ?>



					</div>



				</div>	

			</section>



			<br><br>
			<br><br>


			<section class="margin_low4">

				<div class="container">
					<br>
					<div class="text-center"> 	<?php $args = array('post_type' => 'headpage','p'=> 114,  'posts_per_page' => 1);
					$the_query = new WP_Query( $args );?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h1> <?php    the_title();  ?> </h1>
						<div> <?php   the_excerpt();  ?> </div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<br>

				<div class="row">
					<?php 
					$args = array(
						'post_type' => 'post',
						'category_name' => 'review',
						'posts_per_page' => 3
					);
					$the_query = new WP_Query( $args );?>


					<div class="row px-3">

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



							<div class="col-sm-4">
								<a href="<?php the_permalink(); ?>">
									<div class="box_img">  
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('full', array(
												'class' => 'img_center')); ?>
											</a>
										</div>

										<div class="text-center"> 
											<div class="product_name"><b> <?php the_title();  ?> </b></div>
											<div class="dt_set" "> <?php   the_excerpt();  ?> </div>
											<a href="<?php the_permalink(); ?>"><div class="cat_btn">อ่านเพิ่มเติม</div></a>
										</div>
									</a>
								</div>




							<?php endwhile; wp_reset_postdata(); ?>





						</div>
					</div>	

				</section>

				<br>
				<br>
				<br>

				<section style="     background-repeat: no-repeat;
				background-color: #f7f7f7;
				background-size: cover;
				background-position: center;">

				<br><br>

				<div class="container">

					<div class="row">


						<?php 
						$args = array(
							'post_type' => 'post',
							'p' => 79,
							'posts_per_page' => 1
						);
						$the_query = new WP_Query( $args );?>

						<div class="container">
							<div class="row">

								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



									<div class="col-sm-12">

										<div class="text-center" > <h1>ติดต่อเรา</h1></div>
										<div class="con_setbox "> 
											<div class="row ">

												<div class="col-sm-6  col-12 " style="margin-bottom: 10px;" >

													<?php the_post_thumbnail('full', array(
														'class' => 'mx-auto d-block')); ?>

													</div>

													<div class="col-sm-6 col-12 con_settel">
														<div>
															<?php  the_content(); ?>
														</div>
													</div> 

												</div>

											</div>

										</div>

									<?php endwhile; wp_reset_postdata(); ?>


								</div>

							</div>

							<br><br>

						</section>




						<main id="main" class="site-main" role="main">





						</main><!--.site-main-->

						<?php get_footer(); ?>