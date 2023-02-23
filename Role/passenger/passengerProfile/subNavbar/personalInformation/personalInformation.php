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
                        <td></td>
                        <td>
                            <fieldset>
                                <legend>Passenger Details</legend>

                                <table>
                                    <tr>
                                        <td>
                                            Name
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            Mohammad Sheakh
                                        </td>
                                        <td></td>
                                        <td><button>Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Phone Number
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            01518419801
                                        </td>
                                        <td></td>
                                        <td><button>Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            Rampura, Dhaka, Bangladesh
                                        </td>
                                        <td></td>
                                        <td><button>Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            xyz@gmail.com
                                        </td>
                                        <td></td>
                                        <td><button>Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td></td>
                                        <td><button>Edit</button></td>
                                    </tr>
                                </table>
                            </fieldset>
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