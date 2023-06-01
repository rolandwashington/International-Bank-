<?php    
    if ( strstr( $_SERVER['SERVER_NAME'], 'ibliberia.com' ) ) {
        $SMTPReciverEmailAddress   = 'erequest@ibliberia.com';
        $AppointmentEmail          = 'e-appointment@ibliberia.com';
    } else {
        $AppointmentEmail          = 'admin@international-bank.thekreativezone.com';
        $SMTPReciverEmailAddress   = 'admin@international-bank.thekreativezone.com';
    }
    $SMTPEmailAddress   = 'admin@international-bank.thekreativezone.com';
    $SMTPEmailPassword  = 'p$TpsM!!BTFkzx8Q&pJK!';
    $SMTPHost           = 'box2064.bluehost.com';
    $SMTPPortNumber     = 25;