<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="about-title page-title">Media & Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="boxed-content">
				<section class="wpb_row row-fluid section-padd container-fluid" id="gallery">
					<?php the_content() ?>
				</section>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-body">
								<img src="" class="modal-img">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>