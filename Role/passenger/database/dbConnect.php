<?php
$con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
// last one is database name 

if($con){
    //echo "Connection Successful with local_bus_ticketing_system";
}else{
    // show me an error 
    die("Error From Database : ".mysqli_error($con));
}
// logic ta amra evabe likhbo je .. error hoile tumi amake ei error ta dekhao 