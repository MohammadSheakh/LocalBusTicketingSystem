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
<?php
    session_start();
    include '../database/dbConnect.php';
        include '../../system/navbar/mainNavbar.php';
        $companyName = "";
        $_SESSION["dbError"] = " " ;
        $_SESSION["route"];
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table align="center">

                        <legend>Ticket Booking Form</legend>
                        <form novalidate action="./ticketBookingProcess.php" method="post">
                            <tr>
                                
                                    <td> <label for="area">What area do you live in</label> </td>
                                    <td>:</td>
                                    <td>
                                        <!-- input form-->
                                        <?php 
                                        echo ' <select name="startAreaName" id="startAreaName" value=" '.$_SESSION["startArea"] .'">'
                                        ?>
                                       
                                            <!-- area gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->
                                            <!-- lets pull all Area Name value from database  -->
                                            <?php
                                                $sql = "select DISTINCT areaName from `local_bus_ticketing_system`.`area`";
                                                
                                                $result = mysqli_query($con, $sql);
                                                if($result){
                                                    
                                                    echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $areaName= $row['areaName'];
                                                        echo "<option value='".$areaName."'>$areaName</option>";
                                                    }
                                                    //$FinalArea = $_SESSION["startArea"];
                                                }else{
                                                    // error 
                                                    die(mysqli_error($con));
                                                }
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
                                <td> <label for="area">Select a route</label> </td>
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
                            <!-- <tr>
                                <td align="right">
                                    <button>Submit</button>
                                </td>

                            </tr> -->
                            <tr>
                                <td>
                                    <?php echo "Error::::: ".$_SESSION["dbError"] ; ?>
                                    
                                </td>
                            </tr>
                            
                            <tr>

                                <td>
                                    <?php 
                                        echo "<h3>Available bus of route [ ".$_SESSION['routeId']." ] </h3>";
                                    ?>

                                    <?php 
                                        $sql = "select companyName from `local_bus_ticketing_system`.`bus` where routeId = ".$_SESSION['routeId']." ";
                                        //$_SESSION["sql"] = $sql;
                                        $result = mysqli_query($con, $sql);
                                        if($result){
                                            $flag = false;
                                            while($row = mysqli_fetch_assoc($result)){
                                                $companyName= $row['companyName'];
                                                
                                                echo "<button>".$companyName."</button>";
                                                $flag = true;
                                            }
                                            if($flag == false){
                                                echo " <h4> No Bus Available. for this route </h4>";
                                            }
                                            echo "Not Error :::::::::".$_SESSION["sql"];
                                        }else{
                                            
                                            echo " <h1> No. Bus Available. for this route </h1>";
                                            $_SESSION["dbError"] = mysqli_error($con);
                                            //die(mysqli_error($con));
                                            echo "Error :::::::::".$_SESSION["sql"];
                                        }
                                    ?>
                                   
                                </td>
                            </tr>

                            <tr>
                                <td> <label for="area">Select your destination</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form Start------------------------------------->
                                    <?php 
                                        echo ' <select name="startAreaName" id="startAreaName" value=" '.$_SESSION["startArea"] .'">'
                                        ?>
                                       
                                            <!-- area gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->
                                            <!-- lets pull all Area Name value from database  -->
                                            <?php
                                                $sql = "select DISTINCT areaName from `local_bus_ticketing_system`.`area`";
                                                
                                                $result = mysqli_query($con, $sql);
                                                if($result){
                                                    
                                                    echo "<option value=".$_SESSION["startArea"]. ">".$_SESSION["startArea"]. "</option>";
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $areaName= $row['areaName'];
                                                        echo "<option value=".$areaName.">$areaName</option>";
                                                    }
                                                    //$FinalArea = $_SESSION["startArea"];
                                                }else{
                                                    // error 
                                                    die(mysqli_error($con));
                                                }
                                            ?>
                                            

                                            
                                            <!-- <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option> -->
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
                                    <input type="date" id="dateOfBirth" name="dateOfBirth"><br>
                                </td>
                            </tr>

                            <tr>
                                <td> <label for="area">Time</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form-->
                                    <select name="area" id="area">
                                        <!-- bus er schedule time  gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->

                                        <option value="saab">8:15 am</option>
                                        <option value="volvo">9:00 am</option>
                                        <option value="mercedes">9:10 am</option>
                                        <option value="audi">9:30 am</option>
                                    </select>

                                </td>
                            </tr>
                        
                            <tr>


                                <td>
                                    <h3>Available bus of list and seat no.</h3>
                                    <!-- ekhane amra table er moddhe arekta table dekhabo 
                                            -->


                                    <table border="1">
                                        <tr>
                                            <th>No. </th>
                                            <th>Vehicle Serial No.</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Avaiable Total Seat</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DHK METRO-GA 20-42132-1</td>

                                            <td>2 / 12/ 2022</td>
                                            <td>8:45 am</td>

                                            <td>4</td>
                                            <td>
                                                <button> <a href="../confirmBooking/confirmBooking.php">Book Now</a></button>
                                                
                                        
                                                <a href="../ticketDetails/ticketDetails.php">
                                                    <button>Details</button>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DHK METRO-GA 20-42132-1</td>

                                            <td>2 / 12/ 2022</td>
                                            <td>8:45 am</td>

                                            <td>4</td>
                                            <td>
                                                <button>Book Now</button>
                                                <button>Details</button>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                

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