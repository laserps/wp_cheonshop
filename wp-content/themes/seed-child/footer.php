<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */
?>
</div><!--site-content-->

<?php if (is_active_sidebar( 'footbar' ) ) : ?>
	<aside id="footbar" class="site-footbar" role="complementary">
		<div class="container">
			<?php dynamic_sidebar( 'footbar' ); ?>
		</div>
	</aside><!--site-footbar-->

	<?php else: ?>
		<!-- <div class="site-footer-space"></div> -->



		<section  class="foot_setbox">

			<div class="container-fluid">
				<div class="row foot_boxin">
					<div class="col-sm-6">
						<div class="row"> 

							<div class="col-sm-3">
								<div class="foot_logo"> 
									<?php $args = array('post_type' => 'page','p'=> 62)
									;$the_query = new WP_Query( $args );?>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<?php the_post_thumbnail('full', array(
											'class' => 'mx-auto d-block')); ?>
											<?php endwhile; wp_reset_postdata(); ?>



										</div>

									</div>
									<div class="col-sm-9">
										<div class="foot_headtext">
											<b>รายละเอียดสั้นๆ </b>
											<small>
												<?php $args = array('post_type' => 'post','p'=> 42)
												;$the_query = new WP_Query( $args );?>
												<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
													<?php   the_excerpt();  ?>
													<?php endwhile; wp_reset_postdata(); ?>

													</small>

												</div>
											</div>

										</div>
									</div>
									<div class="col-sm-6">

										<div class="row"> 


											<div class="col-sm-6">
												<b>หน้าหลัก</b>
												<div class="foot_lineh"> 
													<div class="row"> 
														<div class="col-sm-6">
															<a href="#"><li>หน้าแรก</li></a>
															<a href="#"><li>สินค้า</li></a> 
														</div>
														<div class="col-sm-6">
															<a href="#"><li>รีวิว</li></a>
															<a href="#"><li>ติดต่อเรา</li></a>
														</div>
													</div>

												</div>


											</div>
											<div class="col-sm-6">
												<b> สมัครสมาชิค</b>
												<div class="foot_lineh"> 
													<li><?php if ( is_user_logged_in() ) { ?>
														<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a>
													<?php } 
													else { ?>
														<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a>
														<?php } ?></li>

													</div>


												</div>

											</div>
										</div> 
									</div>

								</div>
							</section>
							<footer id="colophon" class="site-footer" role="contentinfo">
								<div class="container">
									<div class="site-info">
										Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
									</div><!--site-info-->
								</div><!--container-->
							</footer><!--site-footer-->

						<?php endif; ?>

					</div><!--site-canvas-->
				</div><!--#page-->




				<?php wp_footer(); ?>

			</body>
			</html>
