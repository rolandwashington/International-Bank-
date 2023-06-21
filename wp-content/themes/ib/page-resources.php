<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="about-title page-title"><?php the_title() ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="wpb_row row-fluid section-padd">
        <div class="container">
			<?php
				// The Loop
				while (have_posts()) {
					the_post();
					?>
						<div class="resources-wrap">
							<?php
							$args = array(
								'post_type'      => 'ib_resource',
								'posts_per_page' => -1
							);

							$query = new WP_Query($args);

							if ($query->have_posts()) :
								while ($query->have_posts()) :
									$query->the_post();
									?>
										<div class="wrap-resource">
											<div class="resource-img">
												<img src="<?php echo get_template_directory_uri(); ?>/images/pdf.png" alt=""> 
											</div>
											<div class="resource-info">
												<h5><?php the_title(); ?></h5>
												<a href="<?php the_field("upload_pdf") ?>" target="_blank">Download PDF</a>
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
					<?php
				}
			?>
        </div>
    </section>
</div>


<?php get_footer(); ?>