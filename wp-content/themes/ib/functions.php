<?php 

function create_custom_tables() {
    
    global $wpdb;
    
    $ib_push_pull = $wpdb->prefix . 'ib_push_pull';

    $charset_collate = $wpdb->get_charset_collate();

    $push_pull_table = "CREATE TABLE $ib_push_pull (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(10) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(50) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(20) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(20),
        AccountHolderEmail VARCHAR(100) NOT NULL,

        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(10) NOT NULL,
        SMSBanking VARCHAR(10) NOT NULL,
        InternetBanking VARCHAR(10) NOT NULL,
        ATM VARCHAR(10) NOT NULL,
        Ealerts VARCHAR(10) NOT NULL,
        EmailInstructions VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        Estatement VARCHAR(10) NOT NULL,
        IsAgreedToTerms VARCHAR(10) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";


    // CARD SERVICES
    $card_services = $wpdb->prefix . 'ib_card_services';

    $card_services_table = "CREATE TABLE $card_services (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        CardType VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        PushAndPull VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        Estatement VARCHAR(10) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";


    // ONLINE BANKING
    $online_banking = $wpdb->prefix . 'ib_online_banking';

    $online_banking_table = "CREATE TABLE $online_banking (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        PushAndPull VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        Estatement VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";


    // SMS ALERT
    $sms_alert = $wpdb->prefix . 'ib_sms_alert';

    $sms_alert_table = "CREATE TABLE $sms_alert (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        PushAndPull VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        Estatement VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    // MOBILE BANKING
    $mobile_banking = $wpdb->prefix . 'ib_mobile_banking';

    $mobile_banking_table = "CREATE TABLE $mobile_banking (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        PushAndPull VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        Estatement VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";


    // MOBILE BANKING
    $e_statement = $wpdb->prefix . 'ib_e_statement';

    $e_statement_table = "CREATE TABLE $e_statement (
        id INT(11) NOT NULL AUTO_INCREMENT,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        ExistingAccountNumber VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        PushAndPull VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        MobileBanking VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";




    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $push_pull_table );
    dbDelta( $card_services_table );
    dbDelta( $online_banking_table );
    dbDelta( $sms_alert_table );
    dbDelta( $mobile_banking_table );
    dbDelta( $e_statement_table );
}

add_action( 'after_setup_theme', 'create_custom_tables' );



// function create_custom_tables() {
//     global $wpdb;
  
//     $create_new_account     = $wpdb->prefix . 'create_new_account';
//     $push_pull            = $wpdb->prefix . 'push_pull';
  
//     $create_new_account_sql = "CREATE TABLE $create_new_account (
//         -- PERSONAL INFO
//         AccountID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         AccountType VARCHAR(50) NOT NULL,
//         AccountHolderTitle VARCHAR(10) NOT NULL,
//         AccountHolderFirstName VARCHAR(50) NOT NULL,
//         AccountHolderMiddleName VARCHAR(50),
//         AccountHolderLastName VARCHAR(50) NOT NULL,
//         AccountHolderDOB DATE NOT NULL,
//         AccountHolderGender VARCHAR(10) NOT NULL,
//         AccountHolderNationality VARCHAR(50) NOT NULL,
//         AccountHolderCitizenshipStatus VARCHAR(50) NOT NULL,
//         AccountHolderIDCard TEXT NOT NULL,
//         AccountHolderIDCardNumber VARCHAR(100) NOT NULL,
//         AccountHolderPassportSizePicture TEXT NOT NULL,
//         AccountHolderMaritalStatus VARCHAR(50) NOT NULL,
//         SpouseName VARCHAR(50) NOT NULL,
//         AccountHolderCity VARCHAR(50) NOT NULL,
//         AccountHolderCounty VARCHAR(50) NOT NULL,
//         AccountHolderCountry VARCHAR(50) NOT NULL,
//         AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
//         AccountHolderPhoneNumberTwo VARCHAR(50) DEFAULT NULL,
//         AccountHolderEmail VARCHAR(50) NOT NULL,
//         FatherName VARCHAR(50) NOT NULL,
//         FatherAddress VARCHAR(50) NOT NULL,
//         MotherName VARCHAR(50) NOT NULL,
//         MotherAddress VARCHAR(50) NOT NULL,
//         HaveAnAccountwithIB VARCHAR(3) NOT NULL,
//         AccountNumebr VARCHAR(50) NOT NULL,
//         AccountForMinor VARCHAR(3) NOT NULL,
//         MinorName VARCHAR(50) DEFAULT NULL,
//         MinorAge INT(11) DEFAULT NULL,
//         MinorBirthCertificateNumber VARCHAR(50) DEFAULT NULL,
//         MinorControlNumber VARCHAR(50) DEFAULT NULL,
//         MinorVolNumber VARCHAR(50) DEFAULT NULL,

//         -- JOB INFO
//         AccountHolderOccupation VARCHAR(50) NOT NULL,
//         IsAccountHolderEmployed VARCHAR(3) NOT NULL,
//         CurrentEmployerName VARCHAR(50) NOT NULL,
//         CurrentEmployerAddress VARCHAR(50) NOT NULL,
//         JobPosition VARCHAR(50) NOT NULL,
//         YearsOfEmployment INT(11) NOT NULL,
//         SourceOfFunds VARCHAR(50) NOT NULL,
//         USDAmount VARCHAR(50) NOT NULL,
//         LRDAmount VARCHAR(50) NOT NULL,
//         BeneficiaryName VARCHAR(50) NOT NULL,
//         BeneficiaryRelationship VARCHAR(50) NOT NULL,
//         BeneficiaryDOB DATE NOT NULL,
//         FirstReferencePersonName VARCHAR(50) NOT NULL,
//         FirstReferencePersonAddress VARCHAR(100) NOT NULL,
//         SecondReferencePersonName VARCHAR(50) NOT NULL,
//         SecondReferencePersonAddress VARCHAR(100) NOT NULL,
//         IsAccountHolderGovernmentOfficial VARCHAR(3) NOT NULL,
//         JobPositionInTheGovernment VARCHAR(50) DEFAULT NULL,
//         IsAccountHolderRelativeToGovernmentOfficial VARCHAR(3) NOT NULL,
//         NameOfGovernmentOfficial VARCHAR(50) DEFAULT NULL,
//         RelationshipToGovernmentOfficial VARCHAR(50) DEFAULT NULL,
        
//         -- Travel & Citizenship
//         DateOfArrival DATE DEFAULT NULL,
//         ExpectedDateOfDeparture DATE DEFAULT NULL,
//         VisaNumber INT(11) DEFAULT NULL,
//         VisaIssuedDate DATE DEFAULT NULL,
//         VisaExpiryDate DATE DEFAULT NULL,
//         PassportNumber VARCHAR(50) DEFAULT NULL,
//         PassportIssuingCountry VARCHAR(50) DEFAULT NULL,
//         PassportIssuedDate DATE DEFAULT NULL,
//         PassportExpiryDate DATE DEFAULT NULL,
//         ResidentPermitNumber VARCHAR(50) DEFAULT NULL,
        
//         -- ADDITIONAL SERVICES
//         IsAdditionalEServices VARCHAR(3) NOT NULL,
//         SMSBanking VARCHAR(20) NOT NULL,
//         InternetBanking VARCHAR(20) NOT NULL,
//         ATM VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) $wpdb->charset COLLATE $wpdb->collate;";
  
//     $push_pull = "CREATE TABLE $push_pull (
//         -- PERSONAL INFO
//         AccountID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         HaveAnAccountWithIB VARCHAR(3) NOT NULL,
//         AccountHolderTitle VARCHAR(10) NOT NULL,
//         AccountHolderFirstName VARCHAR(50) NOT NULL,
//         AccountHolderMiddleName VARCHAR(50) DEFAULT NULL,
//         AccountHolderLastName VARCHAR(50) NOT NULL,
//         AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
//         AccountHolderPhoneNumberTwo VARCHAR(50) DEFAULT NULL,
//         AccountHolderEmail VARCHAR(50) NOT NULL,
        
//         -- ADDITIONAL SERVICES
//         IsAdditionalEServices VARCHAR(3) NOT NULL,
//         SMSBanking VARCHAR(20) NOT NULL,
//         InternetBanking VARCHAR(20) NOT NULL,
//         ATM VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) $wpdb->charset COLLATE $wpdb->collate;";
  
//     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//     dbDelta( $create_new_account_sql );
//     dbDelta( $push_pull );
// }

// add_action( 'wp_loaded', 'create_custom_tables' );
  