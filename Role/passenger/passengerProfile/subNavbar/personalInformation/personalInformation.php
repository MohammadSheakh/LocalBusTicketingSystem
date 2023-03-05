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

<?php
        include '../../passengerProfile.php';
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                
                <!-- ----------------- Sub Navbar ----------------------- starts here -->
                <?php
                    include '../passengersSubNavbar.php';
                ?>

            </td>
        </tr>
        <tr>
            <td>
            <table align="center">
        <tr>
            <td>
                
                
                <fieldset>
                    <legend>Personal Information </legend>
                    <!-- ---------------------------------------- -->
                    <!-- something.php -->
                    <form action="" novalidate>
                        <table>

                            <tr>
                                <td>
                                    <p>Full Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                    Mohammad Bin Ab. Jalil Sheakh
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="fullName" id="fullName" name="fullName" value=""
                                        placeholder="Enter your full name here...  "> -->
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Email</p>
                                </td>
                                <td>:</td>
                                <td>
                                    mohammad.sheakh@gmail.com
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="email" id="email" name="email" value=""
                                        placeholder="Please enter your email...  ">
                                      -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Password</p>
                                </td>
                                <td>:</td>
                                <td>
                                    ********
                                    <span><button> <img src="../../../images/passengerProfile/eye.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    
                                    <!-- <input type="password" id="email" name="email" value=""
                                        placeholder="Please enter your email...  "> -->
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Father's Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                    Abdul Jalil Sheakh 
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="text" id="fathersName" name="fathersName"><br><br>
                                      -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Date of Birth</p>
                                </td>
                                <td>:</td>
                                <td>
                                    13/9/2000
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="date" id="dateOfBirth" name="dateOfBirth"><br> -->
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Mother's Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                    Nasrin Banu
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="text" id="mothersName" name="mothersName"><br><br>
                                      -->
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Phone/Mobile</p>
                                </td>
                                <td>:</td>
                                <td>
                                    01518419801
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="text" id="contractInfo" name="contractInfo"> -->
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Blood Group</p>
                                </td>
                                <td>:</td>
                                <td>
                                    O+
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <select name="bloodGroup" id="bloodGroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                
                </select>
                                      -->
                                </td>
                            </tr>

                            <tr>
                            <td>
                                    <p>Present Address</p>
                                </td>
                                <td>:</td>
                                <td>
                                    247, West Rampura, Dhaka - 1219
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="textarea" id="address" name="address"><br><br> -->
                                </td>
                            </tr>
                        </table>
                    </form>


                </fieldset>
            </td>
        </tr>

    </table>
            </td>
        </tr>

    </table>
    <!--ticket booking form end here-->


</body>

</html>