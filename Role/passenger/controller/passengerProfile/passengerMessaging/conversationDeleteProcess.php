<?php
session_start();
$con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); 


if($con){
    
}else{
    
    die("Error From Database : ".mysqli_error($con));
}
// include '../../database/dbConnect.php';

if(isset($_GET['conversationId'])){
    // get method er maddhome amra variable / parameter access korte pari .. 
    $conversationId = $_GET['conversationId']; // storing deleteid in a variable which i get from query parameter

    // ekhon delete query likhbo 
    //echo $notificationId;
    $sql = "delete from `local_bus_ticketing_system`.`message` where  conversationId=".$conversationId; // table id is equal to this id 
    $sql1 = "delete from `local_bus_ticketing_system`.`conversation` where  conversation_id=".$conversationId; // table id is equal to this id 

    $result = mysqli_query($con, $sql); 
    $result1 = mysqli_query($con, $sql1); 
    
    if($result){
        if($result1){
            header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
        
        }
    }else{
        // error 
        echo "Data deleted successfully" ; 
        die(mysqli_error($con));
    }
}

?>