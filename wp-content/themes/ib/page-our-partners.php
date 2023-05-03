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
				<section id="ib-partners" class="wpb_row row-fluid section-padd ib-services-wrap">
					<div class="container">
						<div class="row">
							<div class="wpb_column column_container col-sm-12">
								<div class="column-inner">
									<div class="wpb_wrapper">
										<div class="section-head">
											<!-- <h3 class="section-title">Our Partners</h3> -->
										</div>

										<div id="ib-services" class="testi-slider" data-show="3" data-arrow="true">
											<a href="http://www.panafricancapital.com/" target="_blank">
												<div class="testi-item box-shadow-hover">
													<div class="testi-head">
														<img width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/partners/pan-african.png" class="client-img" alt="">
													</div>
												</div>
											</a>
											<a href="https://trustbankgambia.com/" target="_blank">
												<div class="testi-item box-shadow-hover">
													<div class="testi-head">
														<img width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/partners/trust-bank.png" class="client-img" alt="">
													</div>
												</div>
											</a>
											
											<a href="https://www.databankgroup.com/" target="_blank">
												<div class="testi-item box-shadow-hover">
													<div class="testi-head">
														<img width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/partners/data-bank.png" class="client-img" alt="">
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>