<?php
// session_start();
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
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/home/home.php">Home</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/ourServices/ourServices.php">Our Service</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/aboutUs/aboutUs.php">About Us</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/system/contractUs/contractUs.php">Contract Us</a> </button>
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
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php'>Login</a> </button>
                <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/registration/registration.php'>Sign up</a> </button>
                    ";
                }
                if($flag){
                    echo "
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/passengerProfile/subNavbar/personalInformation/personalInformation.php'>Profile</a> </button>
            
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/logout/logoutProcess.php'>Logout</a> </button>
            
                    ";
                }
                ?>
                
                
                </td>
        </tr>
    </table>
    
</div>