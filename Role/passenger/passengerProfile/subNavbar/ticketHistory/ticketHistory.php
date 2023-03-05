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
    <?php
        include '../../passengerProfile.php';
    ?>

    <table align="center">
        <tr>
            <td>
                
                <!-- ----------------- Sub Navbar ----------------------- starts here -->
                <table align="center">

                    <tr>
                        
                        <td>
                            <!-- Sub navbar Start here  -->
                            <?php
                                include '../passengersSubNavbar.php';
                            ?>
                            <!-- Sub navbar End here  -->
                        </td>
                        

                    </tr>
                </table>
                <table>
                    <!-- ----------------- Sub Navbar ----------------------- ends here -->
                    

                    <tr>
                        <!-- ------------------Ticket History Starts Here --------------------- -->
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
                                        <button><a href="../ticketDetails/ticketDetails.html">
                                            Details
                                        </a></button>
                                        
                                        <button><a href="../ticketDetails/ticketDetails.html">
                                            Delete
                                        </a></button>

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
                                        <button><a href="../ticketDetails/ticketDetails.html">
                                            Details
                                        </a></button>
                                        
                                        <button><a href="../ticketDetails/ticketDetails.html">
                                            Delete
                                        </a></button>
                                        
                                    </td>
                                </tr>

                            </table>
                        </td>
                        <!-- ------------------Ticket History Ends Here --------------------- -->
                        <!-- ------------------ Notification Section Starts Here --------------------- -->
                        <td>
                        <?php
                            include '../../passengerNotification/passengerNotification.php';
                        ?>
                        </td>
                        <!-- ------------------ Notification Section Ends Here --------------------- -->
                        
                    </tr>

                    



                    <!-- </form> -->
                </table>

            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->


</body>

</html>