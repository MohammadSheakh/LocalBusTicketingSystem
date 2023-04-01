<?php

function connect() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    // last one is database name 
    
    if(!$con){
        // show me an error 
        die("Error From Database : ".mysqli_error($con)); /// session e save kore front end e error dekhate hobe 
    }
    //echo "Connection Successful with local_bus_ticketing_system";
    return $con;
}

function checkUserForLogin($email, $password){
    $con = connect();
    //$sql = "Select * from `local_bus_ticketing_system`.`passenger` WHERE  email='$email' AND password='$password' ";
    
    $sql = "Select passenger_id, fullName, email, password, gender, type from `local_bus_ticketing_system`.`passenger` WHERE  email= ? AND password= ? ";
    
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("ss", $email,$password );
    $stmt -> execute();  // true false return kore ..  
    // successfully execute korle mysqli object return kore 
    // select statement er khetre bolte hobe .. $stmt->get_result() // mysqli_result object return kore .. 
    // er moddhe num_rows return kore 0 or 1 or multiple 

    /*
    die(var_dump($stmt->get_result()));
    die(var_dump($stmt->get_result()->num_rows)); // object er property access korar jonno amra -> ei sign use kori 
    */

    // $email $password
    // we want to execute the query
    $result = mysqli_query($con, $sql);
    // if(mysqli_num_rows($result) === 1) // then return true otherwise return false 
    /////////////////$row = mysqli_fetch_assoc($result);
    
    //if($row > 0){
    if($stmt->get_result()->num_rows > 0){     //  or === jodi 1 hoy ..  
        // that means return true .. otherwise return false ..  
        //echo " we found a user ";

        $stmt->bind_result($passenger_id, $fullName, $email, $password, $gender, $type);
        
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('passenger_id' => $passenger_id, 'fullName' => $fullName, 'email' => $email, 'password' => $password, 'gender' => $gender, 'type' => $type);
        }
        $_SESSION['passenger_All_Details'] = $rows;
        $stmt->close(); // close the prepared statement

        return true;
        
    }else{
        // echo "problem 1";
       return false;
    }
}
?>