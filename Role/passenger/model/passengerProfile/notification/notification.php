<?php 
function connectAgain() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    if(!$con){
        die("Error From Database : ".mysqli_error($con)); /// session e save kore front end e error dekhate hobe 
    }
    return $con;
}
function getAllNotification(){
    $con = connectAgain();
    $sql = "select companyName, busRegistrationNo, notificationId, notification, busId, passenger_id, email, employeeEmail_id, employeeId from `local_bus_ticketing_system`.`notification` where passenger_Id=?";
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("i", $_SESSION['passenger_id']);
    if($stmt -> execute() > 0){
        $stmt->bind_result($companyName, $busRegistrationNo, $notificationId, $notification, $busId, $passenger_id, $email, $employeeEmail_id, $employeeId);
        $rows = array();
        while ($stmt->fetch()) {

            $rows[] = array('companyName' => $companyName, 'busRegistrationNo' => $busRegistrationNo, 'notificationId' => $notificationId, 'notification' => $notification, 'busId' => $busId, 'passenger_id' => $passenger_id, 'employeeEmail_id' => $employeeEmail_id, 'employeeId' => $employeeId, 'email' => $email);
        }
        $_SESSION['all_notifications'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }
}

?>
