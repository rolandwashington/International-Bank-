
<?php 
    get_header(); 
    // require_once get_template_directory() . "/core/form-handlers/apply-for-ebanking.php";
?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title">e-Banking <?php if (!empty($ThankYou)) { echo $ThankYou; } ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="boxed-content">
				<div class="career-box" id="ib-application-form">
					<h5>APPLICATION FORM</h5>
					<div class="content-box">
                        <form action="<?php echo site_url() ?>/apply-for-ebanking" method="POST" enctype="multipart/form-data">
                            <div class="application-form">                            
                                <label for="" class="">
                                    Do you have an account with IB? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="Yes" checked="checked" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="No">
                                </label>
                                
                                <div class="is-account">
                                    <label for="">
                                        Select Title: <br>
                                        Mr. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Mr." required>
                                        Mrs. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Mrs.">
                                        Miss &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Miss">
                                        Cllr. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Cllr."> 
                                        Dr. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Dr.">
                                        Rev. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="title" id="" value="Rev.">
                                    </label>
    
                                    <label for="full-name">
                                        Enter Full Name: <br>
                                        <input type="text" class="form-half-width" name="full-name" id="full-name" placeholder="Enter Full Name" required>
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
                                    </label>
    
                                    <label for="" class="additional-services">
                                        Kindly click all that applies <br>
                                        <input type="checkbox" name="sms-banking" id="" value="SMS Banking"> <span>SMS Banking </span> <br>
                                        <input type="checkbox" name="atm" id="" value="ATM"> <span>ATM</span> <br>
                                        <input type="checkbox" name="internet-banking" id="" value="Internet Banking"> <span>Internet Banking</span> <br> 
                                        <input type="checkbox" name="e-alert" id="" value="E-Alerts"> <span>E-Alerts</span> <br> 
                                        <input type="checkbox" name="push-pull" id="" value="Push & Pull"> <span>Push & Pull</span> <br> 
                                        <input type="checkbox" name="email-instructions" id="" value="Email Instructions"> <span>Email Instructions</span> <br>
                                    </label>
                                    <label for="" class="ib-form-agreement">
                                        <input type="checkbox" name="" id="" required> <span><strong>NOTE:</strong> I agree to be in-person to complete the process</span> <br>
                                        <input type="checkbox" name="" id="" required> <span>Agree to the terms</span>
                                    </label>
                                    <button type="submit" name="internet-banking" class="wpcf7-form-control wpcf7-submit btn form-half-width service-button">Submit Application</button>                               
                                </div>
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>