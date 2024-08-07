<?php 
    get_header(); 
    require_once get_template_directory() . "/core/form-handlers/book-appointment.php";
?>


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
				<section id="ib-team" class="wpb_row row-fluid section-padd no-top">
					<div class="container">
						<div class="row">
							<div class="wpb_column column_container col-sm-12">
								<div class="column-inner">
									<div class="wpb_wrapper">
										<div class="section-head ">
											<h2 class="section-title">Book an Appointment with the CEO</h2>
										</div>
										<div class="empty_space_30"></div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-sm-6 col-md-4">
								<div class="column-inner">
									<div class="wpb_wrapper">
										<div class="member-item radius">
											<div class="avatar">
												<img src="<?php echo get_template_directory_uri(); ?>/images/our-team/Jacqueline_Willia.png" alt=""> <span class="overlay"></span>
											</div>
											<div class="mem-info">
												<h5>Jacqueline Williams N'tow<span class="font12 normal">Acting Chief Executive Officer</span></h5>
												<p></p>
											</div>
										</div>
										<div class="empty_space_30  lg-hidden"></div>
									</div>
								</div> 
							</div>
                            <div class="career-box" id="appointment">
                                <div class="content-box">
                                    <form action="<?php echo site_url() . "/book-appointment" ?>" method="POST" enctype="multipart/form-data">
                                        <div class="application-form">                            
                                            <label class="input-group" for="full-name">
                                                <input type="text" name="full-name" placeholder="Enter Full Name" required>
                                                <input type="email" name="appointment-email" placeholder="Enter Email" required>
                                                <input type="number" name="mobile" placeholder="Enter Mobile Number" required>
                                            </label>

                                            <label class="input-group" for="full-name">
                                                <select name="appointment-purpose" id="">
                                                    <option value="" selected disabled>Purpose for the Visit</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                <input type="date" name="date" required>
												<input type="time" value="09:00" name="time" placeholder="Enter Mobile Number" required>
                                            </label>
                                            
                                            <label for="contact-info">
                                                <textarea name="message" id="" cols="30" rows="10" placeholder="State your reason for the visit"></textarea>
                                            </label> 

											<!-- Your form content -->
											<div style="margin-top: 10px; margin-bottom: 10px" class="g-recaptcha" data-sitekey="6LerI1opAAAAAG1IZy27pDw6vSw7Fy8SAea-DFge"></div>

                                            <button type="submit" id="submit-book-appointment-application-form" name="book-appointment" class="wpcf7-form-control wpcf7-submit btn form-half-width service-button">Submit</button> 
											<?php echo $ThankYou; ?>                              
                                        </div>
                                    </form>
                                </div>
                            </div>
			            </div>
			        </div>
				</section>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).on('click', '#submit-book-appointment-application-form', function () {
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
            alert("Please verify you are not a robot");
            return false;
        }

        // Proceed with form submission or additional logic
        // alert(response)
    });
</script>

<?php get_footer(); ?>