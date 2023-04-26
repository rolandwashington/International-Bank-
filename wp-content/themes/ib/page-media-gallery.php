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
					<?php
					$args = array(
						'post_type' => 'attachment',
						'post_mime_type' => 'image,video',
						'post_status' => 'inherit',
						'posts_per_page' => -1
					);
					
					$attachments = get_posts( $args );
					
					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
							if ( strpos( $attachment->post_mime_type, 'video' ) !== false ) {
								$video = wp_get_attachment_url( $attachment->ID ); ?>
								<video controls>
									<source src="<?php echo $video; ?>" type="<?php echo $attachment->post_mime_type; ?>">
								</video>
							<?php } else {
								$image = wp_get_attachment_image_src( $attachment->ID, 'full' ); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php echo $attachment->post_title; ?>" class="img-responsive">
							<?php }
						}
					}
					
					?>
				</section>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-body">
								<img src="" class="modal-img">
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>