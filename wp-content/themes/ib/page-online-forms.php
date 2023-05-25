<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="about-title page-title">Online Application Forms</h1>
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
										<ul>
                                            <li><a href="<?php echo site_url() ?>/account-application/">Account Application Form</a></li>
                                            <li><a href="<?php echo site_url() ?>/apply-for-push-pull/">Push & Pull Application Form</a></li>
                                            <li><a href="<?php echo site_url() ?>/card-services/">Card Services Form</a></li>
                                            <li><a href="<?php echo site_url() ?>/apply-for-sms-alert/">SMS Alert Application Form</a></li>
                                            <li><a href="<?php echo site_url() ?>/apply-for-internet-banking/">Online Banking Application Form</a></li>
                                            <li><a href="<?php echo site_url() ?>/apply-for-mobile-banking/">Mobile Banking Application Form</a></li>
                                        </ul>
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