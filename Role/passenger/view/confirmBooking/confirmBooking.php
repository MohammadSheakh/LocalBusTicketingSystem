<?php
session_start();
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./confirmBooking.css"/>
</head>
<body>
<?php
    // session_start();
        include '../system/navbar/mainNavbar.php';
    ?>
<h2  align="center" class='inputName'>Ticket Booking Details</h2>
    <table align="center">
        
        <tr>
            <td class='inputName'>
            User Name   
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'>
                <?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            User Phone Number 
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'>
                <?php 
                    echo $_SESSION["phoneNo"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            User Email 
            </td><td class='inputName'>:</td>
            <td class='inputName'>
                <?php 
                    echo $_SESSION["email"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            User Status 
            </td><td class='inputName'>:</td>
            <td class='inputName'> 
            <?php 
                    echo $_SESSION["type"]   ?? '';
                ?> 
            </td>
        </tr>

        <!-- // payment successfull houar pore serial number provide korbo ...  -->

        <!-- <tr>
            <td class='inputName'>
            Ticket Sl. Number 
            </td><td class='inputName'>:</td>
            <td>
            <?php 
                    echo $_SESSION["ticketSerial"]   ?? '';
                ?> 
            </td>
        </tr> -->
        <tr>
            <td class='inputName'>
            From 
            </td><td class='inputName'>:</td>
            <td class='inputName'>
            <?php 
                    echo $_SESSION["startArea"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            To 
            </td><td class='inputName'>:</td>
            <td class='inputName'>
            <?php 
                    echo $_SESSION["destinationArea"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            Bus Company Name 
            </td><td class='inputName'>:</td>
            <td class='inputName'>
            <?php 
                    $_SESSION["companyName"]  ;
                ?> 
            </td>
        </tr>
        <tr>
            <td class='inputName'>
            Root No. 
            </td><td class='inputName'>:</td>
            <td class='inputName'><?php 
                    echo $_SESSION["routeId"]   ?? '';
                ?> </td>
        </tr>
        <tr class='inputName'>
            <td class='inputName'>
            Vehicle Serial No. 

            </td><td class='inputName'>:</td><td class='inputName'><?php 
                ///////////////////////////////////////// eita database theke niye dekhate hobe .. 
                    echo $_SESSION["busId"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
            Date And Time 
            </td><td class='inputName'>:</td><td class='inputName'><?php 
                    echo $_SESSION["departureTime"]   ?? ''; // $_SESSION["arrivalTime"]
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
                Seat No. 
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'><?php 
                    // if(isset($_SESSION["seatNoVarA1"])){
                        
                    // }
                    echo $_SESSION["seatNoVarA1"]   ?? '';
                    echo $_SESSION["seatNoVarA2"]   ?? '';
                    echo $_SESSION["seatNoVarA3"]   ?? '';
                    echo $_SESSION["seatNoVarA4"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
                Total Seat 
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'><?php 
                    if(isset($_SESSION['seatCount'])){
                        echo $_SESSION['seatCount']." seat"   ?? '';
                    }
                    
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
                Per kilometer price  
            </td><td class='inputName'>:</td><td class='inputName'><?php 
                    echo $_SESSION["perKmCost"]." Tk"   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
                Total Distance   
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'><?php 
                    echo $_SESSION["distanceCalculation"]." Km"    ?? '';
                ?> </td>
        </tr>
        <tr>
            <td class='inputName'>
                Total Price 
            </td>
            <td class='inputName'>:</td>
            <td class='inputName'><?php 
                    echo $_SESSION['totalPrice']." Tk"  ?? '';
                ?> </td>
        </tr>
        
    </table>

    <div align="center">
        <h4>To Confirm Booking And Get Ticket Serial No. Please Payment First By Online Payment System</h4>
        <br>
        <button class='cancelBtn'> <a  class='cancelBtn' href="../ticketBooking/ticketBooking.php">Go Back</a> </button>
        <!-- <button> <a href="../confirmBooking/confirmBooking.php">Make payment</a> </button> -->
        <!-- <button> <a href="../confirmBooking/EditBookingInformation.php">Edit Information</a> </button> -->
    </div>
</body>
</html>

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>