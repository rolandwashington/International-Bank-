<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once get_template_directory() . "/core/load.php";
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

if (isset($_POST["bank-account-application"])) {
    // Verify reCAPTCHA
    $recaptchaToken = $_POST['g-recaptcha-response'];

    // Replace 'YOUR_RECAPTCHA_SECRET_KEY' with your actual reCAPTCHA secret key
    $recaptchaSecretKey = '6Ldr_VkpAAAAABQazvtEGH-HkHGE2KLyNs-c1Kol';

    $recaptchaResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaToken}");
    $recaptchaData = json_decode($recaptchaResponse);

    if (!$recaptchaData->success) {
        // Handle reCAPTCHA validation failure (you can redirect the user back to the form with an error message)
        echo "reCAPTCHA validation failed. Please try again.";
        return;
    }

    // Get the uploaded file details
    $tmpAccountOpeningForm = $_FILES['account-application-form-pdf']['tmp_name'];
    $accountOpeningForm = $_FILES['account-application-form-pdf']['name'];

    // Configure your email credentials
    $ibEmail = "$SMTPEmailAddress";
    $ibEmailPassword = "$SMTPEmailPassword";

    $mail = new PHPMailer(true);

    // Enable SMTP debugging.
    $mail->SMTPDebug = 0; // Set to 2 for debugging purposes

    // Set PHPMailer to use SMTP.
    $mail->isSMTP();

    // Set SMTP host name
    $mail->Host = "$SMTPHost";

    // Set SMTP authentication
    $mail->SMTPAuth = true;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Provide username and password
    $mail->Username = "$ibEmail";
    $mail->Password = "$ibEmailPassword";

    // If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";

    // Set TCP port to connect to
    $mail->Port = $SMTPPortNumber;
    $mail->From = "$ibEmail";
    $mail->FromName = "$ApplicantTitle $ApplicantFirstName $ApplicantLastName";
    $mail->addAddress("$ibEmail", "International Bank (Liberia) Limited");

    // Add the PDF file as an attachment
    $mail->AddAttachment($tmpAccountOpeningForm, $accountOpeningForm, 'base64', 'application/pdf');

    // Set email content
    $mail->isHTML(true);
    $mail->Subject = "$AccountType Account Application";
    $message = "
        <div style=\"width: 100%; background-color: #CCCCCC;\">
            <div style=\"width:700px; border-top: 30px solid #53622F; border-bottom: 30px solid #53622F; background: #FFFFFF; padding: 50px; font-family:'Trebuchet MS', Arial,sans-serif\">               
                <div style=\"position: relative;\">
                    <img src=\"https://ibliberia.com/wp-content/themes/ib/images/mail-logo.png\" style=\"width: 200px; margin: -10px 0 20px;\" alt=\"Ib-brand-logo-with-\" border=\"0\">
                    <h1 style=\"text-transform: uppercase;\">NEW ACCOUNT APPLICATION</h1>
                </div>
            </div>
        </div>
        <br>
    ";
    
    $mail->Body = $message;

    try {
        $mail->send();
        global $wpdb;

        // Insert additional logic for storing data in the database if needed

        $ThankYou = " - Application sent successfully";
    } catch (Exception $e) {
        $ThankYou = "Unable to submit application, please try again.";
    }
}
?>
