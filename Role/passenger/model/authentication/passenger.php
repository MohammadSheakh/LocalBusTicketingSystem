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
    //$stmt -> execute();  // true false return kore ..  
    // if ($stmt->error) {
    //     echo "Error: " . $stmt->error;
    // }
    //$result = mysqli_query($con, $sql);
    /////////////////// $stmt->get_result()->num_rows
    if($stmt -> execute() > 0){     //  or === jodi 1 hoy ..  
        // if($stmt->get_result()->num_rows > 0){
            $stmt->bind_result($passenger_id, $fullName, $email, $password, $gender, $type);

            $rows = array();
            while ($stmt->fetch()) {
                $rows[] = array('passenger_id' => $passenger_id, 'fullName' => $fullName, 'email' => $email, 'password' => $password, 'gender' => $gender, 'type' => $type);
            }
            
            $_SESSION['passenger_All_Details'] = $rows;
            
            $stmt->close(); // close the prepared statement
            // echo "true";
            // var_dump($_SESSION['passenger_All_Details'] ) ;

            // if(isset($_SESSION['passenger_All_Details'])){
                return true;
            // }
            // return false;
            
        // }
    }else{
            echo "false";
            // return false;
    }
        
        
    // }else{
    //     // echo "problem 1";
    //    return false;
    // }
}

function checkUniqueForRegistration($email){
    $con = connect();
    //$sql = "Select * from `local_bus_ticketing_system`.`passenger` WHERE  email='$email' AND password='$password' ";
    
    $sql = "Select passenger_id from `local_bus_ticketing_system`.`passenger` WHERE  email=?";
    
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("s", $email);
    
    if($stmt -> execute() > 0){     //  or === jodi 1 hoy ..  
        
        if($stmt->fetch() > 0){
            $stmt->bind_result($passenger_id);

            $rows = array();
            while ($stmt->fetch()) {
                $rows[] = array('passenger_id' => $passenger_id);
            }
            
             var_dump($rows);
            
            $_SESSION['check_Unique_Email'] = $rows;
            
            $stmt->close(); // close the prepared statement
            // echo "ok".var_dump($rows);
            return true;
            
        }else{
            // echo "problem 1";
            return false;
        }
        
    }else{
        // echo "problem 1";
       return false;
    }
}

?>