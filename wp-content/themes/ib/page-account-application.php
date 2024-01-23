<?php 
    get_header(); 
    require_once get_template_directory() . "/core/form-handlers/apply-for-individual-account.php";
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
					<h5>INSTRUCTIONS TO DOWNLOAD AND SUBMIT APPLICATION FORM</h5>
					<div class="content-box">
                        <form action="/account-application" method="POST" enctype="multipart/form-data">
                            <h5>Instructions:</h5>
                            <p>To access the fillable Personal Account Application Form, simply click on the "Download Form" button below:</p>
                            <a class="btn download-btn" target="_blank" href="<?php echo get_template_directory_uri() ?>/personal-account-form.pdf">Download Form</a>
                            <p>After filling in the application, kindly submit the completed PDF using the upload feature provided or email it to <b>erequest@ibliberia.com</b>.</p>
                            <input type="file" class="" name="account-application-form-pdf" id="upload-account-application-form">

                            <div class="g-recaptcha" data-sitekey="6LerI1opAAAAAG1IZy27pDw6vSw7Fy8SAea-DFge"></div>
                            <button type="button" name="bank-account-application" id="submit-account-application-form" class="wpcf7-form-control wpcf7-submit btn">Submit</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

 <!-- <div class="application-form">
                                <label for="account-type" class="applicant-account-type">
                                    Select Account Type: <br>
                                    <select name="account-type" id="account-type" class="form-half-width" required>
                                        <option selected disabled value="">Select Account Type</option>
                                        <option value="Personal Checking">Personal Checking</option>
                                        <option value="Personal Saving">Personal Saving</option>
                                        <option value="Business Checking">Business Checking</option>
                                        <option value="Business Saving">Business Saving</option>
                                        <option value="Corporate Checking">Corporate Checking</option>
                                        <option value="Corporate Saving">Corporate Saving</option>
                                        <option value="Time Deposit">Time Deposit</option>
                                    </select>
                                </label>
                                <br>
                                <h4 class="ib-background-secondary form-header">Personal Data</h4>
                                <div class="passport-size-image">
                                    PASSPORT SIZE IMAGE
                                    <div class="passport-display">
                                        <img src="<?php echo get_template_directory_uri(); ?>/icons/upload-image.png" alt="" id="ib-display-image">
                                    </div> 
                                    <div class="ib-upload-image-wrap ib-upload-image">
                                        <span>SELECT IMAGE</span>
                                        <input type="file" class="" name="passport-size" id="ib-input-image">
                                    </div>
                                </div>

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

                                <label for="birth-date">
                                    Date of Birth: <br>
                                    <input type="date" class="form-half-width" name="birth-date" id="birth-date" required>
                                </label>

                                <label for="">
                                    Select Gender: <br>
                                    Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="gender" id="" value="Male" required>
                                    Female &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="gender" id="" value="Female">
                                </label>

                                <label for="nationality" class="applicant-nationality">
                                    Select Nationality: <br>
                                    <select name="nationality" id="nationality" class="form-half-width" required>
                                        <option selected disabled value="">Select Nationality</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Guinea">Guinea</option>
                                    </select>
                                </label>

                                <label for="status">
                                    Select Status: <br>
                                    <select name="citizenship-status" id="status" class="form-half-width" required>
                                        <option selected disabled value="">Select Status</option>
                                        <option value="Resident">Resident</option>
                                        <option value="Non-Resident">Non-Resident</option>
                                        <option value="Sr. Citizen">Sr. Citizen</option>
                                    </select>
                                </label>

                                
                                <div class="id-card">
                                    ID CARD OR PASSPORT
                                    <div class="id-display">
                                        <img src="<?php echo get_template_directory_uri(); ?>/icons/upload-image.png" alt="" id="ib-display-id">
                                    </div> 
                                    <div class="ib-upload-image-wrap ib-upload-image">
                                        <span>SELECT CARD</span>
                                        <input type="file" class="" name="id-card" id="id-card">
                                    </div>
                                </div>

                                <label for="">
                                    
                                    ID / Passport Number, Issue Date, and Expiration Date<br>
                                    <input type="text" name="id-number" id="" placeholder="Ex: L202000" required>
                                    <input type="date" name="issue-date" required>
                                    <input type="date" name="expiration-date" required>
                                </label>
                                
                                <label for="">
                                    Selecte Marital Status: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>
                                    Married &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="marital-status" id="" value="Married" required>
                                    Single &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="marital-status" id="" value="Single">
                                    Divorced &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="marital-status" id="" value="Divorced">
                                    Widow/er &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="marital-status" id="" value="Widow/er">
                                </label>
                                
                                <label for="spouse-name" class="spouse-name">
                                    Spouse Full Name: <br>
                                    <input type="text" class="form-half-width" name="spouse-name" id="spouse-name" placeholder="Spouse Full Name">
                                </label>

                                <label for="home-address">
                                    Current Home Address: <br>
                                    <input type="text" name="applicant-country" id="home-address" placeholder="Country" required>
                                    <input type="text" name="applicant-county" placeholder="County" required>
                                    <input type="text" name="applicant-city" placeholder="City" required>
                                </label>
                                
                                <label for="contact-info">
                                    Contact Info: <br>
                                    <input type="text" name="phone-number-one" id="contact-info" placeholder="Telephone" required>
                                    <input type="text" name="phone-number-two" placeholder="Telephone (Optional)">
                                    <input type="text" name="applicant-email" placeholder="Email" required>
                                </label>

                                <label for="father-info">
                                    Father's Info: <br>
                                    <input type="text" name="father-name" class="form-half-width" id="father-info" placeholder="Father's Name" required>
                                    <input type="text" name="father-address" class="form-half-width" placeholder="Father's Address" required>
                                </label>

                                <label for="mother-info">
                                    Mother's Info: <br>
                                    <input type="text" name="mother-name" class="form-half-width" id="mother-info" placeholder="Mother's Name" required>
                                    <input type="text" name="mother-address" class="form-half-width" placeholder="Mother's Address" required>
                                </label>

                                <label for="" class="">
                                    Do you have an account with IB? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-account-with-ib" id="" value="No">
                                </label>
                                
                                <label for="account-number" class="is-account">
                                    Account Number: <br>
                                    <input type="number" name="account-number" class="form-half-width" id="account-number" placeholder="Account Number">
                                </label>

                                <label for="">
                                    Is this account for a minor? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-minor" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-minor" id="" value="No">
                                </label>

                                <label for="minor-name" class="minor">
                                    Kindly fill the following:  <br>
                                    <input type="text" name="minor-name" id="minor-name" placeholder="Name of Minor">
                                    <input type="number" name="minor-age" id="" placeholder="Age of Minor">
                                    <input type="text" name="minor-certificate-number" id="" placeholder="Birth Certificate #">
                                    <input type="text" name="minor-control-number" id="" placeholder="Control #">
                                    <input type="text" name="minor-vol-number" id="" placeholder="Vol #">
                                </label>

                                <br><br>
                                <h4 class="ib-background-secondary form-header">Job Information</h4>
                                <label for="occupation">
                                    Occupation: <br>
                                    <input type="text" name="applicant-occupation" class="form-half-width" id="occupation" placeholder="Occupation" required>
                                </label>

                                <label for="">
                                    Are you employed?<br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-employed" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-employed" id="" value="No">
                                </label>

                                <div class="employer-details">
                                    <label for="employer-name">
                                        Current Employer Name <br>
                                        <input type="text" name="employer-name" class="form-half-width" id="employer-name" placeholder="Current Employer Name">
                                        <input type="text" name="employer-address" class="form-half-width" id="employer-address" placeholder="Current Employer Address">
                                    </label>
                                    
                                    <label for="job-position">
                                        Position at Place of Employment: <br>
                                        <input type="text" name="employed-position" class="form-half-width" id="job-position" placeholder="Job Position">
                                    </label>
                            
                                    <br>
                                    <label for="employment-years">
                                        Years of employment with current employer: <br>
                                        <input type="number" class="form-half-width" name="employment-duration" id="employment-years" placeholder="Number of Years">
                                    </label>
                                </div>

                                <label for="source-of-fund">
                                    What is your source of funds? <br>
                                    <select name="source-of-fund" id="source-of-fund" class="form-half-width" required>
                                        <option selected disabled value="">Select Source of Funds</option>
                                        <option value="Business Income">Business Income</option>
                                        <option value="Property Income">Property Income</option>
                                        <option value="Trading">Trading</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </label>

                                <label for="annual-income">
                                    What is your gross annual income? <br>
                                    <input type="text" class="form-half-width" name="lrd-amount" id="annual-income" placeholder="USD Amount" required>
                                    <input type="text" class="form-half-width" name="usd-amount" id="" placeholder="LRD Amount" required>
                                </label>

                                <label for="befeficiary">
                                    Kindly Provide details for your beneficiary (Next of Kin): <br>
                                    <input type="text" class="form-half-width" id="befeficiary" name="beneficiary-name" placeholder="Full Name" required>
                                    <input type="text" class="form-half-width" name="beneficiary-relationship" placeholder="Relationship" required>
                                </label>
                                
                                <label for="">
                                    Beneficiary Date of Birth <br>
                                    <input type="date" name="beneficiary-birth-date" class="form-half-width" required>
                                </label>

                                <label for="reference-name">
                                    Kindly provide two personal references <br>
                                    <input type="text" class="form-half-width" name="reference-one-name" id="reference-name" placeholder="First Person Full Name" required>
                                    <input type="text" class="form-half-width" name="reference-one-address" id="reference-address" placeholder="First Person Address Name" required>
                                </label>
                                <label for="">
                                    <input type="text" class="form-half-width" name="reference-two-name" id="" placeholder="Second Person Full Name" required>
                                    <input type="text" class="form-half-width" name="reference-two-address" id="" placeholder="Second Person Address Name" required>
                                </label>

                                <label for="">
                                    Are you an Official of Government? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-government-official" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-government-official" id="" value="No">
                                </label>

                                <label for="" class="government-official-position">
                                    Kindly State Position: <br>
                                    <input type="text"  name="government-official-position" class="form-half-width" placeholder="Job Position">
                                </label>

                                <label for="">
                                    Are you a relative of a Government Official? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-government-official-relative" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-government-official-relative" id="" value="No">
                                </label>

                                <label for="" class="official-info">
                                    Kindly state the name and your relationship to that official: <br>
                                    <input type="text" name="government-official-name" class="form-half-width" placeholder="Name">
                                    <input type="text" name="government-officail-relationship" class="form-half-width" placeholder="Relationship">
                                </label>

                                <br><br>
                                <div class="other-nationality">
                                    <h4 class="ib-background-secondary form-header">Travel & Citizenship</h4>
                                    <label for="" class="travel">
                                        <div>
                                            Other Nationality Details: <br>
                                            Date of Arrival: <br>
                                            <input type="date" name="date-of-arrival" id="" class="form-half-width">
                                        </div>
                                        <div>
                                            Expected Date of Departure: <br>
                                            <input type="date" name="date-of-departure" id="" class="form-half-width">
                                        </div>
                                    </label>
                                    <label>
                                        Visa Number: <br>
                                        <input type="text" name="visa-number" id="" class="form-half-width" placeholder="000000000000">
                                        <br>
                                        Visa Issued Date <br>
                                        <input type="date" name="visa-issue-date" id="visa-issue-date" class="form-half-width">
                                        <br>
                                        Visa Expiry Date <br>
                                        <input type="date" name="visa-expiry-date" id="" class="form-half-width">
                                    </label>
                                    <label>
                                        <br>
                                        Passport Number: <br>
                                        <input type="text" class="form-half-width" name="passport-number" id="" placeholder="Ex: L202000">
                                        <br>
                                        Passport Issuing Country: <br>
                                        <input type="text" class="form-half-width" name="passport-issuing-country" id="" placeholder="Ex: Liberia">
                                        <br>
                                        Passport Issued Date: <br>
                                        <input type="date" name="passport-issued-date" id="" class="form-half-width">
                                        <br>    
                                        Passport Expiry Date: <br>
                                        <input type="date" name="passport-expiry-date" class="form-half-width">
                                        <br>
                                        Resident Permit Number: <br>
                                        <input type="text" class="form-half-width" name="permit-number" id="" placeholder="Ex: LR-00000000">
                                    </label>
                                    <br><br>
                                </div>
                                
                                <h4 class="ib-background-secondary form-header">Additional Services</h4>
                                <label for="">
                                    Would you like to apply for additional E-services? <br>
                                    Yes: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-additional-services" id="" value="Yes" required>
                                    No: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="is-additional-services" id="" value="No">
                                </label>

                                <label for="" class="additional-services ib-hide">
                                    Kindly click all that applies <br>
                                    <input type="checkbox" name="sms-banking" id="" value="SMS Banking"> <span>SMS Banking </span> <br>
                                    <input type="checkbox" name="internet-banking" id="" value="Internet Banking"> <span>Internet Banking</span> <br>
                                    <input type="checkbox" name="atm" id="" value="ATM"> <span>ATM</span> <br>
                                    <input type="checkbox" name="e-alert" id="" value="E-Alerts"> <span>E-Alerts</span> <br> 
                                    <input type="checkbox" name="email-instructions" id="" value="Email Instructions"> <span>Email Instructions</span> <br>
                                </label>
                                <label for="" class="ib-form-agreement">
                                    <input type="checkbox" name="" id="" required> <span><strong>NOTE:</strong> I agree to be in-person to complete the process</span> <br>
                                    <input type="checkbox" name="" id="" required> <span>Agree to the terms</span>
                                </label>
                                <button type="submit" name="bank-account-application" class="wpcf7-form-control wpcf7-submit btn form-half-width">Submit Application</button>                               
                            </div> -->
