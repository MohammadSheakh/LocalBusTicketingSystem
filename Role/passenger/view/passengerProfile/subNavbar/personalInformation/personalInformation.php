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
    <link rel="stylesheet" href="./personalInformation.css"/>
</head>

<body>
<?php
    //include_once("../../../authentication/session/session.php");
    
     session_start();
     
    //include './personalInformationProcess.php'; ///////////////// Process Page Include Done ...  
        // include '../../../database/dbConnect.php';
        include '../../../../view/system/navbar/mainNavbar.php';

        require '../../../../model/passengerProfile/notification/notification.php';
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
                <fieldset class="fieldSet">
                    <legend  class="legend">Personal Information </legend>
                    <!-- ---------------------------------------- -->
                        <table >
                            <tr >
                                <td >
                                    <p  class="inputName">Full Name</p>
                                </td>
                                <td  class="inputName">:</td>
                                <td>
                                <?php 
                                    $fullNameModeVariable = '';
                                    if(isset($_SESSION["fullName_mode"])){
                                        $fullNameModeVariable = $_SESSION["fullName_mode"];
                                    }
                                    if($fullNameModeVariable == "edit"){
                                        $_SESSION["field_name"] = "fullName";
                                        echo'
                                            <form    action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?fullName_mode=save" method="post" novalidate >
                                            <input class="textBox" type="fullName" id="fullName" name="fullName" value= " '.$_SESSION["fullName"].' " placeholder="Enter your full name here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button class="submitBtn" type="submit"><img class="submitBtn" src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo '<span class="text">'.$_SESSION["fullName"].'</span>'    ?? '';
                                        echo '&nbsp;&nbsp;<span><button class="submitBtn"><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?fullName_mode=edit"><img class="submitBtn" src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                    ?>
                                    <?php
                                        echo "</form>";
                                    ?>
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p class="inputName">Email</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                <?php 
                                $emailModeVariable = '';
                                if(isset($_SESSION["email_mode"])){
                                    $emailModeVariable = $_SESSION["email_mode"];
                                }
                                if($emailModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "email";
                                        echo'
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?email_mode=save" method="post" novalidate >
                                            <input  class="textBox"  type="email" id="email" name="email" value= " '.$_SESSION["email"].' " placeholder="Enter your email here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        echo '<span class="text">'.$_SESSION["email"].'</span>'    ?? '';
                                        // echo $_SESSION["email"]   ?? '';
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?email_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                    <p class="inputName">Password</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                <?php 
                                $passwordModeVariable = '';
                                if(isset($_SESSION["password_mode"])){
                                    $passwordModeVariable = $_SESSION["password_mode"];
                                }
                                if($passwordModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "password";
                                        echo'
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?password_mode=save" method="post" novalidate >
                                            <input class="textBox" type="password" id="password" name="password" value= "'.$_SESSION["password"].'" placeholder="Enter your Password here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["password"]   ?? '';
                                        echo '<span class="text">'.$_SESSION["password"].'</span>'    ?? '';
                                        
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?password_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                <!-- ///////////////////// -->
                                <td>
                                    <p class="inputName">Fathers Name</p>
                                </td>
                                <td class="inputName">:</td>
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
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?fatherName_mode=save" method="post" novalidate >
                                            <input class="textBox" type="text" id="fatherName" name="fatherName" value= "'.$_SESSION["fatherName"].'" placeholder="Enter your fathers name here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["fatherName"]   ?? '';
                                        echo '<span class="text">'.$_SESSION["fatherName"].'</span>'    ?? '';
                                        
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?fatherName_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="inputName">Date of Birth</p>
                                </td>
                                <td class="inputName">:</td>
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
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?dateOfBirth_mode=save" method="post" novalidate >
                                            <input class="textBox" type="date" id="dateOfBirth" name="dateOfBirth" value= "'.$_SESSION["dateOfBirth"].'" placeholder="Enter your date Of Birth here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["dateOfBirth"]   ?? '';
                                        echo '<span class="text">'.$_SESSION["dateOfBirth"].'</span>'    ?? '';
                                        
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?dateOfBirth_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>

                                <!-- //////////////////////// -->
                                <td>
                                    <p class="inputName">Phone/Mobile</p>
                                </td>
                                <td class="inputName">:</td>
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
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?phoneNo_mode=save" method="post" novalidate >
                                            <input class="textBox" type="text" id="phoneNo" name="phoneNo" value= "'.$_SESSION["phoneNo"].'" placeholder="Enter your date Of Birth here...">&nbsp;&nbsp;'
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["phoneNo"]   ?? '';
                                        echo '<span class="text">'.$_SESSION["phoneNo"].'</span>'    ?? '';
                                        
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?phoneNo_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                


                            </tr>

                            <tr>
                                <!-- //////////////////// -->
                            </tr>

                            <tr>
                                <td>
                                    <p class="inputName">Passenger Type</p>
                                </td>
                                <td class="inputName">:</td>
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
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?type_mode=save" method="post" novalidate >
                                            <input  class="inputName" type="radio" id="Working People" name="type" value= "Working People" >&nbsp;&nbsp; working people 
                                            <input  class="inputName" type="radio" id="student" name="type" value= "student" >&nbsp;&nbsp; student '
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["type"]   ?? '';
                                        echo '<span class="text">'.$_SESSION["type"].'</span>'    ?? '';
                                        
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?type_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>
                                <!-- ///////////////////////////// Image Upload Start////////// -->
                                <td>
                                    <p class="inputName">Profile Picture Upload</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                <?php 
                                $profilePictureModeVariable = '';
                                if(isset($_SESSION["profilePicture_mode"])){
                                    $profilePictureModeVariable = $_SESSION["profilePicture_mode"];
                                }
                                if(!isset($_SESSION["profilePicture"])){
                                    $_SESSION["profilePicture"] = "";
                                }

                                if($profilePictureModeVariable == "edit"){
                                    
                                        $_SESSION["field_name"] = "profilePicture";
                                        echo'
                                            <form action ="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?profilePicture_mode=save" method="post" novalidate enctype="multipart/form-data">
                                            <input class="textBox" type="file" id="profilePicture" name="profilePicture" value= "'.$_SESSION["profilePicture"].'">
                                            '
                                        ;
                                        echo '<span><button type="submit"><img src="../../../images/passengerProfile/diskette.png" alt=""></button></span>
                                        ';
                                    }else{
                                        // echo $_SESSION["profilePicture"]   ?? '';
                                        // ekhane chobi dekhate hobe picchi kore 
                                        echo '&nbsp;&nbsp;<span><button ><a href="../../../../controller/passengerProfile/subNavbar/personalInformation/personalInformationProcess.php?profilePicture_mode=edit"><img src="../../../images/passengerProfile/edit.png" alt=""></a>  </button></span>';
                                    }
                                ?>
                                <?php 
                                    echo "</form>";
                                ?>
                                </td>


                                <!-- ///////////////////////////////// -->
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