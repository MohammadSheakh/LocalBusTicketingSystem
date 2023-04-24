<!-- http://localhost/Local%20Bus%20Ticketing%20System/Role/passenger/ticketBooking/ticketBooking.html -->
<?php
session_start();
    if(isset($_COOKIE['status'])){
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ticketBooking.css"/>v
</head>

<body>
<?php
    // session_start();

    // include '../database/dbConnect.php';
    require '../../model/ticketBooking/ticketBooking.php';
        include '../system/navbar/mainNavbar.php';
        $companyName = "";
        $_SESSION["dbError"] = " " ;
        // $_SESSION["route"] = ;
        $flag = false;
        $masterFlag = false;

        $scheduleId =  "";
        $routeId = "";
        $busId =  "";
        $areaId = "";
        $arrivalTime = "" ;
        $date = "";
        $availableTotalSeat ="" ;
        $departureTime = "";
        //////////////////////////////////////
        
        
        
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table align="center">

                        <legend>Ticket Booking Form</legend>
                        <form novalidate action="../../controller/ticketBooking/ticketBookingProcess.php" method="post">
                            <tr>
                                
                                    <td> <label for="area">What area do you live in</label> </td>
                                    <td>:</td>
                                    <td>
                                        <!-- input form-->
                                        <?php 
                                        $startAreaVariable = '';
                                        if(isset($_SESSION["startArea"])){
                                            $startAreaVariable = $_SESSION["startArea"];
                                        }

                                        echo ' <select name="startAreaName" id="startAreaName" value=" '.$startAreaVariable .'">'
                                        ?>
                                            <!-- area gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->
                                            <!-- lets pull all Area Name value from database  -->
                                            <?php

                                                $flag = showAllAvailableArea();
                                                if($flag === true){

                                                    $All_Area = $_SESSION['All_Area'];
                                                    echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    foreach ($All_Area as $rowAgain) {
                                                        $areaName= $rowAgain['areaName'];
                                                        echo "<option value='".$areaName."'>$areaName</option>";
                                                    }
                                                }else{
                                                    // echo "😀😀😀😀😀😀";
                                                    die(mysqli_error($con));
                                                }

                                                // $sql = "select DISTINCT areaName from `local_bus_ticketing_system`.`area`";
                                                
                                                // $result = mysqli_query($con, $sql);
                                                // if($result){
                                                    
                                                //     echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                //     while($row = mysqli_fetch_assoc($result)){
                                                //         $areaName= $row['areaName'];
                                                //         echo "<option value='".$areaName."'>$areaName</option>";
                                                //     }

                                                // }else{
                                                //     // error 
                                                //     die(mysqli_error($con));
                                                // }
                                            ?>
                                            
                                            <!-- <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option> -->
                                        <?php 
                                        echo "</select>";
                                        ?>
                                        
                                    </td>
                                   
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                    <td>
                                    <button type="submit">Submit</button>
                                    </td>
                            </tr>
                            </form>
                            <tr>
                                <td> <label for="area">Available route</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form-->
                                    <select width="300px" name="area" id="area">
                                        <!-- ekhane shei route gulai show korbe .. jegula oi place related  -->
                                        <?php
                                            echo "<option value='volvo'>".$_SESSION["route"]."</option>";
                                        ?>
                                        <!-- <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option> -->
                                    </select>

                                </td>
                            </tr>
                            
                            <tr>

                                <td>
                                    <?php 

                                        $routeIdVariable = '';
                                        if(isset($_SESSION['routeId'])){
                                            $routeIdVariable = $_SESSION['routeId'];
                                        }
                                        echo "<h3>Available bus of route [ ".$routeIdVariable." ] </h3>";
                                    ?>

                                    <?php 

                                                $flag = showCompanyName($routeIdVariable);
                                                if($flag === true){

                                                    $Company_Name = $_SESSION['Company_Name'];
                                                    foreach ($Company_Name as $rowAgain) {
                                                        $_SESSION["companyName"]= $rowAgain['companyName'];
                                                        echo "<h4>Bus Company Name : <span><button>".$_SESSION["companyName"]."</button></span> </h4>";
                                                        $flag = true;
                                                    }
                                                    if($flag == false){
                                                        $masterFlag = false; // table show korbo na .. 
                                                        $scheduleId =  "";
                                                        $routeId = "";
                                                        $busId =  "";
                                                        $areaId = "";
                                                        $arrivalTime = "" ;
                                                        $date = "";
                                                        $availableTotalSeat ="" ;
                                                        $departureTime = "";
                                                        echo " <h4> No Bus Available. for this route </h4>";
                                                    }
                                                }else{
                                                    
                                                }


                                        // $sql = "select companyName from `local_bus_ticketing_system`.`bus` where routeId = ".$routeIdVariable." ";
                                        
                                        // $result = mysqli_query($con, $sql);
                                        // if($result){
                                            
                                        //     while($row = mysqli_fetch_assoc($result)){
                                        //         $_SESSION["companyName"]= $row['companyName'];
                                                
                                                
                                        //         echo "<h4>Bus Company Name : <span><button>".$_SESSION["companyName"]."</button></span> </h4>";
                                        //         $flag = true;
                                        //     }
                                        //     if($flag == false){
                                        //         $masterFlag = false; // table show korbo na .. 
                                        //         $scheduleId =  "";
                                        //         $routeId = "";
                                        //         $busId =  "";
                                        //         $areaId = "";
                                        //         $arrivalTime = "" ;
                                        //         $date = "";
                                        //         $availableTotalSeat ="" ;
                                        //         $departureTime = "";
                                        //         echo " <h4> No Bus Available. for this route </h4>";
                                        //     }
                                            
                                        // }else{
                                            
                                        // }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            if($flag){
                                // ekhane baki shob content dekhabo .. 
                                $masterFlag = true;
                                
                            }
                            ?>
                        <form action="./saveDateForTicketBooking.php" method="post" novalidate>
                            
                            <tr>
                                <td> <label for="area">Select your destination</label> </td>
                                <td>:</td>
                                <td>
                                    
                                    <?php 
                                        $destArea = '';
                                        if(isset($_SESSION["destinationArea"])){
                                            $destArea = $_SESSION["destinationArea"];
                                        }
                                        echo ' <select name="destinationAreaName" id="destinationAreaName" value=" '.$destArea.'">'
                                        ?>
                                            
                                            <?php
                                                $sql = 'select areaName from `local_bus_ticketing_system`.`area` where routeId="'.$_SESSION['routeId'].'" && areaName!="'.$_SESSION['startArea'].'"';
                                                
                                                $result = mysqli_query($con, $sql);
                                                if($result){
                                                    
                                                    echo "<option value=".$_SESSION["destinationArea"]. ">".$_SESSION["destinationArea"]. "</option>";
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $areaName= $row['areaName'];
                                                        echo "<option value=".$areaName.">$areaName</option>";
                                                    }
                                                    
                                                }else{
                                                    
                                                    die(mysqli_error($con));
                                                }
                                            ?>
                                            
                                        <?php 
                                        echo "</select>";
                                        ?>

                                    <!-- Input form End-------------------------------------- -->
                                </td>
                            </tr>

                            
                            <tr>
                                <td>
                                    <label for="dateOfBirth">Date</label>

                                </td>
                                <td>:</td>
                                <td>
                                    
                                    <input type="date" id="dateForTicketBooking" name="dateForTicketBooking"><br>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                    <td>
                                    <button type="submit">Submit</button>
                                    </td>
                            </tr>
                        </form>

                            <tr>
                                <td>
                                    <h3>Available bus of list and seat no.</h3>
                                    
                                    <table border="1">
                                            <!-- <tr>
                                                <th>routeId.</th>
                                                <th>Vehicle Serial No. busId </th>
                                                <th>departureTime</th>
                                                <th>arrivalTime</th>
                                                <th>Avaiable Total Seat</th>
                                                <th></th>
                                            </tr> -->
                                        <?php 
                                        $scheduledIdVariable = '';
                                        if(isset($_SESSION["scheduleId"])){
                                            $scheduledIdVariable = $_SESSION["scheduleId"];
                                        }
                                                $sql = "select scheduleId, busId, routeId, arrivalTime, departureTime, availableTotalSeat from `local_bus_ticketing_system`.`tripschedule` where scheduleId=".$scheduledIdVariable;
                                                $_SESSION["sql"] = $sql;
                                                $result = mysqli_query($con, $sql);

                                                //$sqlForBusTable = "select busRegistrationNo, companyName, type from `local_bus_ticketing_system`.`tripschedule` where busId=".$_SESSION['scheduleId'];
                                                // $scheduleId =  "";
                                                // $routeId = "";
                                                // $busId =  "";
                                                // $areaId = "";
                                                // $arrivalTime = "" ;
                                                // $date = "";
                                                // $availableTotalSeat ="" ;
                                                // $departureTime = "";
                                        
                                                if($result){
                                                    echo "
                                                    <tr>
                                                        <th>routeId.</th>
                                                        <th>Vehicle Serial No. busId </th>
                                                        <th>departureTime</th>
                                                        <th>arrivalTime</th>
                                                        <th>Avaiable Total Seat</th>
                                                        <th></th>
                                                    </tr>
                                                    ";
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $routeId = $row['routeId'];
                                                        $busId = $row['busId'];
                                                        $departureTime = $row['departureTime'];
                                                        $arrivalTime = $row['arrivalTime'];
                                                        $availableTotalSeat = $row['availableTotalSeat'];

                                                        $_SESSION["routeId"] = $routeId;
                                                        $_SESSION["busId"] = $busId;
                                                        $_SESSION["departureTime"] = $departureTime;
                                                        $_SESSION["arrivalTime"] = $arrivalTime;
                                                        $_SESSION["availableTotalSeat"] = $availableTotalSeat;

                                                        // flag er maddhome control korte hobe ...................................................... 
                                                    }
                                                    //echo "routeID===after while loop 309================".$_SESSION["sql"];
                                                    echo "
                                                        <tr>
                                                            <td>".$_SESSION['routeId']."</td>
                                                            <td>".$_SESSION['busId']."</td>
                                                            <td>".$_SESSION['departureTime']."</td>
                                                            <td>".$_SESSION['arrivalTime']."</td>
                                                            <td>".$_SESSION['availableTotalSeat']."</td>
                                                            <td>
                                                                <button> <a href='../confirmBooking/confirmBooking.php'>Book Now</a></button>
                                                                
                                                        
                                                                <a href='../ticketDetails/ticketDetails.php'>
                                                                    <button>Details</button>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                        ";
                                                }else{
                                                    //echo "routeID===================".$_SESSION["sql"];
                                                    
                                                    $_SESSION["routeId"] = " ";
                                                    $_SESSION["busId"] = " ";
                                                    $_SESSION["departureTime"] = " ";
                                                    $_SESSION["arrivalTime"] = " ";
                                                    $_SESSION["availableTotalSeat"] = " ";
                                                    //die(mysqli_error($con));
                                                }
                                        ?>
                                        
                                    </table>
                            
                                </td>
                            </tr>
            
                    </table>
                </fieldset>
            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->


</body>

</html>

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
	}
?>