<!-- http://localhost/Local%20Bus%20Ticketing%20System/Role/passenger/ticketBooking/ticketBooking.html -->

<?php
    if(isset($_COOKIE['status'])){
?>


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
    //include_once("../../../authentication/session/session.php");
    
    // session_start();
    //include './personalInformationProcess.php'; ///////////////// Process Page Include Done ...  
        include '../../../database/dbConnect.php';
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
                                    $fullNameModeVariable = '';
                                    if(isset($_SESSION["fullName_mode"])){
                                        $fullNameModeVariable = $_SESSION["fullName_mode"];
                                    }
                                    if($fullNameModeVariable == "edit"){
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
                                $emailModeVariable = '';
                                if(isset($_SESSION["email_mode"])){
                                    $emailModeVariable = $_SESSION["email_mode"];
                                }
                                if($emailModeVariable == "edit"){
                                    
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
                                $passwordModeVariable = '';
                                if(isset($_SESSION["password_mode"])){
                                    $passwordModeVariable = $_SESSION["password_mode"];
                                }
                                if($passwordModeVariable == "edit"){
                                    
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
                                    <p>Fathers Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                $fatherNameModeVariable = '';
                                if(isset($_SESSION["fatherName_mode"])){
                                    $fatherNameModeVariable = $_SESSION["fatherName_mode"];
                                }
                                if(!isset($_SESSION["fatherName"])){
                                    $_SESSION["fatherName"] = "";
                                }
                                
                                if($fatherNameModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "fatherName";
                                        echo'
                                            <form action ="./personalInformationProcess.php?fatherName_mode=save" method="post" novalidate >
                                            <input type="text" id="fatherName" name="fatherName" value= "'.$_SESSION["fatherName"].'" placeholder="Enter your fathers name here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["fatherName"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?fatherName_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Date of Birth</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                $dateOfBirthModeVariable = '';
                                if(isset($_SESSION["dateOfBirth_mode"])){
                                    $dateOfBirthModeVariable = $_SESSION["dateOfBirth_mode"];
                                }
                                if(!isset($_SESSION["dateOfBirth"])){
                                    $_SESSION["dateOfBirth"] = "";
                                }
                                
                                if($dateOfBirthModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "dateOfBirth";
                                        echo'
                                            <form action ="./personalInformationProcess.php?dateOfBirth_mode=save" method="post" novalidate >
                                            <input type="date" id="dateOfBirth" name="dateOfBirth" value= "'.$_SESSION["dateOfBirth"].'" placeholder="Enter your date Of Birth here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["dateOfBirth"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?dateOfBirth_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>

                                <!-- //////////////////////// -->
                                <td>
                                    <p>Phone/Mobile</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                $phoneNoModeVariable = '';
                                if(isset($_SESSION["phoneNo_mode"])){
                                    $phoneNoModeVariable = $_SESSION["phoneNo_mode"];
                                }
                                if(!isset($_SESSION["phoneNo"])){
                                    $_SESSION["phoneNo"] = "";
                                }
                                
                                if($phoneNoModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "phoneNo";
                                        echo'
                                            <form action ="./personalInformationProcess.php?phoneNo_mode=save" method="post" novalidate >
                                            <input type="text" id="phoneNo" name="phoneNo" value= "'.$_SESSION["phoneNo"].'" placeholder="Enter your date Of Birth here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["phoneNo"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?phoneNo_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                


                            </tr>

                            <tr>
                                ////////////////////
                            </tr>

                            <tr>
                                <td>
                                    <p>Passenger Type</p>
                                </td>
                                <td>:</td>
                                <td>
                                <?php 
                                $typeModeVariable = '';
                                if(isset($_SESSION["type_mode"])){
                                    $typeModeVariable = $_SESSION["type_mode"];
                                }
                                if(!isset($_SESSION["type"])){
                                    $_SESSION["type"] = "";
                                }

                                if($typeModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "type";
                                        echo'
                                            <form action ="./personalInformationProcess.php?type_mode=save" method="post" novalidate >
                                            <input type="radio" id="Working People" name="type" value= "Working People" >&nbsp;&nbsp; working people 
                                            <input type="radio" id="student" name="type" value= "student" >&nbsp;&nbsp; student '
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo $_SESSION["type"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="./personalInformationProcess.php?type_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
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

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>