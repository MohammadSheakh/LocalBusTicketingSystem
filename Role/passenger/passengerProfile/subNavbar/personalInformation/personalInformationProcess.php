<?php
    session_start();
    include '../../../database/dbConnect.php';

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// fullName

    $fullName_mode = $_GET['fullName_mode'];
    
    // if($fullName_mode){
    //     $fullName_mode = $_GET['fullName_mode'];
    //     preDbOperation("fullName_mode", $_GET['fullName_mode']);
    // }
    
    $_SESSION["fullName_mode"] = $fullName_mode;

    if($_SESSION["fullName_mode"] == "edit"){
        header('location:./personalInformation.php');
    }

    if ($_SESSION["fullName_mode"] == "save"){
        dbOperation($_SESSION["field_name"]);
    }
    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// email
    $email_mode = $_GET['email_mode'];
    // if(isset($email_mode)){
    //     $email_mode = $_GET['email_mode'];
    //     preDbOperation("email_mode", $_GET['email_mode']);
    // }
    $_SESSION["email_mode"] = $email_mode;

    if($_SESSION["email_mode"] == "edit"){
        header('location:./personalInformation.php');
    }

    if ($_SESSION["email_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// password
    $password_mode = $_GET['password_mode'];
    $_SESSION["password_mode"] = $password_mode;

    if($_SESSION["password_mode"] == "edit"){
        header('location:./personalInformation.php');
    }

    if ($_SESSION["password_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// Done ///////////////////////

    function preDbOperation($modeName, $mode){

        $_SESSION[$modeName] = $mode;
        if($_SESSION[$mode] == "edit"){
            echo $_SESSION[$mode];
            header('location:./personalInformation.php');
        }
        if($_SESSION[$mode] == "save")
        {
            // ekhane db operation korte hobe .. 
            dbOperation($_SESSION["field_name"]);
        }
    }

    /////////////////////////////////////////////////////////////////
    function dbOperation($fieldName){
        include '../../../database/dbConnect.php';
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            $fieldNameValue = sanitize($_POST[$fieldName]);
            if(empty($fieldNameValue)){
                echo "please fill up the fullName form";
                $flag = false;
            }
            if($flag === true){
                $sql = "update `local_bus_ticketing_system`.`passenger` set $fieldName='$fieldNameValue' where passenger_id=".$_SESSION['passenger_id'];
                $result = mysqli_query($con, $sql);
                if($result){
                    $_SESSION[$fieldName] = $fieldNameValue;
                    header('location:./personalInformation.php');
                }else{
                    die(mysqli_error($con));
                }
            }
        }
        // if($_SERVER['REQUEST_METHOD'] === "POST"){
        //     $flag = true;
        //     $fullName = sanitize($_POST['fullName']);
        //     if(empty($fullName)){
        //         echo "please fill up the fullName form";
        //         $flag = false;
        //     }
        //     if($flag === true){
        //         $sql = "update `local_bus_ticketing_system`.`passenger` set fullName='$fullName' where passenger_id=".$_SESSION['passenger_id'];
        //         $result = mysqli_query($con, $sql);
        //         if($result){
        //             $_SESSION['fullName'] = $fullName;
        //             header('location:./personalInformation.php');
        //         }else{
        //             die(mysqli_error($con));
        //         }
        //     }
        // }
    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>