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
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            From 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            To 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            Bus Company Name 
            </td><td>:</td>
            <td>
            <?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            Root No. 
            </td><td>:</td>
            <td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
            Vehicle Serial No. 

            </td><td>:</td><td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
            Date And Time 
            </td><td>:</td><td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Seat No. 
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Seat 
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Per kilometer price  
            </td><td>:</td><td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Distance   
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
        <tr>
            <td>
                Total Price 
            </td>
            <td>:</td>
            <td><?php 
                    echo $_SESSION["fullName"]   ?? '';
                ?> </td>
        </tr>
    </table>

    <div align="center">
        <br>
        <button> <a href="../ticketBooking/ticketBooking.php">Go Back</a> </button>
        <button> <a href="../confirmBooking/confirmBooking.php">Make payment</a> </button>
        <button> <a href="../confirmBooking/EditBookingInformation.php">Edit Information</a> </button>
    </div>
</body>
</html>