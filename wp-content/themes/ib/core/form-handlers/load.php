<?php 
    require_once get_template_directory() . "/core/form-handlers/database.php";
    require_once get_template_directory() . "/core/classes/User.php";

	$loadFromUser = new User($pdo);
  
    include 'database.php';
    $SMTPEmailAddress   = 'admin@international-bank.thekreativezone.com';
    $SMTPEmailPassword  = 'p$TpsM!!BTFkzx8Q&pJK!';
    $SMTPHost           = 'box2064.bluehost.com';
    $SMTPPortNumber     = 25;