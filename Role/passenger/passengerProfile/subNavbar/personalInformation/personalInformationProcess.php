<?php
    session_start();
    include '../../../database/dbConnect.php';

    $fullName_mode = $_GET['fullName_mode'];
    //echo $fullName_mode;
    $_SESSION["fullName_mode"] = $fullName_mode;

    if($_SESSION["fullName_mode"] == "edit"){
        header('location:./personalInformation.php');
        
    }
    if ($_SESSION["fullName_mode"] == "save"){
        // ekhane db operation korte hobe .. 

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            $fullName = sanitize($_POST['fullName']);
            if(empty($fullName)){
                echo "please fill up the fullName form";
                $flag = false;
            }
            if($flag === true){
                $sql = "update `local_bus_ticketing_system`.`passenger` set fullName='$fullName' where passenger_id=".$_SESSION['passenger_id'];
                $result = mysqli_query($con, $sql);
                if($result){
                    $_SESSION['fullName'] = $fullName;
                    header('location:./personalInformation.php');
                }else{
                    die(mysqli_error($con));
                }
            }
        }

        //header('location:./personalInformation.php');
        
    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>