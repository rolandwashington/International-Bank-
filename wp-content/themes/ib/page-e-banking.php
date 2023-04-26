<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title ebanking-title">eBanking Services</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="entry-content">
		<div class="container">
			<div class="row">

				<div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
					<main id="main" class="site-main">

						<article class="ot_service type-ot_service status-publish has-post-thumbnail hentry">
							<div class="inner-post">
								<section class="wpb_row row-fluid">
									<div class="container">
										<div class="row">
											<div class="wpb_column column_container col-sm-12">
												<div class="column-inner">
													<div class="wpb_wrapper target-ib-links-inservices">
														<h2>Our e-Banking Services</h2>
														<div class="wpb_text_column wpb_content_element">
															<div class="wpb_wrapper">
																<p><span>Online banking</span> - Run your business more efficiently with our Online baking solutions. You can manage your account, review and approve transactions and access your account information anytime, anywhere. <a class="link-box pagelink" href="<?php echo site_url() ?>/apply-for-internet-banking">Sign up for Online Banking</a></p>
																<p><span>e-Statement</span> -  Need your account statement? There's no need to make the trip to the bank. We can digitally send your account statement whenever you need it, or have them sent to you periodically. <a class="link-box pagelink" href="#">Sign up for e-Statements</a></p>
																<p><span>e-Alerts</span> - Get notified of every transaction via your account. Notifications about withdrawals, deposits and check encashment will be sent to you via email or sms. All alerts will include your updated account balance. <a class="link-box pagelink" href="">Sign up for e-Alert</a></p>
																<p><span>SMS Alert</span> - Get notified of every transaction via your account. Notifications will be sent to you via SMS. All alerts will include your updated account balance. <a class="link-box pagelink" href="<?php echo site_url() ?>/apply-for-sms-alert">Sign up for SMS Alert</a></p>
																<p><span>ATM</span> - With our ATM service, your bank is never closed. Access your cash on-demand from our over 20 locations Nationwide. <a class="link-box pagelink" href="<?php echo site_url() ?>/apply-for-atm">Sign up for ATM</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</article>

					</main>
					<!-- #main -->
				</div>

				<?php require_once get_template_directory() . "/core/includes/services-aside.php"; ?>

			</div>
		</div>
	</div>

</div>
	    
<?php get_footer(); ?>