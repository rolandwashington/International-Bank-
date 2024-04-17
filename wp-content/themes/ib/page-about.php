<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="about-title page-title"><?php echo the_title() ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="boxed-content">
				<section class="wpb_row row-fluid section-padd">
					<div class="container">
						<div class="row">
							<div class="wpb_column column_container col-sm-12">
								<div class="column-inner">
									<div class="wpb_wrapper">
										<div class="section-head ">
											<h2 class="section-title"><span>We are International Bank (Liberia) Limited</span></h2>
										</div>

										<div class="wpb_text_column wpb_content_element about-text">
											<div class="wpb_wrapper">
												<p>International Bank (Liberia) Limited has been providing quality banking services to the Liberian community for over 50 years. IBLL was formally, known as ITC, which was established in 1947 by an act of legislature to manage the Liberian maritime program. ITC opened its commercial banking department in 1960 to handle customers account, money transfers and provide credit facilities, and in 2000 became a standalone commercial bank, adopting the name - International Bank (Liberia) Limited. </p>
												<p>Over the years, IB has provided excellent and unparalleled 1st class services to its customers and is committed to empowering Liberians and playing its role in the building of the nation.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="ib-team" class="wpb_row row-fluid section-padd no-top">
					<div class="container">
						<div class="row">
							<?php 
								$args = array(
									'post_type' => 'ib_team_member',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => 'directors',
										),
									),
								);
								
								$query = new WP_Query($args);
								
								if ($query->have_posts()) :
									?>
										<div class="wpb_column column_container col-sm-12">
											<div class="column-inner">
												<div class="wpb_wrapper">
													<div class="section-head ">
														<h2 class="section-title">Board of Directors</h2>
													</div>
													<div class="empty_space_30"></div>
												</div>
											</div>
										</div>
									<?php
									while ($query->have_posts()) :
										$query->the_post();
										?>
											<div class="wpb_column column_container col-sm-6 col-md-3">
												<div class="column-inner">
													<div class="wpb_wrapper">
														<div class="member-item radius">
															<div class="avatar">
																<?php the_post_thumbnail(); ?>
															</div>
															<div class="mem-info">
																<h5>
																	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
																	<span class="font12 normal"><?php echo get_post_meta(get_the_ID(), 'job_position', true); ?></span>
																</h5>
															</div>
														</div>
														<div class="empty_space_30"></div>
													</div>
												</div>
											</div>
										<?php
									endwhile;
									wp_reset_postdata();
								else :
									echo 'No IB Team Members found.';
								endif;

							?>
			            </div>
			        </div>
				</section>

				<section id="ib-team" class="wpb_row row-fluid section-padd no-top">
					<div class="container">
						<div class="row">							
							<?php 
								$args = array(
									'post_type' => 'ib_team_member',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => 'executive-managers',
										),
									),
								);
								
								$query = new WP_Query($args);
								
								if ($query->have_posts()) :
									?>
										<div class="wpb_column column_container col-sm-12">
											<div class="column-inner">
												<div class="wpb_wrapper">
													<div class="section-head ">
														<h2 class="section-title">Executive Management</h2>
													</div>
													<div class="empty_space_30"></div>
												</div>
											</div>
										</div>
									<?php
									while ($query->have_posts()) :
										$query->the_post();
										?>
											<div class="wpb_column column_container col-sm-6 col-md-3">
												<div class="column-inner">
													<div class="wpb_wrapper">
														<div class="member-item radius">
															<div class="avatar">
																<?php the_post_thumbnail(); ?>
															</div>
															<div class="mem-info">
																<h5>
																	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
																	<span class="font12 normal"><?php echo get_post_meta(get_the_ID(), 'job_position', true); ?></span>
																</h5>
															</div>
														</div>
														<div class="empty_space_30"></div>
													</div>
												</div>
											</div>
										<?php
									endwhile;
									wp_reset_postdata();
								else :
									echo 'No IB Executive Members found.';
								endif;
							?>
			            </div>
			        </div>
				</section>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>