<?php    
    if ( strstr( $_SERVER['SERVER_NAME'], 'ibliberia.com' ) ) {
        $SMTPReciverEmailAddress   = 'erequest@ibliberia.com';
        $AppointmentEmail          = 'e-appointment@ibliberia.com';
    } else {
        $AppointmentEmail          = 'admin@international-bank.thekreativezone.com';
        $SMTPReciverEmailAddress   = 'admin@international-bank.thekreativezone.com';
    }
    $SMTPEmailAddress   = 'tkz@ibliberia.com';
    $SMTPEmailPassword  = 'rqQ06Ufub!^)';
    $SMTPHost           = 'box5735.bluehost.com';
    $SMTPPortNumber     = 25;

    