<?php 
    session_start();
    include '../database/dbConnect.php';
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $flag = true;
        if(isset($_POST['seat_status_A1'])){
            $seatStatusA1 = sanitize($_POST['seat_status_A1']);
        }
        if(isset($_POST['seat_status_A2'])){
            $seatStatusA2 = sanitize($_POST['seat_status_A2']);
        }
        if(isset($_POST['seat_status_A3'])){
            $seatStatusA3 = sanitize($_POST['seat_status_A3']);
        }
        if(isset($_POST['seat_status_A4'])){
            $seatStatusA4 = sanitize($_POST['seat_status_A4']);
        }

        if(isset($_POST['seatNo_A1'])){
            $seatNo_A1 = sanitize($_POST['seatNo_A1']);
        }
        if(isset($_POST['seatNo_A2'])){
            $seatNo_A2 = sanitize($_POST['seatNo_A2']);
        }
        if(isset($_POST['seatNo_A3'])){
            $seatNo_A3 = sanitize($_POST['seatNo_A3']);
            
        }
        if(isset($_POST['seatNo_A4'])){
            $seatNo_A4 = sanitize($_POST['seatNo_A4']);
        }
        
        echo "=========================";
        
        echo $seatNo_A3;
        echo $seatStatusA3;
        echo $_SESSION['busId'];
        
        echo "=========================";

        if($seatNo_A1 && $seatStatusA1 == "booked"){
            
            $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId=".$_SESSION['busId']." AND seatNo='".$seatNo_A1."'";
            $result = mysqli_query($con, $sqlForSeatBooking);
            if($result){
                $_SESSION['seatCount'] = $_SESSION['seatCount'] + 1;
                header('location: ./ticketDetails.php');
                
            }else{
                echo "sorry";
                die(mysqli_error($con));
            }
            
        }

        if($seatNo_A2 && $seatStatusA2 == "booked"){
            
            $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId=".$_SESSION['busId']." AND seatNo='".$seatNo_A2."'";
            $result = mysqli_query($con, $sqlForSeatBooking);
            if($result){
                $_SESSION['seatCount'] = $_SESSION['seatCount'] + 1;
                header('location: ./ticketDetails.php');
            }else{
                echo "sorry";
                die(mysqli_error($con));
            }
            
        }
        
        if($seatNo_A3 && $seatStatusA3 == "booked"){
            
            $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId=".$_SESSION['busId']." AND seatNo='".$seatNo_A3."'";
            $result = mysqli_query($con, $sqlForSeatBooking);
            if($result){
                $_SESSION['seatCount'] = $_SESSION['seatCount'] + 1;
                header('location: ./ticketDetails.php');
            }else{
                echo "sorry";
                die(mysqli_error($con));
            }
            
        }

        if($seatNo_A4 && $seatStatusA4 == "booked"){
            
            $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId=".$_SESSION['busId']." AND seatNo='".$seatNo_A4."'";
            $result = mysqli_query($con, $sqlForSeatBooking);
            if($result){
                $_SESSION['seatCount'] = $_SESSION['seatCount'] + 1;
                header('location: ./ticketDetails.php');
            }else{
                echo "sorry";
                die(mysqli_error($con));
            }
            
        }
                    
                



        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // $sql = "select seatNo, seatStatus from `local_bus_ticketing_system`.`ticket` where busId=".$_SESSION['busId'];
        // $result = mysqli_query($con, $sql);
        // if($result){
        //     while($row = mysqli_fetch_assoc($result)){
        //         if($row['seatStatus'] === "Free"){
        //             if($row['seatNo'] == $seatNo_A3 && $seatStatusA3 == "booked"){
        //                 //echo "row[seatNo]-> ".$row['seatNo'];
        //                 //echo "dollar seatNo_A3-> ".$seatNo_A3;
        //                 //echo "seatStatusA3-> ".$seatStatusA3;
        //                 $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId=".$_SESSION['busId']." AND seatNo='".$seatNo_A3."'";
        //                 // $sqlForSeatBooking = "UPDATE `local_bus_ticketing_system`.`ticket` SET seatStatus='Booked'  where busId='".$_SESSION['busId']."' AND seatNo='".$seatNo_A3."'";
        //                 $result = mysqli_query($con, $sqlForSeatBooking);
        //                 if($result){
        //                     //echo "Record updated successfully";
                            
        //                 }else{
        //                     echo "sorry";
        //                     die(mysqli_error($con));
        //                 }
                        
        //             }
                    
        //         }
        //     }
        //     header('location: ./ticketDetails.php');
        // }else{
        //     echo "sorry";
        //     die(mysqli_error($con));
        // }


        
    }
    function sanitize($data){
        $data = trim($data);
       $data = stripcslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   } 
?>