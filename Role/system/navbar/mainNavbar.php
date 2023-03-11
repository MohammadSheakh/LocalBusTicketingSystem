<?php
session_start();
$flag = false;
?>
<div>
    
    <table align="center">
        <tr>
            <td>
                <h5>Bus Ticketing System </h5>
            </td>
            <td>
                <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
            </td>
            <td>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/home/home.php">Home</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/ourServices/ourServices.php">Our Service</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/aboutUs/aboutUs.php">About Us</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/contractUs/contractUs.php">Contract Us</a> </button>
                <?php 
                    if($_SESSION["fullName"]){
                        $flag = true;
                    }
                ?>
                <?php
                if($flag == false){
                    echo "
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php'>Login</a> </button>
                <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/registration/registration.php'>Sign up</a> </button>
                    ";
                }
                if($flag){
                    echo "
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php'>Profile</a> </button>
            
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/logout/logoutProcess.php'>Logout</a> </button>
            
                    ";
                }
                ?>
                
                
                </td>
        </tr>
    </table>
    
</div>