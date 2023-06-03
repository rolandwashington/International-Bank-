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


    // E-STATEMENT
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


    // E-ALERT
    $e_alert = $wpdb->prefix . 'ib_e_alert';

    $e_alert_table = "CREATE TABLE $e_alert (
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
        MobileBanking VARCHAR(10) NOT NULL,
        Mastercard VARCHAR(10) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        IsAgreedToTerms VARCHAR(3) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    
    // ONLINE BANK ACCOUNT APPLICATION
    $online_bank_account = $wpdb->prefix . 'ib_online_bank_account';

    $online_bank_account_table = "CREATE TABLE $online_bank_account (
        -- PERSONAL INFO
        id INT(11) NOT NULL AUTO_INCREMENT,
        AccountType VARCHAR(50) NOT NULL,
        AccountHolderTitle VARCHAR(10) NOT NULL,
        AccountHolderFirstName VARCHAR(50) NOT NULL,
        AccountHolderMiddleName VARCHAR(50),
        AccountHolderLastName VARCHAR(50) NOT NULL,
        AccountHolderDOB DATE NOT NULL,
        AccountHolderGender VARCHAR(10) NOT NULL,
        AccountHolderNationality VARCHAR(50) NOT NULL,
        AccountHolderCitizenshipStatus VARCHAR(50) NOT NULL,
        AccountHolderIDCard TEXT NOT NULL,
        AccountHolderIDCardNumber VARCHAR(100) NOT NULL,
        IDIssueDate DATE,
        IDExpirationDate DATE,
        AccountHolderPassportSizePicture TEXT NOT NULL,
        AccountHolderMaritalStatus VARCHAR(50) NOT NULL,
        SpouseName VARCHAR(50) NOT NULL,
        AccountHolderCity VARCHAR(50) NOT NULL,
        AccountHolderCounty VARCHAR(50) NOT NULL,
        AccountHolderCountry VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberOne VARCHAR(50) NOT NULL,
        AccountHolderPhoneNumberTwo VARCHAR(50),
        AccountHolderEmail VARCHAR(50) NOT NULL,
        FatherName VARCHAR(50) NOT NULL,
        FatherAddress VARCHAR(50) NOT NULL,
        MotherName VARCHAR(50) NOT NULL,
        MotherAddress VARCHAR(50) NOT NULL,
        HaveAnAccountwithIB VARCHAR(3) NOT NULL,
        AccountNumebr VARCHAR(50) NOT NULL,
        AccountForMinor VARCHAR(3) NOT NULL,
        MinorName VARCHAR(50),
        MinorAge INT(11),
        MinorBirthCertificateNumber VARCHAR(50),
        MinorControlNumber VARCHAR(50),
        MinorVolNumber VARCHAR(50),

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
        JobPositionInTheGovernment VARCHAR(50),
        IsAccountHolderRelativeToGovernmentOfficial VARCHAR(3) NOT NULL,
        NameOfGovernmentOfficial VARCHAR(50),
        RelationshipToGovernmentOfficial VARCHAR(50),
        
        -- Travel & Citizenship
        DateOfArrival DATE,
        ExpectedDateOfDeparture DATE,
        VisaNumber INT(11),
        VisaIssuedDate DATE,
        VisaExpiryDate DATE,
        PassportNumber VARCHAR(50),
        PassportIssuingCountry VARCHAR(50),
        PassportIssuedDate DATE,
        PassportExpiryDate DATE,
        ResidentPermitNumber VARCHAR(50),
        
        -- ADDITIONAL SERVICES
        IsAdditionalEServices VARCHAR(3) NOT NULL,
        SMSBanking VARCHAR(20) NOT NULL,
        InternetBanking VARCHAR(20) NOT NULL,
        ATM VARCHAR(20) NOT NULL,
        Ealerts VARCHAR(20) NOT NULL,
        EmailInstructions VARCHAR(20) NOT NULL,
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
    dbDelta( $e_alert_table );
    dbDelta( $online_bank_account_table );
}

add_action( 'after_setup_theme', 'create_custom_tables' );

add_theme_support('post-thumbnails');

function create_ib_recruitment_post_type() {
    $labels = array(
        'name' => 'IB Recruitment',
        'singular_name' => 'IB Recruitment',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Job Position',
        'edit_item' => 'Edit Job Position',
        'new_item' => 'New Job Position',
        'view_item' => 'View Job Position',
        'search_items' => 'Search IB Recruitment',
        'not_found' => 'No Recruitment found',
        'not_found_in_trash' => 'No Recruitment found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'IB Recruitment'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'ib-recruitment'),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
    );

    register_post_type('ib_recruitment', $args);
}
add_action('init', 'create_ib_recruitment_post_type');

// Display custom fields on the edit screen for 'IB Recruitment'
function display_ib_recruitment_custom_fields($post) {
    if ($post->post_type === 'ib_recruitment') {
        // Get the current values from the database
        $minSalary = get_post_meta($post->ID, 'min_salary', true);
        $maxSalary = get_post_meta($post->ID, 'max_salary', true);
        $jobAddress = get_post_meta($post->ID, 'job_address', true);
        ?>
        <input type="text" name="min_salary" value="<?php echo esc_attr($minSalary); ?>" placeholder="Minimum Salary">
        <input type="text" name="max_salary" value="<?php echo esc_attr($maxSalary); ?>" placeholder="Maximum Salary">
        <input type="text" name="job_address" value="<?php echo esc_attr($jobAddress); ?>" placeholder="Job Address">
        <?php
    }
}

// Save custom fields when the 'IB Recruitment' post is updated
function save_ib_recruitment_custom_fields($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type === 'ib_recruitment') {
        if (isset($_POST['min_salary'])) {
            update_post_meta($post_id, 'min_salary', sanitize_text_field($_POST['min_salary']));
        }
        if (isset($_POST['max_salary'])) {
            update_post_meta($post_id, 'max_salary', sanitize_text_field($_POST['max_salary']));
        }
        if (isset($_POST['job_address'])) {
            update_post_meta($post_id, 'job_address', sanitize_text_field($_POST['job_address']));
        }
    }
}

add_action('edit_form_after_title', 'display_ib_recruitment_custom_fields');
add_action('save_post', 'save_ib_recruitment_custom_fields');





// IB TEAM MEMBERS
function ib_team_members() {
    $labels = array(
        'name' => 'IB Team Member',
        'singular_name' => 'IB Team Member',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Member',
        'new_item' => 'New Member',
        'view_item' => 'View Member',
        'search_items' => 'Search IB Team Member',
        'not_found' => 'No Team Member found',
        'not_found_in_trash' => 'No Team Member found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'IB Team Member'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'ib-team_member'),
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category')
    );

    register_post_type('ib_team_member', $args);
}
add_action('init', 'ib_team_members');

// Display custom fields on the edit screen for 'IB Team Member'
function team_member_extra_details($post) {
    if ($post->post_type === 'ib_team_member') {
        // Get the current values from the database
        $position = get_post_meta($post->ID, 'job_position', true);
        ?>
        <input type="text" name="job_position" value="<?php echo esc_attr($position); ?>" placeholder="Position">
        <?php
    }
}


// Save custom fields when the 'IB Team Member' post is updated
function save_team_member_extra_details($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type === 'ib_team_member' && isset($_POST['job_position'])) {
        update_post_meta($post_id, 'job_position', sanitize_text_field($_POST['job_position']));
    }
}

function change_title_placeholder_text($title_placeholder, $post) {
    if ($post->post_type === 'ib_team_member') {
        $title_placeholder = 'Add Member Name';
    }
    return $title_placeholder;
}
add_filter('enter_title_here', 'change_title_placeholder_text', 10, 2);

add_action('edit_form_after_title', 'team_member_extra_details');
add_action('save_post', 'save_team_member_extra_details');



