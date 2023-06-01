<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require_once get_template_directory() . "/core/load.php";

    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    if (isset($_POST["book-appointment"])) {
        $FullName                       = $_POST["full-name"];
        $BookAppointmentEmail           = $_POST["appointment-email"];
        $PhoneNumber                    = $_POST["mobile"];
        $AppointmentPurpose             = $_POST["appointment-purpose"];
        $AppointmentDate                = $_POST["date"];
        $APpointmentTime                = $_POST["time"];
        $Message                        = $_POST["message"];

        $ibEmail = "$AppointmentEmail";
        $ibEmailPassword = "$SMTPEmailPassword";

        $mail = new PHPMailer(true);

        //Enable SMTP debugging.
        $mail->SMTPDebug = 0; //0 or 2 
        
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();

        //Set SMTP host name                          
        $mail->Host = "$SMTPHost";

        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Provide username and password     
        $mail->Username = "$ibEmail";
        $mail->Password = "$ibEmailPassword";

        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";

        //Set TCP port to connect to
        $mail->Port = $SMTPPortNumber;
        $mail->From = "$BookAppointmentEmail";
        $mail->FromName = "$ApplicantTitle $FullName $ApplicantLastName";
        $mail->addAddress("$ibEmail", "International Bank (Liberia) Limited");
        $mail->isHTML(true);
        $mail->Subject = "$AppointmentPurpose Appointment";
        $message = "
            <div style=\"width: 100%; background-color: #CCCCCC;\">
                <div style=\"width:700px; border-top: 30px solid #53622F; border-bottom: 30px solid #53622F; background: #FFFFFF; padding: 50px; font-family:'Trebuchet MS', Arial,sans-serif\">               
                    <div style=\"position: relative;\">
                        <img src=\"https://ibliberia.com/wp-content/themes/ib/images/mail-logo.png\" style=\"width: 200px; margin: -10px 0 20px;\" alt=\"Ib-brand-logo-with-\" border=\"0\">
                        <h1>$AppointmentPurpose Appointment</h1>
                        <div>
                            <p style=\"font-size: 16px;\"><b>Guest Name: </b>$FullName</p>
                            <p style=\"font-size: 16px;\"><b>Guest Mobile Number: </b>$PhoneNumber</p>
                            <p style=\"font-size: 16px;\"><b>Purpose for the Visit: </b>$AppointmentPurpose</p>
                            <p style=\"font-size: 16px;\"><b>Date and Time: </b>$AppointmentDate at $APpointmentTime</p>
                            <p style=\"font-size: 16px; line-height: 1.5;\"><b>The Message</b><br/>$Message</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        ";
        
        $mail->Body = $message;
    
        try {
            $mail->send();
            $ThankYou = "You have successfully booked your appointment";

        } catch (Exception $e) {
            $ThankYou = "Unable to submit form, please try again.";
        }
        
    }
?>


