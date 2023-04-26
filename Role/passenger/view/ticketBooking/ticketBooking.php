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
    <link rel="stylesheet" href="./ticketBooking.css"/>
    <style>
        * {
            background-color: #01263f;
        }
        .fieldSet{
            border: 1px solid wheat;
            border-radius: 7px;
        }
        .legend{
            color :white;
        }
        .inputName{
            color : white !important;
        }
        .textBox{
            border: 1px solid #4985 ;
            border-radius: 4px;
            width : 99%;
            color :white;
        }
        .textBox:focus {
            background-color: teal;
        }
        .textBox:not(:focus) {
            background-color: teal;
        }

        .submitBtn{
    border: 2px solid #4988;
    border-radius: 7px;
    padding : 3px;
    background-color: rgb(4, 123, 83);
}
/* .option:hover{
    background-color: white;
} */
.errorMsg {
    color : red !important;
}
.my-table {
  border-collapse: collapse;
  width: 100%;
  
}

.my-table th, .my-table td {
  text-align: center; 
  /* age theke left deowa chilo  */
  padding: 8px;
  border: 1px solid rgb(4, 123, 83);
  color : white;
  /* border-radius:7px !important; */
}

.my-table th {
  background-color: rgb(4, 101, 83);
  font-weight: bold;
  color :black;
  /* border-radius:7px !important; */
}

.detailsBtn{
    border: 2px solid #4988;
    border-radius: 7px;
    padding : 3px;
    background-color: rgb(4, 123, 83);
    color : purple;
}

.bookNowBtn{
    border: 2px solid #4988;
    border-radius: 7px;
    padding : 3px;
    background-color: rgb(4, 123, 83);
}

.bookNowBtnLink{
    border: none;
    border-radius: 7px;
    padding : 3px;
    background-color: rgb(4, 123, 83);
    text-decoration: none;
}
.busName{
    background-color: rgb(4, 123, 83);
    border-radius: 7px;
    border: 2px solid #4988;
}
    </style>
    
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
                <fieldset class="fieldSet">
                    <table align="center">

                        <legend class="legend">Ticket Booking Form</legend>
                        <form novalidate action="../../controller/ticketBooking/ticketBookingProcess.php" method="post">
                            <tr>
                                
                                    <td > <label for="area" class="inputName">What area do you live in</label> </td>
                                    <td class="inputName">:</td>
                                    <td>
                                        <!-- input form-->
                                        <?php 
                                        $startAreaVariable = '';
                                        if(isset($_SESSION["startArea"])){
                                            $startAreaVariable = $_SESSION["startArea"];
                                        }

                                        echo ' <select class="textBox" name="startAreaName" id="startAreaName" value=" '.$startAreaVariable .'">'
                                        ?>
                                            <!-- area gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->
                                            <!-- lets pull all Area Name value from database  -->
                                            <?php

                                                $flag = showAllAvailableArea();
                                                if($flag === true){

                                                    $All_Area = $_SESSION['All_Area'];
                                                    echo "<option class='option' value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
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
                                    <button class="submitBtn" type="submit">Submit</button>
                                    </td>
                            </tr>
                            </form>
                            <tr>
                                <td> <label class="inputName" for="area">Available route</label> </td>
                                <td class="inputName">:</td>
                                <td>
                                    <!-- input form-->
                                    <select class='textBox' width="300px" name="area" id="area">
                                        <!-- ekhane shei route gulai show korbe .. jegula oi place related  -->
                                        <?php
                                            echo "<option  value='volvo'>".$_SESSION["route"]."</option>";
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
                                        echo "<h3  class='inputName'>Available bus of route [ ".$routeIdVariable." ] </h3>";
                                    ?>

                                    <?php 

                                        $flag = showCompanyName($routeIdVariable);
                                        if($flag === true){

                                            $Company_Name = $_SESSION['Company_Name'];
                                            $flag = false;
                                            foreach ($Company_Name as $rowAgain) {
                                                $_SESSION["companyName"]= $rowAgain['companyName'];
                                                echo "<h4  class='inputName'>Bus Company Name : <span><button class='busName'>".$_SESSION["companyName"]."</button></span> </h4>";
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
                                                echo " <h4  class='errorMsg'> No Bus Available. for this route </h4>";
                                            }
                                            // echo "flag is false here";
                                        }else{
                                            // echo "flag is false here else part";
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
                                <td> <label  class='inputName' for="area">Select your destination</label> </td>
                                <td  class='inputName'>:</td>
                                <td>
                                    
                                    <?php 
                                        $destArea = '';
                                        if(isset($_SESSION["destinationArea"])){
                                            $destArea = $_SESSION["destinationArea"];
                                        }
                                        echo ' <select class="textBox" name="destinationAreaName" id="destinationAreaName" value=" '.$destArea.'">'
                                        ?>
                                            
                                            <?php

                                                $flag = showAllAreaNamesWithoutStartAreaName();
                                                if($flag === true){

                                                    $destination_area = $_SESSION['destination_area'];
                                                    echo "<option value=".$_SESSION["destinationArea"]. ">".$_SESSION["destinationArea"]. "</option>";
                                                    foreach ($destination_area as $rowAgain) {
                                                        $areaName= $rowAgain['areaName'];
                                                        echo "<option value=".$areaName.">$areaName</option>";
                                                    }
                                                    
                                                    // echo "flag is false here";
                                                }else{
                                                    // echo "flag is false here else part";
                                                    die(mysqli_error($con));
                                                }


                                                // 😀😀😀

                                                // $sql = 'select areaName from `local_bus_ticketing_system`.`area` where routeId="'.$_SESSION['routeId'].'" && areaName!="'.$_SESSION['startArea'].'"';
                                                
                                                // $result = mysqli_query($con, $sql);
                                                // if($result){
                                                    
                                                //     echo "<option value=".$_SESSION["destinationArea"]. ">".$_SESSION["destinationArea"]. "</option>";
                                                //     while($row = mysqli_fetch_assoc($result)){
                                                //         $areaName= $row['areaName'];
                                                //         echo "<option value=".$areaName.">$areaName</option>";
                                                //     }
                                                    
                                                // }else{
                                                    
                                                //     die(mysqli_error($con));
                                                // }
                                            ?>
                                            
                                        <?php 
                                        echo "</select>";
                                        ?>

                                    <!-- Input form End-------------------------------------- -->
                                </td>
                            </tr>

                            
                            <tr>
                                <td>
                                    <label for="dateOfBirth"  class='inputName '>Date</label>

                                </td>
                                <td  class='inputName'>:</td>
                                <td>
                                    
                                    <input  class='inputName' type="date" id="dateForTicketBooking" name="dateForTicketBooking"><br>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                    <td>
                                    <button type="submit"  class='submitBtn'>Submit</button>
                                    </td>
                            </tr>
                        </form>

                            <tr>
                                <td>
                                    <h3  class='inputName'>Available bus of list and seat no.</h3>
                                    
                                    <table border="1" class="my-table">
                                            <!-- <tr>
                                                <th>routeId.</th>
                                                <th>Vehicle Serial No. busId </th>
                                                <th>departureTime</th>
                                                <th>arrivalTime</th>
                                                <th>Avaiable Total Seat</th>
                                                <th></th>
                                            </tr> -->
                                        <?php 

                                                    $_SESSION["routeId"] = '';
                                                    $_SESSION["busId"] = '';
                                                    $_SESSION["departureTime"] = '';
                                                    $_SESSION["arrivalTime"] = '';
                                                    $_SESSION["availableTotalSeat"] = '';

                                        $scheduledIdVariable = '';
                                        if(isset($_SESSION["scheduleId"])){
                                            $scheduledIdVariable = $_SESSION["scheduleId"];
                                        }

                                            $flag = showTripScheduleDetails($scheduledIdVariable);
                                            if($flag === true){

                                                $trip_schedule = $_SESSION['trip_schedule'];
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
                                                foreach ($trip_schedule as $rowAgain) {
                                                    
                                                    $routeId = $rowAgain['routeId'];
                                                    $busId = $rowAgain['busId'];
                                                    $departureTime = $rowAgain['departureTime'];
                                                    $arrivalTime = $rowAgain['arrivalTime'];
                                                    $availableTotalSeat = $rowAgain['availableTotalSeat'];

                                                    $_SESSION["routeId"] = $routeId;
                                                    $_SESSION["busId"] = $busId;
                                                    $_SESSION["departureTime"] = $departureTime;
                                                    $_SESSION["arrivalTime"] = $arrivalTime;
                                                    $_SESSION["availableTotalSeat"] = $availableTotalSeat;
                                                }

                                                echo "
                                                        <tr>
                                                            <td>".$_SESSION['routeId']."</td>
                                                            <td>".$_SESSION['busId']."</td>
                                                            <td>".$_SESSION['departureTime']."</td>
                                                            <td>".$_SESSION['arrivalTime']."</td>
                                                            <td>".$_SESSION['availableTotalSeat']."</td>
                                                            <td>
                                                                <button  class='bookNowBtn'> <a href='../confirmBooking/confirmBooking.php'  class='bookNowBtnLink'>Book Now</a></button>
                                                                
                                                        
                                                                <a href='../ticketDetails/ticketDetails.php'>
                                                                    <button class='detailsBtn'>Details</button>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                        ";
                                                
                                                // echo "flag is false here";
                                            }else{
                                                // echo "flag is false here else part";
                                                $_SESSION["routeId"] = " ";
                                                $_SESSION["busId"] = " ";
                                                $_SESSION["departureTime"] = " ";
                                                $_SESSION["arrivalTime"] = " ";
                                                $_SESSION["availableTotalSeat"] = " ";

                                                // die(mysqli_error($con));
                                            }
                                                // //😀😀😀😀
                                                // $sql = "select scheduleId, busId, routeId, arrivalTime, departureTime, availableTotalSeat from `local_bus_ticketing_system`.`tripschedule` where scheduleId=".$scheduledIdVariable;
                                                // $_SESSION["sql"] = $sql;
                                                // $result = mysqli_query($con, $sql);

                                                
                                                // if($result){
                                                //     echo "
                                                //     <tr>
                                                //         <th>routeId.</th>
                                                //         <th>Vehicle Serial No. busId </th>
                                                //         <th>departureTime</th>
                                                //         <th>arrivalTime</th>
                                                //         <th>Avaiable Total Seat</th>
                                                //         <th></th>
                                                //     </tr>
                                                //     ";
                                                //     while($row = mysqli_fetch_assoc($result)){
                                                //         $routeId = $row['routeId'];
                                                //         $busId = $row['busId'];
                                                //         $departureTime = $row['departureTime'];
                                                //         $arrivalTime = $row['arrivalTime'];
                                                //         $availableTotalSeat = $row['availableTotalSeat'];

                                                //         $_SESSION["routeId"] = $routeId;
                                                //         $_SESSION["busId"] = $busId;
                                                //         $_SESSION["departureTime"] = $departureTime;
                                                //         $_SESSION["arrivalTime"] = $arrivalTime;
                                                //         $_SESSION["availableTotalSeat"] = $availableTotalSeat;

                                                //     }
                                                    
                                                //     echo "
                                                //         <tr>
                                                //             <td>".$_SESSION['routeId']."</td>
                                                //             <td>".$_SESSION['busId']."</td>
                                                //             <td>".$_SESSION['departureTime']."</td>
                                                //             <td>".$_SESSION['arrivalTime']."</td>
                                                //             <td>".$_SESSION['availableTotalSeat']."</td>
                                                //             <td>
                                                //                 <button> <a href='../confirmBooking/confirmBooking.php'>Book Now</a></button>
                                                                
                                                        
                                                //                 <a href='../ticketDetails/ticketDetails.php'>
                                                //                     <button>Details</button>
                                                //                 </a>

                                                //             </td>
                                                //         </tr>
                                                //         ";
                                                // }else{
                                                    
                                                //     $_SESSION["routeId"] = " ";
                                                //     $_SESSION["busId"] = " ";
                                                //     $_SESSION["departureTime"] = " ";
                                                //     $_SESSION["arrivalTime"] = " ";
                                                //     $_SESSION["availableTotalSeat"] = " ";
                                                    
                                                // }
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