<?php 
// session_start();
function connect() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    if(!$con){
        die("Error From Database : ".mysqli_error($con)); /// session e save kore front end e error dekhate hobe 
    }
    return $con;
}
function updatePersonalInformation($fieldName, $fieldNameValue){
    $con = connect();
    $sql = "update `local_bus_ticketing_system`.`passenger` set $fieldName= ? where passenger_id=?";//$_SESSION['passenger_id']
    echo $fieldName;
    echo $fieldNameValue;
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("si", $fieldNameValue, $_SESSION['passenger_id']);
    // echo $fieldName;
    // echo $fieldNameValue;
    if($stmt->execute() > 0){ 
        // because 1 return kore .. 
        
        $stmt->close();

        return true;
    }else{
    //     echo $fieldName;
    // echo $fieldNameValue;
         return false; 
    }
}

function getProfilePicture(){
    $con = connect();
    $sql = "select profilePicture from `local_bus_ticketing_system`.`passenger` where passenger_id=?";//$_SESSION['passenger_id']
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("i", $_SESSION['passenger_id']);
    if($stmt->execute()){
        $stmt->bind_result($profilePicture);
        $stmt->fetch();
        $stmt->close();
        echo $profilePicture;
        $_SESSION["passenger_image"] = $profilePicture;
        // return true;
    }else{
        return false;
    }
    
}
?>
