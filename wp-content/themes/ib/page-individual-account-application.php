<?php 
    get_header(); 
    require_once get_template_directory() . "/core/form-handlers/bank-account-online-application.php";
?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
                        <h6><span>OPEN AN ACCOUNT</span></h6>
						<h1 class="page-title">Application Form <?php if (!empty($ThankYou)) { echo $ThankYou; } ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="boxed-content">
				<!-- IB EMPLOYMENT / INTERNSHIP -->
				<div class="career-box" id="ib-application-form">
					<h5>ACCOUNT INFORMATION</h5>
					<div class="content-box">
                        <form action="/account-application" method="POST" enctype="multipart/form-data">
							<embed src="<?php echo get_template_directory_uri() ?>/personal-account-form.pdf" type="" width="100%" height="600">
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
