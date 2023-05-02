<?php 

function create_custom_tables() {
    global $wpdb;
  
    $create_new_account     = $wpdb->prefix . 'create_new_account';
    $push_pull            = $wpdb->prefix . 'push_pull';
  
    $create_new_account_sql = "CREATE TABLE $create_new_account (
        -- PERSONAL INFO
        AccountID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        AccountType VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50) DEFAULT NULL,
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderDOB DATE NOT NULL,
        AccountHolderGender VARCHAR(10) NOT NULL,
        AccountHolderNationality VARCHAR(50) NOT NULL,
        AccountHolderCitizenshipStatus VARCHAR(50) NOT NULL,
        AccountHolderIDCard TEXT NOT NULL,
        AccountHolderIDCardNumber VARCHAR(100) NOT NULL,
        AccountHolderPassportSizePicture TEXT NOT NULL,
        AccountHolderMaritalStatus VARCHAR(50) NOT NULL,
        SpouseName VARCHAR(50) NOT NULL,
        AccountHolderCity VARCHAR(50) NOT NULL,
        AccountHolderCounty VARCHAR(50) NOT NULL,
        AccountHolderCountry VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50) DEFAULT NULL,
        AccountHolderEmail VARCHAR(50) NOT NULL,
        FatherName VARCHAR(50) NOT NULL,
        FatherAddress VARCHAR(50) NOT NULL,
        MotherName VARCHAR(50) NOT NULL,
        MotherAddress VARCHAR(50) NOT NULL,
        HaveAnAccountwithIB VARCHAR(3) NOT NULL,
        AccountNumebr VARCHAR(50) NOT NULL,
        AccountForMinor VARCHAR(3) NOT NULL,
        MinorName VARCHAR(50) DEFAULT NULL,
        MinorAge INT(11) DEFAULT NULL,
        MinorBirthCertificateNumber VARCHAR(50) DEFAULT NULL,
        MinorControlNumber VARCHAR(50) DEFAULT NULL,
        MinorVolNumber VARCHAR(50) DEFAULT NULL,

        -- JOB INFO
        AccountHolderOccupation VARCHAR(50) NOT NULL,
        IsAccountHolderEmployed VARCHAR(3) NOT NULL,
        CurrentEmployerName VARCHAR(50) NOT NULL,
        CurrentEmployerAddress VARCHAR(50) NOT NULL,
        JobPosition VARCHAR(50) NOT NULL,
        YearsOfEmployment INT(11) NOT NULL,
        SourceOfFunds VARCHAR(50) NOT NULL,
        USDAmount VARCHAR(50) NOT NULL,
        LRDAmount VARCHAR(50) NOT NULL,
        BeneficiaryName VARCHAR(50) NOT NULL,
        BeneficiaryRelationship VARCHAR(50) NOT NULL,
        BeneficiaryDOB DATE NOT NULL,
        FirstReferencePersonName VARCHAR(50) NOT NULL,
        FirstReferencePersonAddress VARCHAR(100) NOT NULL,
        SecondReferencePersonName VARCHAR(50) NOT NULL,
        SecondReferencePersonAddress VARCHAR(100) NOT NULL,
        IsAccountHolderGovernmentOfficial VARCHAR(3) NOT NULL,
        JobPositionInTheGovernment VARCHAR(50) DEFAULT NULL,
        IsAccountHolderRelativeToGovernmentOfficial VARCHAR(3) NOT NULL,
        NameOfGovernmentOfficial VARCHAR(50) DEFAULT NULL,
        RelationshipToGovernmentOfficial VARCHAR(50) DEFAULT NULL,
        
        -- Travel & Citizenship
        DateOfArrival DATE DEFAULT NULL,
        ExpectedDateOfDeparture DATE DEFAULT NULL,
        VisaNumber INT(11) DEFAULT NULL,
        VisaIssuedDate DATE DEFAULT NULL,
        VisaExpiryDate DATE DEFAULT NULL,
        PassportNumber VARCHAR(50) DEFAULT NULL,
        PassportIssuingCountry VARCHAR(50) DEFAULT NULL,
        PassportIssuedDate DATE DEFAULT NULL,
        PassportExpiryDate DATE DEFAULT NULL,
        ResidentPermitNumber VARCHAR(50) DEFAULT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL
    ) $wpdb->charset COLLATE $wpdb->collate;";
  
    $push_pull = "CREATE TABLE $push_pull (
        -- PERSONAL INFO
        AccountID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        HaveAnAccountWithIB VARCHAR(3) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50) DEFAULT NULL,
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50) DEFAULT NULL,
        AccountHolderEmail VARCHAR(50) NOT NULL,
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL
    ) $wpdb->charset COLLATE $wpdb->collate;";
  
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $create_new_account_sql );
    dbDelta( $push_pull );
}

add_action( 'wp_loaded', 'create_custom_tables' );
  

// $DATABASE_TABLES = [

//     'CREATE TABLE ATM (
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
//         PushAndPull VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) ENGINE = INNODB DEFAULT CHARSET = latin1;',

//     'CREATE TABLE SMS_Alert (
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
//         ATM VARCHAR(20) NOT NULL,
//         InternetBanking VARCHAR(20) NOT NULL,
//         PushAndPull VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) ENGINE = INNODB DEFAULT CHARSET = latin1;',

//     'CREATE TABLE Online_Banking (
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
//         ATM VARCHAR(20) NOT NULL,
//         SMSBanking VARCHAR(20) NOT NULL,
//         PushAndPull VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) ENGINE = INNODB DEFAULT CHARSET = latin1;',

//     'CREATE TABLE Mobile_Banking (
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
//         ATM VARCHAR(20) NOT NULL,
//         SMSBanking VARCHAR(20) NOT NULL,
//         PushAndPull VARCHAR(20) NOT NULL,
//         Ealerts VARCHAR(20) NOT NULL,
//         EmailInstructions VARCHAR(20) NOT NULL,
//         IsAgreedToTerms VARCHAR(3) NOT NULL
//     ) ENGINE = INNODB DEFAULT CHARSET = latin1;',
// ]; 