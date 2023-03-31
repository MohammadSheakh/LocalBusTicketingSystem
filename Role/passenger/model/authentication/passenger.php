<?php

function connect() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    // last one is database name 
    
    if(!$con){
        // show me an error 
        die("Error From Database : ".mysqli_error($con));
    }
    //echo "Connection Successful with local_bus_ticketing_system";
}

function checkUserForLogin(){
    
}
?>