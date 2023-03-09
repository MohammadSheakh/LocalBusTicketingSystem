<?php
session_start();
    include '../database/dbConnect.php';
    $scheduleId =  "";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            
            
            $destinationAreaName = sanitize($_POST['destinationAreaName']);
            $_SESSION["destinationArea"] = $destinationAreaName;

            $dateForTicketBooking = $_POST['dateForTicketBooking'];

            if(empty($dateForTicketBooking)){
                echo " Please Give the Proper Date Value";
                $flag = false;
            }
            
            if(empty($destinationAreaName)){
                echo "please fill up the destinationAreaName form";
                $flag = false;
            }
            if($flag === true){
                
                $sqlForRouteId = "select scheduleId from `local_bus_ticketing_system`.`tripschedule` where routeId='".$_SESSION['routeId']."' AND date='".$dateForTicketBooking."'";
                $_SESSION["sql"] = $sqlForRouteId;
                $result = mysqli_query($con, $sqlForRouteId);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $scheduleId = $row['scheduleId'];
                        
                    }
                    echo "from here".$_SESSION["sql"];
                    echo $scheduleId;
                    
                    $_SESSION["scheduleId"] = $scheduleId;
                    header('location: ./ticketBooking.php');
                }else{
                    echo "from here".$_SESSION["sql"];
                    $_SESSION["dbError"] = mysqli_error($con);
                    die(mysqli_error($con));
                }
            }
    }
    

    

function sanitize($data){
     $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

