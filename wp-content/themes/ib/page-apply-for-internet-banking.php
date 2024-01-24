<?php 
    get_header(); 
    require_once get_template_directory() . "/core/form-handlers/internet-banking.php";
?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title">Online Banking <?php if (!empty($ThankYou)) { echo $ThankYou; } ?></h1>
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
					<h5>APPLICATION FORM</h5>
					<div class="content-box">
                        <form action="<?php echo site_url() ?>/apply-for-internet-banking" method="POST" enctype="multipart/form-data">
                            <div class="application-form">                            
                                <label for="" class="">
                                    Do you have an account with IB? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="Yes" checked="checked" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="No">
                                </label>
                                
                                <div class="is-account">
                                    <label for="" class="account-user-title">
                                        Select Title: <br>
                                        Ms. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Ms.">
                                        Mr. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Mr.">
                                        Mrs. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Mrs.">
                                        Other <input type="text" placeholder="Please Specify" name="title-input">
                                    </label>
    
                                    <label for="full-name">
                                        Enter Full Name: <br>
                                        <input type="text" class="" name="first-name" id="first-name" placeholder="First Name" required>
                                        <input type="text" class="" name="middle-name" id="middle-name" placeholder="Middle Name">
                                        <input type="text" class="" name="last-name" id="last-name" placeholder="Last Name" required>
                                    </label>

                                    <label for="account-number">
                                        Account Number: <br>
                                        <input type="number" name="account-number" class="form-half-width" id="account-number" placeholder="Account Number">
                                    </label>
                                    
                                    <label for="contact-info">
                                        Contact Info: <br>
                                        <input type="text" name="phone-number-one" id="contact-info" placeholder="Telephone" required>
                                        <input type="text" name="phone-number-two" placeholder="Telephone (Optional)">
                                        <input type="text" name="applicant-email" placeholder="Email" required>
                                    </label> <br><br>
    
                                    <h4 class="ib-background-secondary form-header">Additional Services</h4>
                                    <label for="">
                                        Would you like to apply for additional E-services? <br>
                                        Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-additional-services" id="" value="Yes" required>
                                        No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-additional-services" id="" value="No">
                                    </label>
    
                                    <label for="" class="additional-services ib-hide">
                                        Kindly click all that applies <br>
                                        <input type="checkbox" name="sms-banking" id="" value="SMS Banking"> <span>SMS Banking </span> <br>
                                        <input type="checkbox" name="atm" id="" value="IB Proprietary Card"> <span>IB Proprietary Card</span> <br>
                                        <input type="checkbox" name="mastercard" id="" value="IB Mastercard"> <span>IB Mastercard</span> <br>
                                        <input type="checkbox" name="push-pull" id="" value="Push and Pull"> <span>Push and Pull</span> <br>
                                        <input type="checkbox" name="e-alert" id="" value="E-Alerts"> <span>E-Alerts</span> <br> 
                                        <input type="checkbox" name="email-instructions" id="" value="Email Instructions"> <span>Email Instructions</span> <br>
                                        <input type="checkbox" name="e-statement" id="" value="E-Statement"> <span>E-Statement</span> <br>
                                    </label>
                                    <label for="" class="ib-form-agreement">
                                        <input type="checkbox" name="" id="" required> <span><strong>NOTE:</strong> I agree to be in-person to complete the process</span> <br>
                                        <input type="checkbox" name="" id="" required> <span>Agree to the terms</span>
                                    </label>

                                    <!-- Your form content -->
                                    <div style="margin-top: 10px; margin-bottom: 10px" class="g-recaptcha" data-sitekey="6LerI1opAAAAAG1IZy27pDw6vSw7Fy8SAea-DFge"></div>

                                    <button type="submit" id="submit-internet-banking" name="submit-internet-banking" class="wpcf7-form-control wpcf7-submit btn form-half-width service-button">Submit Application</button>                               
                                </div>
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
    $(document).on('click', '#submit-internet-banking', function () {
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
