<?php 

    session_start();
    // remove all session variables

    $_SESSION["passenger_id"] = null;
    $_SESSION["fullName"] = null;

    session_unset();
    
    // destroy the session
    session_destroy(); 

    setcookie('status', 'true', time()-86600, '/');
    $_SESSION["passenger_id"] = null;
    $_SESSION["fullName"] = null;

    header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/home/home.php');

?>
