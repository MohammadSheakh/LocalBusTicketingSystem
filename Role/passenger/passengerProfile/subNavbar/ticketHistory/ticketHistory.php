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
        include '../../../../system/navbar/mainNavbar.php';
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table align="center">
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

                    </table>
                </fieldset>
                <!-- ----------------- Sub Navbar ----------------------- starts here -->
                <table align="center">

                    <tr>
                        <td></td>
                        <td>
                            <table align="center">
                                <tr>

                                    <td>
                                        <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                    </td>
                                    <td>
                                        <button>Ticket History</button>
                                        <button><a href="../personalInformation/personalInformation.html">Personal
                                                Information</a></button>
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
                        <td></td>
                        <td>
                            <table border="1">
                                <tr>
                                    <th>Sl. </th>
                                    <th>Ticket Id. </th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Bus Company</th>
                                    <th>Bus Serial No.</th>
                                    <th>Seat No.</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Paid Status</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1. </td>
                                    <td>264256 </td>
                                    <td>Rampura</td>
                                    <td>Badda</td>
                                    <td>Raida</td>
                                    <td>Dhk-Metro-Ga 33-2323-64</td>
                                    <td>A1, A2, A3</td>
                                    <td>3:34pm</td>
                                    <td>2/23/2023</td>
                                    <td>Paid</td>
                                    <td>
                                        <button>Book Now</button>
                                        <a href="../ticketDetails/ticketDetails.html">
                                            <button>Details</button>
                                        </a>

                                    </td>
                                </tr>

                                <tr>
                                    <td>1. </td>
                                    <td>264256 </td>
                                    <td>Rampura</td>
                                    <td>Badda</td>
                                    <td>Raida</td>
                                    <td>Dhk-Metro-Ga 33-2323-64</td>
                                    <td>A4, A1, A3</td>
                                    <td>3:34pm</td>
                                    <td>2/23/2023</td>
                                    <td>Paid</td>
                                    <td>
                                        <button>Book Now</button>
                                        <a href="../ticketDetails/ticketDetails.html">
                                            <button>Details</button>
                                        </a>

                                    </td>
                                </tr>

                            </table>
                        </td>
                        <td></td>
                    </tr>

                    <!-- ------------------Ticket History Ends Here --------------------- -->



                    <!-- </form> -->
                </table>

            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->


</body>

</html>