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
    // session_start();
        include '../../system/navbar/mainNavbar.php';
    ?>

    <table align="center">
        <tr>
            <td> <h2>Ticket Booking Details</h2> <br> </td>
        </tr>
        <tr>
            <td>
            User Name   
            </td>
            <td>:</td>
            <td>
                <?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            User Phone Number 
            </td>
            <td>:</td>
            <td>
                <?php 
                    echo $_SESSION["phoneNo"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            User Email 
            </td><td>:</td>
            <td>
                <?php 
                    echo $_SESSION["email"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            User Status 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["type"]   ?? '';
                ?> 
            </td>
        </tr>

        <tr>
            <td>
            Ticket Sl. Number 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["ticketSerial"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            From 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["startArea"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            To 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["destinationArea"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            Bus Company Name 
            </td><td>:</td>
            <td>
            <?php 
                    $_SESSION["companyName"]  ;
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            Root No. 
            </td><td>:</td>
            <td><?php 
                    echo $_SESSION["routeId"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
            Vehicle Serial No. 

            </td><td>:</td><td><?php 
                ///////////////////////////////////////// eita database theke niye dekhate hobe .. 
                    echo $_SESSION["busId"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
            Date And Time 
            </td><td>:</td><td><?php 
                    echo $_SESSION["departureTime"]   ?? ''; // $_SESSION["arrivalTime"]
                ?> </td>
        </tr>
        <tr>
            <td>
                Seat No. 
            </td>
            <td>:</td>
            <td><?php 
                    // if(isset($_SESSION["seatNoVarA1"])){
                        
                    // }
                    echo $_SESSION["seatNoVarA1"]   ?? '';
                    echo $_SESSION["seatNoVarA2"]   ?? '';
                    echo $_SESSION["seatNoVarA3"]   ?? '';
                    echo $_SESSION["seatNoVarA4"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Seat 
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION['seatCount']." seat"   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Per kilometer price  
            </td><td>:</td><td><?php 
                    echo $_SESSION["perKmCost"]." Tk"   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Distance   
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION["distanceCalculation"]." Km"    ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Price 
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION['totalPrice']." Tk"  ?? '';
                ?> </td>
        </tr>
        
    </table>

    <div align="center">
        <h4>To Confirm Booking And Get Ticket Serial No. Please Payment First By Online Payment System</h4>
        <br>
        <button> <a href="../ticketBooking/ticketBooking.php">Go Back</a> </button>
        <button> <a href="../confirmBooking/confirmBooking.php">Make payment</a> </button>
        <button> <a href="../confirmBooking/EditBookingInformation.php">Edit Information</a> </button>
    </div>
</body>
</html>

<?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>