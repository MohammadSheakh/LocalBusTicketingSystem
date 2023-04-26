<?php 
require '../../../model/passengerProfile/notification/notification.php';
session_start();
$flag = false;
$flag = getAllNotification();
if($flag === true){
    $all_notifications = $_SESSION['all_notifications'];
    
    echo json_encode($all_notifications);
}else{
    echo "sorry from showNotificationProcess";
}
?>