<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    include "load.php";

    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    if (isset($_POST["bank-account-application"])) {
        $AccountType                    = $_POST["account-type"];
        $ApplicantTitle                 = $_POST["title"];
        $ApplicantFirstName             = $_POST["first-name"];
        $ApplicantMiddleName            = $_POST["middle-name"];
        $ApplicantLastName              = $_POST["last-name"];
        $ApplicantDateOfBirth           = $_POST["birth-date"];
        $ApplicantGender                = $_POST["gender"];
        $ApplicantNationality           = $_POST["nationality"];
        $ApplicantCitizenshipStatus     = $_POST["citizenship-status"];
        $ApplicantIDNumber              = $_POST["id-number"];
        $ApplicantMaritalStatus         = $_POST["marital-status"];
        $ApplicantSpouseName            = $_POST["spouse-name"];
        $ApplicantCity                  = $_POST["applicant-city"];
        $ApplicantCounty                = $_POST["applicant-county"];
        $ApplicantCountry               = $_POST["applicant-country"];
        $ApplicantPhoneNumberOne        = $_POST["phone-number-one"];
        $ApplicantPhoneNumberTwo        = $_POST["phone-number-two"];
        $ApplicantEmail                 = $_POST["applicant-email"];
        $FatherName                     = $_POST["father-name"];
        $FatherAddress                  = $_POST["father-address"];
        $MotherName                     = $_POST["mother-name"];
        $MotherAddress                  = $_POST["mother-address"];
        $IsAccountWithIB                = $_POST["is-account-with-ib"];
        $AccountNumber                  = $_POST["account-number"];
        $IsAccountForMinor              = $_POST["is-minor"];
        $MinorName                      = $_POST["minor-name"];
        $MinorAge                       = $_POST["minor-age"];
        $MinorCertificateNumber         = $_POST["minor-certificate-number"];
        $MinorControlNumber             = $_POST["minor-control-number"];
        $MinorVolNumber                 = $_POST["minor-vol-number"];
        $ApplicantOccupation            = $_POST["applicant-occupation"];
        $IsApplicantEmployed            = $_POST["is-employed"];
        $ApplicantEmployerName          = $_POST["employer-name"];
        $ApplicantEmployerAddress       = $_POST["employer-address"];
        $ApplicantEmployedPosition      = $_POST["employed-position"];
        $ApplicantEmploymentDuration    = $_POST["employment-duration"];
        $SourceOfFund                   = $_POST["source-of-fund"];
        $LRDAmount                      = $_POST["lrd-amount"];
        $USDAmount                      = $_POST["usd-amount"];
        $BeneficiaryName                = $_POST["beneficiary-name"];
        $BeneficiaryRelationship        = $_POST["beneficiary-relationship"];
        $BeneficiaryBirthDate           = $_POST["beneficiary-birth-date"];
        $ReferenceOneName               = $_POST["reference-one-name"];
        $ReferenceOneAddress            = $_POST["reference-one-address"];
        $ReferenceTwoName               = $_POST["reference-two-name"];
        $ReferenceTwoAddress            = $_POST["reference-two-address"];
        $IsGovernmentOfficial           = $_POST["is-government-official"];
        $GovernmentOfficialPosition     = $_POST["government-official-position"];
        $IsGovernmentOfficialRelative   = $_POST["is-government-official-relative"];
        $GovernmentOfficialName         = $_POST["government-official-name"];
        $GovernmentOfficialRelationship = $_POST["government-officail-relationship"];
        $DateOfArival                   = $_POST["date-of-arrival"];
        $DateOfDeparture                = $_POST["date-of-departure"];
        $VisaNumber                     = $_POST["visa-number"];
        $VisaIssueDate                  = $_POST["visa-issue-date"];
        $VisaExpiryDate                 = $_POST["visa-expiry-date"];
        $PassportNumber                 = $_POST["passport-number"];
        $PassportIssuingCountry         = $_POST["passport-issuing-country"];
        $PassportIssuedDate             = $_POST["passport-issued-date"];
        $PassportExpiryDate             = $_POST["passport-expiry-date"];
        $PermitNumber                   = $_POST["permit-number"];
        $IsAdditionalService            = $_POST["is-additional-services"];

        if (isset($_POST["sms-banking"])) {
            // $SMSBanking = $_POST["sms-banking"];
            $SMSBanking = "Yes";
        } else {
            $SMSBanking = "N/A";
        }

        if (isset($_POST["internet-banking"])) {
            // $InternetBanking = $_POST["internet-banking"];
            $InternetBanking = "Yes";
        } else {
            $InternetBanking = "N/A";
        }

        if (isset($_POST["atm"])) {
            // $ATM = $_POST["atm"];
            $ATM = "Yes";
        } else {
            $ATM = "N/A";
        }

        if (isset($_POST["e-alert"])) {
            // $EAlert = $_POST["e-alert"];
            $EAlert = "Yes";
        } else {
            $EAlert = "N/A";
        }

        if (isset($_POST["email-instructions"])) {
            // $EmailInstructions = $_POST["email-instructions"];
            $EmailInstructions = "Yes";
        } else {
            $EmailInstructions = "N/A";
        }
        
        if ($ApplicantMaritalStatus == "Single" || $ApplicantMaritalStatus == "Divorced") {
            $ApplicantSpouseName = "N/A";
        }

        if ($ApplicantPhoneNumberTwo == "") {
            $ApplicantPhoneNumberTwo = "N/A";
        }

        if ($IsAccountWithIB == "No") {
            $AccountNumber = "N/A";
        }

        if ($IsAccountForMinor == "No") {
            $MinorName = "N/A";
            $MinorAge = "N/A";
            $MinorCertificateNumber = "N/A";
            $MinorControlNumber = "N/A";
            $MinorVolNumber = "N/A";
        }

        if ($IsApplicantEmployed == "No") {
            $ApplicantEmployerName = "N/A";
            $ApplicantEmployerAddress = "N/A";
            $ApplicantEmployedPosition = "N/A";
            $ApplicantEmploymentDuration = "N/A";
        }

        if ($IsGovernmentOfficial == "No") {
            $GovernmentOfficialPosition = "N/A";
        }

        if ($IsGovernmentOfficialRelative == "No") {
            $GovernmentOfficialName = "N/A";
            $GovernmentOfficialRelationship = "N/A";
        }

        if ($ApplicantNationality == "Liberia") {
            $DateOfArival                   = "N/A";
            $DateOfDeparture                = "N/A";
            $VisaNumber                     = "N/A";
            $VisaIssueDate                  = "N/A";
            $VisaExpiryDate                 = "N/A";
            $PassportNumber                 = "N/A";
            $PassportIssuingCountry         = "N/A";
            $PassportIssuedDate             = "N/A";
            $PassportExpiryDate             = "N/A";
            $PermitNumber                   = "N/A";
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

        $idCardFileLocation         = $_FILES['id-card']['tmp_name'];
        $idCardFileName             = $_FILES['id-card']['name'];

        $tmpPassportSizeLocation    = $_FILES['passport-size']['tmp_name'];
        $passportSizeName           = $_FILES['passport-size']['name'];



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
        
        // $mail->addAttachment($idCardFileLocation, $idCardFileName);
        $mail->AddEmbeddedImage($tmpPassportSizeLocation, "passport-size", $passportSizeName);
        $mail->AddEmbeddedImage($idCardFileLocation, "id-card", $idCardFileName);

        $mail->isHTML(true);
        $mail->Subject = "$AccountType Account Application";
        $message = "
            <div style=\"width: 100%; background-color: #CCCCCC;\">
                <div style=\"width:700px; border-top: 30px solid #53622F; border-bottom: 30px solid #53622F; background: #FFFFFF; padding: 50px; font-family:'Trebuchet MS', Arial,sans-serif\">               
                    <div style=\"position: relative;\">
                        <img src=\"https://international-bank.thekreativezone.com/images/ib-brand-logo-with-name.png\" style=\"width: 200px; margin: -10px 0 20px;\" alt=\"Ib-brand-logo-with-\" border=\"0\">
                        <h1 style=\"text-transform: uppercase;\">$AccountType ACCOUNT APPLICATION</h1>
                        <div>
                            <h2 style=\"background: #CCCCCC; padding: 5px;\">Personal Data</h2>
                            <div style=\"border: 1px solid #53622F; position: absolute; right: 0; top: 205px; width: 200px; height: 200px; background: #ECF0CA;\">
                                <img src=\"cid:passport-size\" style=\"width: 100%; height: 100%; object-fit: cover;\" >
                            </div><br><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Full Name</legend>
                                    $ApplicantTitle $ApplicantFirstName $ApplicantMiddleName $ApplicantLastName
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Date of Birth</legend>
                                    $ApplicantDateOfBirth
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Gender</legend>
                                    $ApplicantGender
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Nationality</legend>
                                    $ApplicantNationality
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Status</legend>
                                    $ApplicantCitizenshipStatus
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Passport / ID</legend>
                                    <img src=\"cid:id-card\" style=\"width: 100%; height: 100%; object-fit: cover;\" >
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Passport / ID #</legend>
                                    $ApplicantIDNumber
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Marital Status</legend>
                                    $ApplicantMaritalStatus 
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Spouse Name</legend>
                                    $ApplicantSpouseName
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Address</legend>
                                    $ApplicantCity, $ApplicantCounty, $ApplicantCountry
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

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Father's Name</legend>
                                    $FatherName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Father's Address</legend>
                                    $FatherAddress
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Mother's Name</legend>
                                    $MotherName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Applicant Mother's Address</legend>
                                    $MotherAddress
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
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Is this account for a minor?</legend>
                                    $IsAccountForMinor
                                </fieldset>
                            </div><br>


                            <div style=\"font-size: 13px; display: flex;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Minor Name</legend>
                                    $MinorName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Minor Age</legend>
                                    $MinorAge
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Minor Birth Certificate #</legend>
                                    $MinorCertificateNumber
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Minor Control #</legend>
                                    $MinorControlNumber
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Minor Vol #</legend>
                                    $MinorVolNumber
                                </fieldset>
                            </div><br>

                            <h2 style=\"background: #CCCCCC; padding: 5px;\">Job Information</h2>
                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Occupation</legend>
                                    $ApplicantOccupation
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Are you employed?</legend>
                                    $IsApplicantEmployed
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Employer Name</legend>
                                    $ApplicantEmployerName
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Employer Address</legend>
                                    $ApplicantEmployerAddress
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Employed Position</legend>
                                    $ApplicantEmployedPosition
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Employment Duration</legend>
                                    $ApplicantEmploymentDuration
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">What is your source of funds?</legend>
                                    $SourceOfFund
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">What is your gross annual income?</legend>
                                    US $ $USDAmount
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">What is your gross annual income?</legend>
                                    LR $ $LRDAmount
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Beneficiary Name</legend>
                                    $BeneficiaryName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Beneficiary Relationship</legend>
                                    $BeneficiaryRelationship
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Beneficiary Date of Birth</legend>
                                    $BeneficiaryBirthDate
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Reference Full Name</legend>
                                    $ReferenceOneName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Reference Address</legend>
                                    $ReferenceOneAddress
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Reference Full Name</legend>
                                    $ReferenceTwoName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Reference Address</legend>
                                    $ReferenceTwoAddress
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Are you an Official of Government</legend>
                                    $IsGovernmentOfficial
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Government Official Position</legend>
                                    $GovernmentOfficialPosition
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Are you a relative of a Government Official</legend>
                                    $IsGovernmentOfficialRelative
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Offical Full Name</legend>
                                    $GovernmentOfficialName
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Relationship </legend>
                                    $GovernmentOfficialRelationship
                                </fieldset>
                            </div><br>

                            <h2 style=\"background: #CCCCCC; padding: 5px;\">Travel & Citizenship</h2>
                            <p>Other Nationality Details:</p>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Date of Arrival</legend>
                                    $DateOfArival
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Expected Date of Departure</legend>
                                    $DateOfDeparture
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Visa Number</legend>
                                    $VisaNumber
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Visa Issue Date</legend>
                                    $VisaIssueDate
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Visa Expiry Date</legend>
                                    $VisaExpiryDate
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px; display: flex; justify-content: space-between;\">
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Passport #</legend>
                                    $PassportNumber
                                </fieldset>
                                    
                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Issuing Country</legend>
                                    $PassportIssuingCountry
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Issued Date</legend>
                                    $PassportIssuedDate
                                </fieldset>

                                <fieldset style=\"width: 100%; margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Expiry Date</legend>
                                    $PassportExpiryDate
                                </fieldset>
                            </div><br>

                            <div style=\"font-size: 13px;\">
                                <fieldset style=\"margin-left: 0; color: #000; border: 1px solid #e2e2e2; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; padding: 11px 20px; box-sizing: border-box; outline: none; max-width: 48%; background: #FFF; font-size: 16px; \">
                                    <legend style=\"font-size: 13px; margin-left: -1px;\">Resident Permit Number</legend>
                                    $PermitNumber
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
                                    SMS Banking: <b>$SMSBanking</b> | Internet Banking: $InternetBanking | ATM: <b>$ATM</b> | E-Alert: <b>$EAlert</b> | Email Instruction: <b>$EmailInstructions</b>                                    
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
            $loadFromUser->create("CreateNewAccount", [
                "AccountType"                       => $AccountType,
                "AccountHolderTitle"                => $ApplicantTitle,
                "AccountHolderFirstName"            => $ApplicantFirstName,
                "AccountHolderMiddleName"           => $ApplicantMiddleName,
                "AccountHolderLastName"             => $ApplicantLastName,
                "AccountHolderDOB"                  => $ApplicantDateOfBirth,
                "AccountHolderGender"               => $ApplicantGender,
                "AccountHolderNationality"          => $ApplicantNationality,
                "AccountHolderCitizenshipStatus"    => $ApplicantCitizenshipStatus,
                // "AccountHolderIDCard"               TEXT NOT NULL,
                "AccountHolderIDCardNumber"         => $ApplicantIDNumber,
                // "AccountHolderPassportSizePicture"  TEXT NOT NULL,
                "AccountHolderMaritalStatus"        => $ApplicantMaritalStatus,
                "SpouseName"                        => $ApplicantSpouseName,
                "AccountHolderCity"                 => $ApplicantCity,
                "AccountHolderCounty"               => $ApplicantCounty,
                "AccountHolderCountry"              => $ApplicantCountry,
                "AccountHolderPhoneNumberOne"       => $ApplicantPhoneNumberOne,
                "AccountHolderPhoneNumberTwo"       => $ApplicantPhoneNumberTwo,
                "AccountHolderEmail"                => $ApplicantEmail,
                "FatherName"                        => $FatherName,
                "FatherAddress"                     => $FatherAddress,
                "MotherName"                        => $MotherName,
                "MotherAddress"                     => $MotherAddress,
                "HaveAnAccountwithIB"               => $IsAccountWithIB,
                "AccountNumebr"                     => $AccountNumber,
                "AccountForMinor"                   => $IsAccountForMinor,
                "MinorName"                         => $MinorName,
                "MinorAge"                          => $MinorAge,
                "MinorBirthCertificateNumber"       => $MinorCertificateNumber,
                "MinorControlNumber"                => $MinorControlNumber,
                "MinorVolNumber"                    => $MinorVolNumber,
                
                // JOB INFO
                "AccountHolderOccupation"           => $ApplicantOccupation,
                "IsAccountHolderEmployed"           => $IsApplicantEmployed,
                "CurrentEmployerName"               => $ApplicantEmployerName,
                "CurrentEmployerAddress"            => $ApplicantEmployerAddress,
                "JobPosition"                       => $ApplicantEmployedPosition,
                "YearsOfEmployment"                 => $ApplicantEmploymentDuration,
                "SourceOfFunds"                     => $SourceOfFund,
                "LRDAmount"                         => $LRDAmount,
                "USDAmount"                         => $USDAmount,
                "BeneficiaryName"                   => $BeneficiaryName,
                "BeneficiaryRelationship"           => $BeneficiaryRelationship,
                "BeneficiaryDOB"                    => $BeneficiaryBirthDate,
                "FirstReferencePersonName"          => $ReferenceOneName,
                "FirstReferencePersonAddress"       => $ReferenceOneAddress,
                "SecondReferencePersonName"         => $ReferenceTwoName,
                "SecondReferencePersonAddress"      => $ReferenceTwoAddress,
                "IsAccountHolderGovernmentOfficial" => $IsGovernmentOfficial,
                "JobPositionInTheGovernment"        => $GovernmentOfficialPosition,
                "IsAccountHolderRelativeToGovernmentOfficial" => $IsGovernmentOfficialRelative,
                "NameOfGovernmentOfficial"          => $GovernmentOfficialName,

                // Travel & Citizenship
                "DateOfArrival"                     => $DateOfArival,
                "ExpectedDateOfDeparture"           => $DateOfDeparture,
                "VisaNumber"                        => $VisaNumber,
                "VisaIssuedDate"                    => $VisaIssueDate,
                "VisaExpiryDate"                    => $VisaExpiryDate,
                "PassportNumber"                    => $PassportNumber,
                "PassportIssuingCountry"            => $PassportIssuingCountry,
                "PassportIssuedDate"                => $PassportIssuedDate,
                "PassportExpiryDate"                => $PassportExpiryDate,
                "ResidentPermitNumber"              => $PermitNumber,

                // ADDITIONAL SERVICES
                "RelationshipToGovernmentOfficial"  => $GovernmentOfficialRelationship,
                "IsAdditionalEServices"             => $IsAdditionalService,
                "SMSBanking"                        => $SMSBanking,
                "InternetBanking"                   => $InternetBanking,
                "ATM"                               => $ATM,
                "Ealerts"                           => $EAlert,
                "EmailInstructions"                 => $EmailInstructions,
                "IsAgreedToTerms"                   => "YES"

                // ADD TRAVEL TO THE DATABASE 
            ]);    
            $ThankYou = "Application sent successfully";
        } catch (Exception $e) {
            $ThankYou = "Unable to submit application, please try again.";
        }
        
    }
?>