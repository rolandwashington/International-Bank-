<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require_once get_template_directory() . "/core/load.php";

    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    if (isset($_POST["submit-card-services"])) {
        $ApplicantTitleRedio            = $_POST["title"];
        $ApplicantTitleInput            = $_POST["title-input"];
        $ApplicantFirstName             = $_POST["first-name"];
        $ApplicantMiddleName            = $_POST["middle-name"];
        $ApplicantLastName              = $_POST["last-name"];
        $ApplicantPhoneNumberOne        = $_POST["phone-number-one"];
        $ApplicantPhoneNumberTwo        = $_POST["phone-number-two"];
        $ApplicantEmail                 = $_POST["applicant-email"];
        $IsAccountWithIB                = $_POST["is-account-with-ib"];
        $AccountNumber                  = $_POST["account-number"];
        $CardType                       = $_POST["card-type"];
        $IsAdditionalService            = $_POST["is-additional-services"];

        if (empty($ApplicantTitleRedio)) {
            $ApplicantTitle = $ApplicantTitleInput;
        } else {
            $ApplicantTitle = $ApplicantTitleRedio;
        }

        if (isset($_POST["sms-banking"])) {
            $SMSBanking = "Yes";
        } else {
            $SMSBanking = "N/A";
        }

        if (isset($_POST["internet-banking"])) {
            $InternetBanking = "Yes";
        } else {
            $InternetBanking = "N/A";
        }

        if (isset($_POST["push-pull"])) {
            $PushPull = "Yes";
        } else {
            $PushPull = "N/A";
        }

        if (isset($_POST["e-alert"])) {
            $EAlert = "Yes";
        } else {
            $EAlert = "N/A";
        }

        if (isset($_POST["email-instructions"])) {
            $EmailInstructions = "Yes";
        } else {
            $EmailInstructions = "N/A";
        }

        if (isset($_POST["e-statement"])) {
            $EStatement = "Yes";
        } else {
            $EStatement = "N/A";
        }

        if ($ApplicantPhoneNumberTwo == "") {
            $ApplicantPhoneNumberTwo = "N/A";
        }

        if ($IsAccountWithIB == "No") {
            $AccountNumber = "N/A";
        }

        $ibEmail = "$SMTPEmailAddress";
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
        $mail->From = "$ApplicantEmail";
        $mail->FromName = "$ApplicantTitle $ApplicantFirstName $ApplicantLastName";
        $mail->addAddress("$ibEmail", "International Bank (Liberia) Limited");
        $mail->isHTML(true);
        $mail->Subject = "Card Service Application";
        $message = "
            <div style=\"width: 100%; background-color: #CCCCCC;\">
                <div style=\"width:700px; border-top: 30px solid #53622F; border-bottom: 30px solid #53622F; background: #FFFFFF; padding: 50px; font-family:'Trebuchet MS', Arial,sans-serif\">               
                    <div style=\"position: relative;\">
                        <img src=\"https://ibliberia.com/wp-content/themes/ib/images/mail-logo.png\" style=\"width: 200px; margin: -10px 0 20px;\" alt=\"Ib-brand-logo-with-\" border=\"0\">
                        <h1>CARD SERVICE APPLICATION</h1>
                        <div>
                            <h2 style=\"background: #CCCCCC; padding: 5px;\">Personal Data</h2>
                            
                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Full Name</legend>
                                    $ApplicantTitle $ApplicantFirstName $ApplicantMiddleName $ApplicantLastName
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Do you have an account with IB?</legend>
                                    $IsAccountWithIB
                                </fieldset>
                            </div><br>
                            
                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Existing Account Number</legend>
                                    $AccountNumber
                                </fieldset>

                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Existing Account Number</legend>
                                    $CardType
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Phone #</legend>
                                    $ApplicantPhoneNumberOne
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Optional Phone #</legend>
                                    $ApplicantPhoneNumberTwo
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Email</legend>
                                    $ApplicantEmail
                                </fieldset>
                            </div><br>
                            
                            <h2 style=\"background: #CCCCCC; padding: 5px;\">Additional Services</h2>
                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Would you like to apply for additional E-services?</legend>
                                    $IsAdditionalService
                                </fieldset>
                            </div><br>
                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 100%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Subscribed Services</legend>
                                    SMS Banking: <b>$SMSBanking</b> | Internet Banking: <b>$InternetBanking</b> | Push and Pull: <b>$PushPull</b> | E-Alert: <b>$EAlert</b> </br> Email Instruction: <b>$EmailInstructions</b> | E-Statement: <b>$EStatement</b>                                    
                                </fieldset>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        ";
        
        $mail->Body = $message;
    
        try {
            $mail->send();
            
            global $wpdb;

            $table_name = $wpdb->prefix . 'ib_card_services';

            $data = array(
                "HaveAnAccountWithIB"               => $IsAccountWithIB,
                'ExistingAccountNumber'             => $AccountNumber,
                "AccountHolderTitle"                => $ApplicantTitle,
                "AccountHolderFirstName"            => $ApplicantFirstName,
                "AccountHolderMiddleName"           => $ApplicantMiddleName,
                "AccountHolderLastName"             => $ApplicantLastName,
                "CardType"                          => $CardType,
                "AccountHolderPhoneNumberOne"       => $ApplicantPhoneNumberOne,
                "AccountHolderPhoneNumberTwo"       => $ApplicantPhoneNumberTwo,
                "AccountHolderEmail"                => $ApplicantEmail,

                // ADDITIONAL SERVICES
                "IsAdditionalEServices"             => $IsAdditionalService,
                "SMSBanking"                        => $SMSBanking,
                "InternetBanking"                   => $InternetBanking,
                "PushAndPull"                       => $PushPull,
                "Ealerts"                           => $EAlert,
                "EmailInstructions"                 => $EmailInstructions,
                'Estatement'                        => $EStatement,
                "IsAgreedToTerms"                   => "YES"
            );

            $wpdb->insert( $table_name, $data );
            $ThankYou = "Application sent successfully";
        } catch (Exception $e) {
            $ThankYou = "Unable to submit application, please try again.";
        }
        
    }
?>


