<!-- http://localhost/Local%20Bus%20Ticketing%20System/Role/passenger/ticketBooking/ticketBooking.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- for main navbar  -->
    <?php
    session_start();
    include '../database/dbConnect.php';
        include '../../system/navbar/mainNavbar.php';
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table>
                        <legend>Ticket / Trip Details Page</legend>

                        <div>
                            <h3>
                            <?php 
                                        echo $_SESSION["startArea"] ?? " "; 
                                        ?>
                                
                            to 
                            <?php 
                                        echo $_SESSION["destinationArea"] ?? " "; //////// 😀
                                        ?>
                                        
                                    </h3>
                        </div>
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <img height="80px" src="../images/ticketDetailsPage/busPicture.png" alt="">

                                    </td>
                                    <td>
                                        <h5><?php 
                                        echo $_SESSION["companyName"]." Paribahan" ?? " ";
                                        ?>
                                            </h5>
                                            <h5>Root No. 
                                        <?php 
                                        echo $_SESSION["routeId"] ?? " ";
                                        ?>
                                        </h5>
                                        
                                    </td>

                                    <td>
                                        <h5>Arrival Time : <?php 
                                        echo $_SESSION["arrivalTime"] ?? " ";
                                        ?></h5>
                                        <h5>Leave 
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
                                <h3>Available Seats</h3>
                                <!-- ekhane amra table er moddhe arekta table dekhabo 
                                        -->


                                <table border="1">
                                    <tr>
                                        <td>Gate</td>
                                        <td>&nbsp;</td>

                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td><img width="20px" src="../images/ticketDetailsPage/steering.png" alt="">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><button>A4</button> </td>
                                        <td><button>A3</button> </td>
                                        <td> </td>
                                        <td><button>A2</button> </td>
                                        <td><button>A1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>B4</button> </td>
                                        <td><button>B3</button> </td>
                                        <td> </td>
                                        <td><button>B2</button> </td>
                                        <td><button>B1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>C4</button> </td>
                                        <td><button>C3</button> </td>
                                        <td> </td>
                                        <td><button>C2</button> </td>
                                        <td><button>C1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button style="">D4</button> </td>
                                        <td><button>D3</button> </td>
                                        <td> </td>
                                        <td><button>D2</button> </td>
                                        <td><button>D1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>E4</button> </td>
                                        <td><button>E3</button> </td>
                                        <td> </td>
                                        <td><button>E2</button> </td>
                                        <td><button>E1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>F5</button> </td>
                                        <td><button>F4</button> </td>

                                        <td><button>F3</button> </td>
                                        <td><button>F2</button> </td>
                                        <td><button>F1</button> </td>
                                    </tr>
                                </table>


                            </td>
                            <td>
                                <fieldset>
                                    <!-- ---------------------------------------- -->
                                    <form action="./ticketDetailsProcess.php" novalidate>
                                        <table>

                                            <?php
                                                // echo $_SESSION['busId'];
                                                $sql = "select seatNo, seatStatus from `local_bus_ticketing_system`.`ticket` where busId=".$_SESSION['busId'];
                                                $result = mysqli_query($con, $sql);
                                                if($result){
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        // echo $row['seatStatus'];
                                                        if($row['seatStatus'] === "Free"){
                                                            
                                                            echo '
                                                            <tr>
                                                            <td>
                                                                <p>Status of <button>'.$row['seatNo'].'</button></p>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                            
                                                                <input    type="radio" id="booked" name="seat_status_'.$row['seatNo'].'" value="booked">
                                                                <label for="booked">Booked</label>
                                                                <input   checked type="radio" id="free" name="seat_status_'.$row['seatNo'].'" value="free">
                                                                <label for="free">Free</label>
                                             
                                                            </td>
                                                        </tr>
                                                            ';
                                                        }
                                                        
                                                    }
                                                }
                                                else{
                                                    echo "sorry";
                                                    die(mysqli_error($con));
                                                }
                                        ?>
                                            
                                        <?php 
                                            $sql = "select perKmCost, tollCost from `local_bus_ticketing_system`.`route` where routeId=".$_SESSION['routeId'];
                                            // echo $sql;
                                            $result = mysqli_query($con, $sql);
                                            if($result){
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $_SESSION["perKmCost"] = $row['perKmCost'];
                                                    $_SESSION["tollCost"] = $row['tollCost'];
                                                }
                                            }else{
                                                echo "sorry";
                                                die(mysqli_error($con));
                                            }

                                            //$sqlForStartAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName="'.$_SESSION['startArea'].'")';
                                            $sqlForStartAreaIndex = 'select areaIndex from `local_bus_ticketing_system`.`area`where areaName="'.$_SESSION['startArea'].'" AND routeId="'.$_SESSION['routeId'].'"';
                                            $_SESSION["sqlForCheck"] = $sqlForStartAreaIndex;
                                            $result = mysqli_query($con, $sqlForStartAreaIndex);
                                            if($result){
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "-----------------".$row['areaIndex'];
                                                    $_SESSION["startAreaIndex"] = $row['areaIndex'];
                                                }
                                            }else{
                                                echo "sorry";
                                                die(mysqli_error($con));
                                            }
                                            //$sqlForDestAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName="'.$_SESSION["destinationArea"].'")';
                                            $sqlForDestAreaIndex  = 'select areaIndex from `local_bus_ticketing_system`.`area`where areaName="'.$_SESSION['destinationArea'].'" AND routeId="'.$_SESSION['routeId'].'"';
                                            $result2 = mysqli_query($con, $sqlForDestAreaIndex);
                                            if($result2){
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "------------------".$row['areaIndex'];
                                                    $_SESSION["destinationAreaIndex"] = $row['areaIndex'];
                                                }
                                            }else{
                                                echo "sorry";
                                                die(mysqli_error($con));
                                            }
                                            
                                            //////////////////////////////////////////////////////////////////////////////////////
                                            $sqlForCalculateDistance = 'select distanceFromPrevArea from `local_bus_ticketing_system`.`area` where ( areaIndex BETWEEN "'.$_SESSION["startAreaIndex"].'+1" AND "'.$_SESSION["destinationAreaIndex"].'") AND routeId='.$_SESSION['routeId'];
                                            $result3 = mysqli_query($con, $sqlForCalculateDistance);
                                            $_SESSION["distanceCalculation"] = 0;
                                            if($result3){
                                                while($row = mysqli_fetch_assoc($result3)){
                                                    //echo $row['distanceFromPrevArea'];
                                                    $_SESSION["distanceCalculation"] = $_SESSION["distanceCalculation"] + $row['distanceFromPrevArea'];
                                                }
                                            }else{
                                                echo "sorry";
                                                die(mysqli_error($con));
                                            }
                                            echo "perKmCost -> ".$_SESSION["perKmCost"]."tollCost -> ".$_SESSION["tollCost"]."startAreaIndex -> ".$_SESSION["startAreaIndex"]."destinationAreaIndex -> ".$_SESSION["destinationAreaIndex"]." distanceCalculate -> ".$_SESSION["distanceCalculation"]."";//.$_SESSION["distanceCalculation"]
                                        ?>  
                                            
                                            <!-- /**
                                                arekta jinish lagbe .. sheta hocche .. Ulon theke AftabNogor hoile ..
                                                jokhon route Id 1 .. tokhon Ulon er areaIndex lagbe and AftabNogor er 
                                                areaIndex lagbe .. then 
                                                ulon bad e baki gular distanceFromPrevArea Plus kore .. total distance 
                                                calculate kora lagbe .. 
                                            */ -->
                                            

                                            <!-- <tr>
                                                <td>
                                                    <p>Status of <button>A2</button></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" id="booked" name="seat_status" value="booked">
                                                      <label for="booked">Booked</label>
                                                      <input type="radio" id="free" name="seat_status" value="free">
                                                      <label for="free">Free</label>
                                                      <input type="radio" id="reserved" name="seat_status"
                                                        value="reserved">
                                                      <label for="reserved">Reserved</label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Status of <button>A3</button></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" id="booked" name="seat_status" value="booked">
                                                      <label for="booked">Booked</label>
                                                      <input type="radio" id="free" name="seat_status" value="free">
                                                      <label for="free">Free</label>
                                                      <input type="radio" id="reserved" name="seat_status"
                                                        value="reserved">
                                                      <label for="reserved">Reserved</label>
                                                </td>
                                            </tr> -->
                                        </table>
                                    </form>

                                    <!-- ----------------------------------------- -->
                                    <legend>Details seat plan</legend>
                                    <!-- <h5>You have selected A1, A2, A3 seat</h5> -->
                                    <?php
                                        echo "<p>Per kilometer price : ". $_SESSION["perKmCost"] ."Tk</p>
                                        <p>Total Distance : ".$_SESSION["distanceCalculation"]." kilometer</p>
                                        ".$_SESSION["startAreaIndex"].$_SESSION["sqlForCheck"];
                                        ?>
                                    
                                    <p>Total Seat : 1</p>
                                    <p>Total Distance : 5 kilometer</p>
                                    <p>Total Price : 5 * 20 => 100 Taka</p>


                                    <button> <a href="../confirmBooking/confirmBooking.php">Confirm Booking</a> </button>
                                    <button>Cancel </button>
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


</body>

</html>