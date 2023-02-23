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
                    <table>
                        <legend>Ticket / Trip Details Page</legend>

                        <!-- <div>
                            <h3>Rampura to Badda</h3>
                        </div> -->
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <img height="80px" src="../images/passengerProfile/profileImage.png" alt="">

                                    </td>
                                    <td>
                                        <h5>Mohammad Bin Ab. Jalil Sheakh</h5>
                                        <h6> <i><img src="../images/passengerProfile/phone.png" alt=""></i>01518419801
                                        </h6>

                                        <h6> <i><img src="../images/passengerProfile/home.png" alt=""></i>Lives in
                                            Rampura, Dhaka, Bangladesh
                                        </h6>
                                    </td>

                                    <!-- <td>
                                        <h5>Arrival Time : 9:25am</h5>
                                        <h5>Leave Rampura point at 9:30am</h5>

                                    </td> -->
                                </tr>
                            </table>


                        </tr>

                        <!-- ----------------- Sub Navbar ----------------------- starts here -->

                        <tr>
                            <td></td>
                            <td>
                                <table align="center">
                                    <tr>

                                        <td>
                                            <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                        </td>
                                        <td>
                                            <button><a href="./subNavbar/ticketHistory/ticketHistory.html">Ticket
                                                    History</a></button>
                                            <a href="#">Personal Information</a>
                                            <button>Postpaid System</button>
                                            <button>Review</button>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>

                        </tr>

                        <!-- ----------------- Sub Navbar ----------------------- ends here -->

                        <!-- ------------------Ticket History Starts Here --------------------- -->
                        <tr>
                            <td>
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




                        <!-- ------------------Ticket History Ends Here --------------------- -->

                    </table>
                </fieldset>
            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->


</body>

</html>