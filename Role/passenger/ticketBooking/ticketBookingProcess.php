<?php
session_start();
    include '../database/dbConnect.php';
    
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            $routeId = "";
            $areaName = "";
            
            $startAreaName = sanitize($_POST['startAreaName']);
            $_SESSION["startArea"] = $startAreaName;
            //$startAreaName = $_GET['startPoint'];
            
            if(empty($startAreaName)){
                echo "please fill up the startAreaName form";
                $flag = false;
            }
            if($flag === true){
                //$sqlForRouteId = "select routeId from `local_bus_ticketing_system`.`area` where areaName='$startAreaName'";
                // = er jaygay IN use korlam 
                $sqlForRouteId = "select areaName, routeId from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName='$startAreaName')";
                $_SESSION["sql"] = $startAreaName;//$sqlForRouteId;
                $result = mysqli_query($con, $sqlForRouteId);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        
                        // echo "$routeId";
                        $areaName = $areaName . $row['areaName'] ." > ";
                        $routeId = $row['routeId'];
                        // echo $areaName;
                    }
                    echo $areaName;
                    $_SESSION["route"] = $areaName;
                    $_SESSION["routeId"] = $routeId; ////////////////////////////////////////////////
                    $_SESSION["startArea"] = $startAreaName;
                    $_SESSION["busId"] = "";
                    $_SESSION["departureTime"] = " ";
                    $_SESSION["arrivalTime"] = " ";
                    $_SESSION["availableTotalSeat"] = " ";
                    

                    

                    
                    header('location: ./ticketBooking.php');
                }else{
                    $_SESSION["dbError"] = mysqli_error($con);
                    //die(mysqli_error($con));
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
