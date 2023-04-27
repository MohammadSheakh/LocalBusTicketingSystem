<?php 
require '../../../model/passengerProfile/notification/notification.php';
// session_start();
$flag = false;
$flag = getAllNotification();
if($flag === true){
    $all_notifications = $_SESSION['all_notifications'];
    //var_dump($all_notifications);
    
    // header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    echo json_encode($all_notifications);   
    
}else{
    echo "sorry from showNotificationProcess";
    
}
?>