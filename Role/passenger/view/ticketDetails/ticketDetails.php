<!-- http://localhost/Local%20Bus%20Ticketing%20System/Role/passenger/ticketBooking/ticketBooking.html -->

<?php
    require '../../model/ticketDetails/ticketDetails.php';
    if(isset($_COOKIE['status'])){
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ticketDetails.css">
</head>

<body>
    <!-- for main navbar  -->
    <?php
    session_start();
    //include '../database/dbConnect.php';
        // include '../../system/navbar/mainNavbar.php';
        include '../../view/system/navbar/mainNavbar.php';
        
        $masterFlag = false;
                                    
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset class='fieldSet'>
                    <table>
                        <legend class='legend'>Ticket / Trip Details Page</legend>

                        <div>
                            <h3 class="inputName">
                            <?php 
                                        echo   $_SESSION["startArea"] ?? " "; 
                                        ?>
                                to
                            
                            <?php 
                                        echo  $_SESSION["destinationArea"] ?? " "; //////// 😀
                                        ?>
                                        
                                    </h3>
                        </div>
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <img class='busImage' height="80px" src="../images/ticketDetailsPage/busPicture.png" alt="">

                                    </td>
                                    <td>
                                        <h5  class="inputName"><?php 
                                        echo $_SESSION["companyName"]." Paribahan" ?? " ";
                                        ?>
                                            </h5>
                                            <h5  class="inputName">Root No. 
                                        <?php 
                                        echo $_SESSION["routeId"] ?? " ";
                                        ?>
                                        </h5>
                                        
                                    </td>

                                    <td>
                                        <h5  class="inputName">Arrival Time : <?php 
                                        echo $_SESSION["arrivalTime"] ?? " ";
                                        ?></h5>
                                        <h5  class="inputName">Leave 
                                        <?php 
                                        echo $_SESSION["startArea"] ?? " "; 
                                        ?>
                                        point at 
                                        <?php 
                                        echo $_SESSION["departureTime"] ?? " "; 
                                        ?>
                                    </h5>

                                    </td>
                                </tr>
                            </table>


                        </tr>




                        <tr>
                            <td>
                                <h3  class="inputName">Available Seats</h3>
                                <!-- ekhane amra table er moddhe arekta table dekhabo 
                                        -->


                                <table border="1" class="my-table">
                                    <tr>
                                        <td>Gate</td>
                                        <td>&nbsp;</td>

                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td><img width="20px" src="../images/ticketDetailsPage/steering.png" alt="">
                                        </td>

                                    </tr>
                                    <tr>
                                    <?php
                                //     echo '
                                //     <tr>
                                //     <td>
                                //         <p>Status of <input name="seatNo_'.$rowAgain['seatNo'].'" id="seatNo" type="text" size="1" value="'.$rowAgain['seatNo'].'"></input></p>
                                //     </td>
                                //     <td>:</td>
                                //     <td>
                                    
                                //         <input    type="radio" id="booked" name="seat_status_'.$rowAgain['seatNo'].'" value="booked">
                                //         <label for="booked">Booked</label>
                                //         <input   checked type="radio" id="free" name="seat_status_'.$rowAgain['seatNo'].'" value="free">
                                //         <label for="free">Free</label>
                                //     </td>
                                // </tr>
                                //     ';
                                                $flag = selectSeatNoAndSeatStatusByBusId();
                                                if($flag === true){

                                                    $seatNo_And_seatStatus = $_SESSION['seatNo_And_seatStatus'];
                                                    foreach ($seatNo_And_seatStatus as $rowAgain) {

                                                        if($rowAgain['seatNo'] == 'A4'){
                                                            if($rowAgain['seatStatus'] === "Free"){
                                                                echo "
                                                                        <td><button style='color:white; background-color:green; border-radius: 4px;'>".$rowAgain['seatNo']."</button> </td>
                                                                ";
                                                            }else{
                                                                echo "
                                                                        <td><button style='color:white; background-color:red; border-radius: 4px;'>A4</button> </td>
                                                                ";
                                                            }
                                                        } else if($rowAgain['seatNo'] == 'A3'){
                                                            if($rowAgain['seatStatus'] === "Free"){
                                                                echo "
                                                                        <td><button style='color:white; background-color:green; border-radius: 4px;'>".$rowAgain['seatNo']."</button> </td>
                                                                        <td> </td>
                                                                        ";
                                                            }else{
                                                                // <td> </td>
                                                                echo "
                                                                         
                                                                        <td><button style='color:white; background-color:red; border-radius: 4px;'>A3</button> </td>
                                                                ";
                                                            }
                                                        }else if($rowAgain['seatNo'] == 'A2'){
                                                            if($rowAgain['seatStatus'] === "Free"){
                                                                echo "
                                                                <td> </td>
                                                                        <td><button style='color:white; background-color:green; border-radius: 4px;'>".$rowAgain['seatNo']."</button> </td>
                                                                ";
                                                            }else{
                                                                // <td> </td>
                                                                echo "
                                                                <td> </td>
                                                                        <td><button style='color:white; background-color:red; border-radius: 4px;'>A2</button> </td>
                                                                ";
                                                            }
                                                        }else if($rowAgain['seatNo'] == 'A1'){
                                                            if($rowAgain['seatStatus'] === "Free"){
                                                                echo "
                                                                        <td><button style='color:white; background-color:green; border-radius: 4px;'>".$rowAgain['seatNo']."</button> </td>
                                                                ";
                                                            }else{
                                                                echo "
                                                                        <td><button style='color:white; background-color:red; border-radius: 4px;'>A1</button> </td>
                                                                ";
                                                            }
                                                        }
                                                    
                                                    }
                                                }else{
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }
                                        ?>
                                        
                                                                                
                                    </tr>
                                    <!-- class='seatColor' -->
                                    <tr class='seatColor'>
                                        <td><button >B4</button> </td>
                                        <td><button>B3</button> </td>
                                        <td> </td>
                                        <td><button>B2</button> </td>
                                        <td><button>B1</button> </td>
                                    </tr>
                                    <tr class='seatColor'>
                                        <td><button>C4</button> </td>
                                        <td><button>C3</button> </td>
                                        <td> </td>
                                        <td><button>C2</button> </td>
                                        <td><button>C1</button> </td>
                                    </tr>
                                    <tr class='seatColor'>
                                        <td><button style="">D4</button> </td>
                                        <td><button>D3</button> </td>
                                        <td> </td>
                                        <td><button>D2</button> </td>
                                        <td><button>D1</button> </td>
                                    </tr>
                                    <tr class='seatColor'>
                                        <td><button>E4</button> </td>
                                        <td><button>E3</button> </td>
                                        <td> </td>
                                        <td><button>E2</button> </td>
                                        <td><button>E1</button> </td>
                                    </tr>
                                    <tr class='seatColor'>
                                        <td><button>F5</button> </td>
                                        <td><button>F4</button> </td>

                                        <td><button>F3</button> </td>
                                        <td><button>F2</button> </td>
                                        <td><button>F1</button> </td>
                                    </tr>
                                </table>


                            </td>
                            <td>
                                <fieldset class='fieldSet'>
                                    <!-- ---------------------------------------- -->
                                    
                                    
                                    <form action="../../controller/ticketDetails/ticketDetailsProcess.php" novalidate method="post" onsubmit="return seatBooking(this);">
                                        <table>

                                            <?php
                                                // selectSeatNoAndSeatStatusByBusId();$_SESSION['busId']
                                                // selectPerKMCostAndTollCostByRouteId(); $_SESSION['routeId']
                                                
                                                //  selectAreaIndexByStartAreaNameAndRouteId(); // $_SESSION['startArea'] ... $_SESSION['routeId']
                                                $flag = selectSeatNoAndSeatStatusByBusId();
                                                if($flag === true){

                                                    $seatNo_And_seatStatus = $_SESSION['seatNo_And_seatStatus'];
                                                    // echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    foreach ($seatNo_And_seatStatus as $rowAgain) {
                                                    
                                                        if($rowAgain['seatStatus'] === "Free"){
                                                            
                                                            echo '
                                                            <tr>
                                                            <td>
                                                                <p class="inputName">Status of <input readonly class="textBox" name="seatNo_'.$rowAgain['seatNo'].'" id="seatNo" type="text" size="1" value="'.$rowAgain['seatNo'].'"></input></p>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                            
                                                                <input    type="radio" id="booked" name="seat_status_'.$rowAgain['seatNo'].'" value="booked">
                                                                <label class="inputName" for="booked">Booked</label>
                                                                <input   checked type="radio" id="free" name="seat_status_'.$rowAgain['seatNo'].'" value="free">
                                                                <label class="inputName" for="free">Free</label>
                                                            </td>
                                                        </tr>
                                                            ';
                                                            $masterFlag = true;
                                                        }
                                                    }
                                                }else{
                                                
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }

                                                //////////////////////////////// 😅😅😅😅😅😅/////////////////////////////////////////////////
                                                // ekhon amra ei passenger ei bus er jonno jei ticket gula book korse already shegula dekhabo 

                                                $flag8 = selectSeatNoAndSeatStatusByBusIdAndPassengerId();
                                                if($flag8 === true){
                                                    
                                                    

                                                    $seatNo_And_seatStatus = $_SESSION['seatNo_And_seatStatus'];
                                                    
                                                    if((isset($_SESSION['seatNo_And_seatStatus']) && count($_SESSION['seatNo_And_seatStatus']) > 0 )){
                                                        echo "
                                                            <tr > 
                                                            
                                                            <td></td>
                                                                <td >
                                                                    <h6 class='inputName'> Your Booked Seat </h6>
                                                                </td>  
                                                                <td></td>
                                                                </tr>
                                                        ";
                                                        // </tr>
                                                    }
                                                    // echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                        
                                                    foreach ($seatNo_And_seatStatus as $rowAgain) {
                                                    
                                                        if($rowAgain['seatStatus'] === "Booked"){
                                                            // <tr >
                                                            echo '
                                                            <tr>
                                                            <td class="border-bottom" style="border-right: none;">
                                                                <p class="inputName">Status of <input readonly class="textBox" name="seatNo_'.$rowAgain['seatNo'].'" id="seatNo" type="text" size="1" value="'.$rowAgain['seatNo'].'"></input></p>
                                                            </td>
                                                            <td class="border-bottom inputName" style="border-right: none; border-left: none;">:</td>
                                                            <td class="border-bottom" style="border-left: none;">
                                                            
                                                                <input  checked  type="radio" id="booked" name="seat_status_'.$rowAgain['seatNo'].'" value="booked">
                                                                <label class="inputName" for="booked">Booked</label>
                                                                <input    type="radio" id="free" name="seat_status_'.$rowAgain['seatNo'].'" value="free">
                                                                <label class="inputName" for="free">Free</label>
                                                            </td>
                                                        </tr>
                                                            ';
                                                            $masterFlag = true;
                                                        }
                                                    }
                                                }else{
                                                
                                                    // echo "sorry";
                                                    // die(mysqli_error($con));
                                                }
                                                




                                                // 😀😀😀😀
                                                //$sql = "select perKmCost, tollCost from `local_bus_ticketing_system`.`route` where routeId=".$_SESSION['routeId'];

                                                // echo $_SESSION['busId'];
                                                // $sql = "select seatNo, seatStatus from `local_bus_ticketing_system`.`ticket` where busId=".$_SESSION['busId'];
                                                // $result = mysqli_query($con, $sql);
                                                // if($result){
                                                //     while($row = mysqli_fetch_assoc($result)){
                                                //         // echo $row['seatStatus'];
                                                //         if($row['seatStatus'] === "Free"){
                                                            
                                                //             echo '
                                                //             <tr>
                                                //             <td>
                                                //                 <p>Status of <input name="seatNo_'.$row['seatNo'].'" id="seatNo" type="text" size="1" value="'.$row['seatNo'].'"></input></p>
                                                //             </td>
                                                //             <td>:</td>
                                                //             <td>
                                                            
                                                //                 <input    type="radio" id="booked" name="seat_status_'.$row['seatNo'].'" value="booked">
                                                //                 <label for="booked">Booked</label>
                                                //                 <input   checked type="radio" id="free" name="seat_status_'.$row['seatNo'].'" value="free">
                                                //                 <label for="free">Free</label>
                                                //             </td>
                                                //         </tr>
                                                //             ';
                                                //             $masterFlag = true;
                                                //         }
                                                        
                                                //     }
                                                    
                                                // }
                                                // else{
                                                //     echo "sorry";
                                                //     die(mysqli_error($con));
                                                // }
                                        ?>
                                        <?php 
                                                $flag = selectPerKMCostAndTollCostByRouteId();
                                                if($flag === true){

                                                    $perKmCost_And_tollCost = $_SESSION['perKmCost_And_tollCost'];
                                                    // echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    foreach ($perKmCost_And_tollCost as $rowAgain) {
                                                        $_SESSION["perKmCost"] = $rowAgain['perKmCost'];
                                                        $_SESSION["tollCost"] = $rowAgain['tollCost'];
                                                    }
                                                }else{
                                                
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }
                                            // // 😀😀😀😀  
                                            // $sql = "select perKmCost, tollCost from `local_bus_ticketing_system`.`route` where routeId=".$_SESSION['routeId'];
                                            // // echo $sql;
                                            // $result = mysqli_query($con, $sql);
                                            // if($result){
                                            //     while($row = mysqli_fetch_assoc($result)){
                                            //         $_SESSION["perKmCost"] = $row['perKmCost'];
                                            //         $_SESSION["tollCost"] = $row['tollCost'];
                                            //     }
                                            // }else{
                                            //     echo "sorry";
                                            //     die(mysqli_error($con));
                                            // }
                                            $areaVariable = $_SESSION['startArea'];
                                            $flag = selectAreaIndexByStartOrDestAreaNameAndRouteId($areaVariable);
                                                if($flag === true){

                                                    $Area_Index = $_SESSION['Area_Index'];
                                                    // echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    foreach ($Area_Index as $rowAgain) {
                                                        $_SESSION["startAreaIndex"] = $rowAgain['areaIndex'];
                                                    }
                                                }else{
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }
                                            
                                            // // 😀😀😀😀
                                            // //$sqlForStartAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName="'.$_SESSION['startArea'].'")';
                                            // $sqlForStartAreaIndex = 'select areaIndex from `local_bus_ticketing_system`.`area`where areaName="'.$_SESSION['startArea'].'" AND routeId="'.$_SESSION['routeId'].'"';
                                            // $_SESSION["sqlForCheck"] = $sqlForStartAreaIndex;
                                            // $result = mysqli_query($con, $sqlForStartAreaIndex);
                                            // if($result){
                                            //     while($row = mysqli_fetch_assoc($result)){
                                            //         // echo "---------areaIndex--------".$row['areaIndex'];
                                            //         $_SESSION["startAreaIndex"] = $row['areaIndex'];
                                            //     }
                                            // }else{
                                            //     echo "sorry";
                                            //     die(mysqli_error($con));
                                            // }
                                            //$sqlForDestAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName="'.$_SESSION["destinationArea"].'")';
                                            
                                            $areaVariable = $_SESSION['destinationArea'];
                                            $flag = selectAreaIndexByStartOrDestAreaNameAndRouteId($areaVariable);
                                                if($flag === true){

                                                    $Area_Index = $_SESSION['Area_Index'];
                                                    foreach ($Area_Index as $rowAgain) {
                                                        $_SESSION["destinationAreaIndex"] = $rowAgain['areaIndex'];
                                                    }
                                                }else{
                                                
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }

                                            // // 😀😀😀😀
                                            // $sqlForDestAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area`where areaName="'.$_SESSION['destinationArea'].'" AND routeId="'.$_SESSION['routeId'].'"';
                                            // $result2 = mysqli_query($con, $sqlForDestAreaIndex);
                                            // if($result2){
                                            //     while($row = mysqli_fetch_assoc($result2)){
                                            //         // echo "-----------destination index-------".$row['areaIndex'];
                                            //         $_SESSION["destinationAreaIndex"] = $row['areaIndex'];
                                            //     }
                                            // }else{
                                            //     echo "sorry";
                                            //     die(mysqli_error($con));
                                            // }
                                            
                                            //////////////////////////////////////////////////////////////////////////////////////
                                            
                                            // ekhane amra try korbo .. prepared statement niye kaj korar jonno ... 

                                            $skipStartAreaPreviousDistance = $_SESSION["startAreaIndex"]+2; // may be plus 2 kore dilei problem ta solve hoye jabe ...  
                                            $flag = calculateDistance($skipStartAreaPreviousDistance);
                                            $_SESSION["distanceCalculation"] = 0;    
                                            if($flag === true){
                                                    
                                                    $distance_From_Prev_Area = $_SESSION['distance_From_Prev_Area'];
                                                    foreach ($distance_From_Prev_Area as $rowAgain) {
                                                        // $_SESSION["destinationAreaIndex"] = $rowAgain['distanceFromPrevArea'];
                                                        $_SESSION["distanceCalculation"] = $_SESSION["distanceCalculation"] + $rowAgain['distanceFromPrevArea'];
                                                        //$_SESSION["distanceCalculation"]  = "0";
                                                    }
                                                }else{
                                                
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }

                                            // //😀😀😀😀
                                            // $skipStartAreaPreviousDistance = $_SESSION["startAreaIndex"]+1;
                                            // $sqlForCalculateDistance = 'select distanceFromPrevArea from `local_bus_ticketing_system`.`area` where ( areaIndex BETWEEN "'.$skipStartAreaPreviousDistance.'+1" AND "'.$_SESSION["destinationAreaIndex"].'") AND routeId='.$_SESSION['routeId'];
                                            // $result3 = mysqli_query($con, $sqlForCalculateDistance);
                                            // $_SESSION["distanceCalculation"] = 0;
                                            // if($result3){
                                            //     while($row = mysqli_fetch_assoc($result3)){
                                                    
                                            //         $_SESSION["distanceCalculation"] = $_SESSION["distanceCalculation"] + $row['distanceFromPrevArea'];
                                            //     }
                                                
                                            // }else{
                                            //     echo "sorry";
                                            //     die(mysqli_error($con));
                                            // }
                                        ?>  
                                            <tr>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <?php 
                                                    if($masterFlag){
                                                        echo " <p class='errorMsg'  id='emailErrorMsg'></p> 
                                                         <button class='submitBtn'  type='submit'>Submit</button>";
                                                    }
                                                    ?>
                                                
                                                </td>
                                            </tr>

                                            <tr>

                                            </tr>
                                            
                                        </table>
                                        
                                    </form>

                                    <!-- ----------------------------------------- -->
                                    <legend class='legend'>Details seat plan</legend>
                                    <!-- <h5>You have selected A1, A2, A3 seat</h5> -->
                                    <?php
                                        $seatCountVariable = 0;
                                        if(isset($_SESSION['seatCount'])){
                                            $seatCountVariable = $_SESSION['seatCount'];
                                        }
                                        $_SESSION['totalPrice'] = ($_SESSION["distanceCalculation"] * $_SESSION["perKmCost"]) * $seatCountVariable;
                                        echo "<p class='inputName'>Per kilometer price : ". $_SESSION["perKmCost"] ."Tk</p>
                                        <p  class='inputName'>Total Distance : ".$_SESSION["distanceCalculation"]." kilometer</p>
                                        <p  class='inputName'>Total Seat : ".$seatCountVariable."</p>
                                        <p  class='inputName'>Total Price : (".$_SESSION["distanceCalculation"]." * ".$_SESSION["perKmCost"].") * ".$seatCountVariable." => 
                                        ".$_SESSION['totalPrice'] ."
                                        Taka</p>
                                        <p  class='inputName'> Passenger Id :".$_SESSION['passenger_id']." </p>
                                        <p  class='inputName'> Passenger Name :".$_SESSION['fullName']." </p>
                                        ";
                                        // .$_SESSION["startAreaIndex"]
                                        // .$_SESSION["sqlForCheck"]
                                        ?>
                                    
                                    
                                    

                                        
                                    <button class='submitBtn'> <a class='submitBtnAnchor' href="../confirmBooking/confirmBooking.php">Confirm Booking</a> </button>
                                    <button class='cancelBtn'>Cancel </button> 
                                    <!-- Cancel button e press korle .. ... total seat er session .. khali kore dite hobe ..   -->
                                </fieldset>
                            </td>

                        </tr>



                        <!-- </form> -->
                    </table>
                </fieldset>
            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->

    <script src="./ticketDetails.js"></script>
</body>

</html>

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
	}
?>