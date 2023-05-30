<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title resources-title">EMPLOYMENT / INTERNSHIP</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="boxed-content">
				<!-- IB EMPLOYMENT / INTERNSHIP -->
				<p>IB offers professional employment opportunities in various aspects of banking and related services. We are an equal opportunity employer and accept applications on an ongoing basis for available positions. Applicants should possess a minimum bachelor's/first degree. All applications are carefully reviewed by our Human Resources Department.</p>
				<p>For university students, IB provides internship programs where they can learn from experienced professionals in the banking industry. Internships typically last for three to six months. We encourage internship applicants to apply at least one month before their desired start date and include a referral letter from their Dean of College.</p>

				<?php
					// Query the IB Recruitment custom post type
					$ib_recruitment_args = array(
						'post_type' => 'ib_recruitment',
						'posts_per_page' => -1, // Display all job positions
					);

					$ib_recruitment_query = new WP_Query($ib_recruitment_args);

					// Check if there are job positions
					if ($ib_recruitment_query->have_posts()) {
						while ($ib_recruitment_query->have_posts()) {
							$ib_recruitment_query->the_post();
							$min_salary = get_post_meta(get_the_ID(), 'min_salary', true);
							$max_salary = get_post_meta(get_the_ID(), 'max_salary', true);
							$job_address = get_post_meta(get_the_ID(), 'job_address', true);
							?>
								<div class="col-lg-8 ib-job-list-item">
									<div class="job-card-two">
										<div class="row align-items-center">
											<div class="col-md-9">
												<div class="job-info">
													<h4>
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													</h4>
													<ul>
														<li>
															<i class="bx bx-briefcase"></i>
															<?php
																// Get the categories for the current job position
																$categories = get_the_terms(get_the_ID(), 'category');
																if ($categories && !is_wp_error($categories)) {
																	$category_names = array();
																	foreach ($categories as $category) {
																		$category_names[] = $category->name;
																	}
																	echo implode(', ', $category_names);
																}
															?>
														</li>
														<li>
															<i class="bx bx-money"></i>
															<?php echo $min_salary . "-" . $max_salary; ?>
														</li>
														<li>
															<i class="bx bx-location-plus"></i>
															<?php echo $job_address; ?>
														</li>
														<li>
															<i class="bx bx-stopwatch"></i>
															<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="theme-btn text-end">
													<a href="<?php the_permalink(); ?>" class="btn">
														Apply Now
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
						}
					} else {
						echo 'No job positions found.';
					}

					// Restore original post data
					wp_reset_postdata();
					?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>