<?php
include '../../database/dbConnect.php';

if(isset($_GET['notificationId'])){
    // get method er maddhome amra variable / parameter access korte pari .. 
    $notificationId = $_GET['notificationId']; // storing deleteid in a variable which i get from query parameter

    // ekhon delete query likhbo 
    //echo $notificationId;
    $sql = "delete from `local_bus_ticketing_system`.`notification` where notificationId=".$notificationId; // table id is equal to this id 

    $result = mysqli_query($con, $sql); 
    
    if($result){
        // if query has execute successfully 
        //echo "Data deleted successfully sql ".$sql ; // show me this 
        
        header('location: ../subNavbar/personalInformation/personalInformation.php');
    }else{
        // error 
        echo "Data deleted successfully" ; 
        die(mysqli_error($con));
    }
}

?>