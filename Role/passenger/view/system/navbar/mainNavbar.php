<?php
// session_start();
$flag = false;
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./mainNavbar.css"/>
    <style>
        .LogoName{
        color : white;
        }
        .navLink{
            color : white;
            text-decoration : none;
        }
        .navBtn{
            /* border:none; */
            /* border: 1px solid #4988; */
            border: 2px solid #4988;
            border-radius: 7px;
            padding : 3px;
        }
        .navLink:hover{
            
            border-radius: 7px;
            padding : 3px; 
            background-color : #4985;
        }
        .navBtn:hover{
            border:none;
            border-radius: 7px;
            padding : 3px;
            /* background-color : #4985; */
        }
    </style>
</head>
<body>
<div >
    
    <table align="center">
        <tr>
            <td>
                <h5 class="LogoName">Bus Ticketing System </h5>
            </td>
            <td>
                <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
            </td>
            <td>
                <button class="navBtn"> <a class="navLink" href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/home/home.php">Home</a> </button>
                <button class="navBtn"> <a class="navLink" href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/ourServices/ourServices.php">Our Service</a> </button>
                <button class="navBtn"> <a class="navLink" href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/aboutUs/aboutUs.php">About Us</a> </button>
                <button class="navBtn"> <a class="navLink" href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/contractUs/contractUs.php">Contract Us</a> </button>
                <?php 

                    $fullNameVariable = '';
                    if(isset($_SESSION["fullName"])){
                        $fullNameVariable = $_SESSION["fullName"];
                    }
                    if($fullNameVariable){
                        $flag = true;
                    }
                ?>
                <?php
                if($flag == false){
                    echo "
                    <button class='navBtn'> <a class='navLink' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php'>Login</a> </button>
                <button class='navBtn'> <a class='navLink' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/registration/registration.php'>Sign up</a> </button>
                    ";
                }
                if($flag){
                    echo "
                    <button class='navBtn'> <a class='navLink' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/passengerProfile/subNavbar/personalInformation/personalInformation.php'>Profile</a> </button>
            
                    <button class='navBtn'> <a class='navLink' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/authentication/logout/logoutProcess.php'>Logout</a> </button>
            
                    ";
                }
                ?>
                
                
                </td>
        </tr>
    </table>
    
</div>
<body>
