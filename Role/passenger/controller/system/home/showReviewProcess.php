<?php 
require '../../../model/system/home/review.php';
// session_start();
$flag = false;
$flag = showAllReview();
if($flag === true){
    $all_reviews = $_SESSION['all_reviews'];
    //var_dump($all_notifications);
    
    // header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    echo json_encode($all_reviews);   
    
}else{
    echo "sorry from showNotificationProcess";
    
}
?>