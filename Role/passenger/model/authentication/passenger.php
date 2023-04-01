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
        
        $stmt->bind_result($passenger_id, $fullName, $email, $password, $gender, $type);

        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('passenger_id' => $passenger_id, 'fullName' => $fullName, 'email' => $email, 'password' => $password, 'gender' => $gender, 'type' => $type);
        }
        //echo "in num rows > 0";
        var_dump($rows);
        echo "after printing rows";
        $_SESSION['passenger_All_Details'] = $rows;
        $stmt->close(); // close the prepared statement

        return true;
        
    }else{
        // echo "problem 1";
       return false;
    }
}
?>