<?php
require '../../model/ticketBooking/ticketBooking.php';
    if(isset($_COOKIE['status'])){
?>


<?php

session_start();
    // include '../database/dbConnect.php';
    $scheduleId =  "";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            
            $destinationAreaName = $_POST['destinationAreaName'];
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

                $flag = selectRouteIdBasedOnDestinationAreaName($destinationAreaName);
                if($flag === true){
                    $AreaName_And_RouteId_BasedOn_DestinationArea = $_SESSION['AreaName_And_RouteId_BasedOn_DestinationArea'] ;
                    // var_dump($AreaName_And_RouteId);
                    foreach ($AreaName_And_RouteId_BasedOn_DestinationArea as $rowAgain) {
                        
                        $routeId = $rowAgain['routeId'];
                    }
                    $_SESSION["routeId"] = $routeId;
                    
                }else{
                    // echo "😥"; // error from database .. 
                    $_SESSION["dbError"] = mysqli_error($con);
                    die(mysqli_error($con));
                }


                // 😀😀😀😀
                // $sqlForRouteId = "select routeId from `local_bus_ticketing_system`.`area` where areaName='".$destinationAreaName."'";
                // $result = mysqli_query($con, $sqlForRouteId);
                // if($result){
                //     while($row = mysqli_fetch_assoc($result)){
                //         $routeId = $row['routeId'];
                //     }
                //     $_SESSION["routeId"] = $routeId;
                // }else{
                //     $_SESSION["dbError"] = mysqli_error($con);
                //     die(mysqli_error($con));
                // }


                $flag = selectScheduleIdBasedOnRouteIdAndDateForTicketBooking($dateForTicketBooking);
                if($flag === true){
                    $schedule_Id = $_SESSION['schedule_Id'] ;
                    // var_dump($AreaName_And_RouteId);
                    foreach ($schedule_Id as $rowAgain) {
                        
                        $_SESSION["scheduleId"] = $rowAgain['scheduleId'];
                    }
                    //$_SESSION["scheduleId"] = $scheduleId;
                    header('location: ./ticketBooking.php'); // eta may be fix korte hobe 
                }else{
                    // echo "😥"; // error from database .. 
                    $_SESSION["dbError"] = mysqli_error($con);
                    die(mysqli_error($con));
                }


                // // 😀😀😀😀
                // $sqlForScheduleId = "select scheduleId from `local_bus_ticketing_system`.`tripschedule` where routeId='".$_SESSION['routeId']."' AND date='".$dateForTicketBooking."'";
                // $_SESSION["sql"] = $sqlForScheduleId;
                // $result = mysqli_query($con, $sqlForScheduleId);
                // if($result){
                //     while($row = mysqli_fetch_assoc($result)){
                //         $_SESSION["scheduleId"] = $row['scheduleId'];
                        
                //     }
                //     echo "from here if block : ::: ".$_SESSION["sql"];
                    
                    
                //     //$_SESSION["scheduleId"] = $scheduleId;
                    
                //     header('location: ./ticketBooking.php');
                // }else{
                    
                //     $_SESSION["dbError"] = mysqli_error($con);
                //     die(mysqli_error($con));
                // }
            }
    }

function sanitize($data){
     $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
	}
?>