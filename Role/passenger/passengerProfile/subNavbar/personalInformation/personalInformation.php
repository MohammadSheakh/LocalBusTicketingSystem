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
        </table>
        <table align="center">
        <tr>
            <td>
            <table align="center">
        <tr>
            <td>
                
                
                <fieldset>
                    <legend>Personal Information </legend>
                    <!-- ---------------------------------------- -->
                        <table>
                            <tr>
                                <td>
                                    <p>Full Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                    if($_SESSION["fullName_mode"] == "edit"){
                                        $_SESSION["field_name"] = "fullName";
                                        echo'
                                            <form action ="./personalInformationProcess.php?fullName_mode=save" method="post" novalidate >
                                            <input type="fullName" id="fullName" name="fullName" value= " '.$_SESSION["fullName"].' " placeholder="Enter your full name here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["fullName"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?fullName_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                    ?>
                                    <?php
                                        echo "</form>";
                                    ?>
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Email</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                    if($_SESSION["email_mode"] == "edit"){
                                        $_SESSION["field_name"] = "email";
                                        echo'
                                            <form action ="./personalInformationProcess.php?email_mode=save" method="post" novalidate >
                                            <input type="email" id="email" name="email" value= " '.$_SESSION["email"].' " placeholder="Enter your email here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["email"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?email_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                
                            </tr>
                            <tr>
                            <td>
                                    <p>Password</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                    if($_SESSION["password_mode"] == "edit"){
                                        $_SESSION["field_name"] = "password";
                                        echo'
                                            <form action ="./personalInformationProcess.php?password_mode=save" method="post" novalidate >
                                            <input type="password" id="password" name="password" value= "'.$_SESSION["password"].'" placeholder="Enter your Password here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["password"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?password_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Father's Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                        echo $_SESSION["fatherName"] ?? ''
                                    ?>
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
                                <?php 
                                        echo $_SESSION["dateOfBirth"] ?? ''
                                    ?>
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
                                <?php 
                                        echo $_SESSION["motherName"] ?? ''
                                    ?>
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="text" id="mothersName" name="mothersName"><br><br>
                                      -->
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Passenger Type</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                        echo $_SESSION["type"] ?? ''
                                    ?>
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="date" id="dateOfBirth" name="dateOfBirth"><br> -->
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p>Gender</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                        echo $_SESSION["gender"] ?? ''
                                    ?>
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
                                <?php 
                                        echo $_SESSION["phoneNo"] ?? ''
                                    ?>
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
                                <?php 
                                        echo $_SESSION["bloodGroup"] ?? ''
                                    ?>
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
                                <?php
                                    echo $_SESSION["address"] ??  '<input type="textarea" id="address" name="address"><br><br>';
                                    
                                ?>
                                    
                                    
                                    <span><button> <img src="../../../images/passengerProfile/edit.png" alt=""> </button></span>
                                    <span><button> <img src="../../../images/passengerProfile/diskette.png" alt=""> </button></span>
                                    <!-- <input type="textarea" id="address" name="address"><br><br> -->
                                </td>
                                <!-- ////////////////////////// -->
                                <td>
                                    <p>Passenger ID</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <?php echo $_SESSION["passenger_id"]; ?>
                                </td>
                            </tr>
                        </table>
                    <!-- </form> -->


                </fieldset>
            </td>
        </tr>

    </table>
            </td>
            <!-- ================== Notification System Start here ============= -->
            <td>
                <?php
                    include '../../passengerNotification/passengerNotification.php';
                ?>
            </td>
            <td>

            </td>
            <!-- ================== Notification System Ends here ============= -->
        </tr>
        <tr>
            <td>
                
            </td>
            <!-- ================== Messaging System Start Here ============= -->
            <td>
            <?php
                    include '../../passengerMessaging/passengerMessaging.php';
                ?>
            </td>
            <!-- ================== Messaging System Ends Here ============= -->
        </tr>
        

    </table>
    <!--ticket booking form end here-->


</body>

</html>