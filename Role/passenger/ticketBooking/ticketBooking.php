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
        include '../../system/navbar/mainNavbar.php';
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table align="center">

                        <legend>Ticket Booking Form</legend>
                        <form novalidate action="ticketBooking.php" method="post">

                            <tr>
                                <td> <label for="area">What area do you live in</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form-->
                                    <select name="area" id="area">
                                        <!-- area gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td> <label for="area">Select a route</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form-->
                                    <select name="area" id="area">
                                        <!-- route gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->

                                        <option value="saab">Saab</option>
                                        <option value="volvo">Volvo > Audi > Corolla > Rampura</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <button>Submit</button>
                                </td>

                            </tr>
                            <!--
                            <tr>
                                <td>Select a route</td>
                                <td>:</td>
                                <td>
            
                                <input type="text">
                                </td>
                            </tr>
                            -->
                            <tr>

                                <td>
                                    <h3>Available bus of 0047 route</h3>
                                    <!-- jeta select korbo .. shetar details dekhabe -->
                                    <button>Victor</button>
                                    <a href="#">Raida</a>
                                    <button>Akash</button>

                                </td>
                            </tr>

                            <tr>
                                <td> <label for="area">Select your destination</label> </td>
                                <td>:</td>
                                <td>
                                    <!-- input form-->
                                    <select name="area" id="area">
                                        <!-- route gula data base theke ashte hobe ... ei area gula admin save kore rakhbe .. database e -->

                                        <option value="saab">Rampura</option>
                                        <option value="volvo">Corolla </option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

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
                        </form>

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
                                            <button>Book Now</button>
                                            <a href="../ticketDetails/ticketDetails.html">
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