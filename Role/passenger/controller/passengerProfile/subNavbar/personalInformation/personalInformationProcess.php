<?php
     session_start();
    // include '../../../database/dbConnect.php';
    require '../../../../model/passengerProfile/subNavbar/personalInformation/passenger.php';
    
    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// fullName
    $fullName_mode = '';
    if(isset($_GET['fullName_mode'])){
        $fullName_mode = $_GET['fullName_mode'];
    }
    //$fullName_mode = $_GET['fullName_mode'];
    
    // if($fullName_mode){
    //     $fullName_mode = $_GET['fullName_mode'];
    //     preDbOperation("fullName_mode", $_GET['fullName_mode']);
    // }
    
    $_SESSION["fullName_mode"] = $fullName_mode;

    if($_SESSION["fullName_mode"] == "edit"){
        
        header('location: ../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["fullName_mode"] == "save"){
        dbOperation($_SESSION["field_name"]);
    }
    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// email
    
    $email_mode = '';
    if(isset($_GET['email_mode'])){
        $email_mode = $_GET['email_mode'];
    }
    
    //$email_mode = $_GET['email_mode'];
    
    $_SESSION["email_mode"] = $email_mode;

    if($_SESSION["email_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["email_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// password
    
    $password_mode = '';
    if(isset($_GET['password_mode'])){
        $password_mode = $_GET['password_mode'];
    }
    
    //$password_mode = $_GET['password_mode'];
    $_SESSION["password_mode"] = $password_mode;

    if($_SESSION["password_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["password_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// fatherName
    $fatherName_mode = '';
    if(isset($_GET['fatherName_mode'])){
        $fatherName_mode = $_GET['fatherName_mode'];
    }

    //$fatherName_mode = $_GET['fatherName_mode'];
    $_SESSION["fatherName_mode"] = $fatherName_mode;

    if($_SESSION["fatherName_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["fatherName_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// dateOfBirth
    $dateOfBirth_mode = '';
    if(isset($_GET['dateOfBirth_mode'])){
        $dateOfBirth_mode = $_GET['dateOfBirth_mode'];
    }

    //$dateOfBirth_mode = $_GET['dateOfBirth_mode'];
    $_SESSION["dateOfBirth_mode"] = $dateOfBirth_mode;

    if($_SESSION["dateOfBirth_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["dateOfBirth_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// phone/mobile

    $phoneNo_mode = '';
    if(isset($_GET['phoneNo_mode'])){
        $phoneNo_mode = $_GET['phoneNo_mode'];
    }

    //$passengerType_mode = $_GET['passengerType_mode'];
    $_SESSION["phoneNo_mode"] = $phoneNo_mode;

    if($_SESSION["phoneNo_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["phoneNo_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// type

    $type_mode = '';
    if(isset($_GET['type_mode'])){
        $type_mode = $_GET['type_mode'];
    }

    //$passengerType_mode = $_GET['passengerType_mode'];
    $_SESSION["type_mode"] = $type_mode;

    if($_SESSION["type_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }

    if ($_SESSION["type_mode"] == "save"){
        // ekhane db operation korte hobe .. 
        dbOperation($_SESSION["field_name"]);
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// type

    $profilePicture_mode = '';
    if(isset($_GET['profilePicture_mode'])){
        $profilePicture_mode = $_GET['profilePicture_mode'];
    }

    //$passengerType_mode = $_GET['passengerType_mode'];
    $_SESSION["profilePicture_mode"] = $profilePicture_mode;

    if($_SESSION["profilePicture_mode"] == "edit"){
        header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
    }
    
    if ($_SESSION["profilePicture_mode"] == "save"){
        // ekhane db operation korte hobe ..
        
        //dbOperation($_SESSION["field_name"]);
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            $fieldName = "profilePicture";
            $fieldNameValue = $_POST["profilePicture"];
            $file = $_FILES['profilePicture']['tmp_name'];
            $imgContent = addslashes(file_get_contents($file));
            // $image_temp_location = $file['tmp_name'];
            // $image_data = file_get_contents($image_temp_location);

             $fieldNameValue = $imgContent;

            if(empty($fieldNameValue)){
                echo "please select a image in ".$fieldName." form";
                $flag = false;
            }
            if($flag === true){
                $flag = updatePersonalInformation($fieldName, $fieldNameValue);
                if($flag === true){
                    $_SESSION[$fieldName] = $fieldNameValue;
                    // echo $fieldName;
                    // echo $fieldNameValue;
                    header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                }else{
                    //die(mysqli_error($con));
                    // 😀 ashole ekhaneo session e error er message save kore front end e dekhabo 
                }
            }
        }
    }

    //////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////// Done ///////////////////////

    function preDbOperation($modeName, $mode){

        $_SESSION[$modeName] = $mode;
        if($_SESSION[$mode] == "edit"){
            echo $_SESSION[$mode];
            header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
        }
        if($_SESSION[$mode] == "save")
        {
            // ekhane db operation korte hobe .. 
            dbOperation($_SESSION["field_name"]);
        }
    }

    /////////////////////////////////////////////////////////////////
    function dbOperation($fieldName){
        // include '../../../database/dbConnect.php';
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            $fieldNameValue = sanitize($_POST[$fieldName]);
            if(empty($fieldNameValue)){
                echo "please fill up the ".$fieldName." form";
                $flag = false;
            }
            if($flag === true){
                $flag = updateImageInPersonalInformation($fieldName, $fieldNameValue);
                if($flag === true){
                    $_SESSION[$fieldName] = $fieldNameValue;
                    // echo $fieldName;
                    // echo $fieldNameValue;
                    header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                }else{
                    header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                    //die(mysqli_error($con));
                    // 😀 ashole ekhaneo session e error er message save kore front end e dekhabo 
                }
                // $sql = "update `local_bus_ticketing_system`.`passenger` set $fieldName='$fieldNameValue' where passenger_id=".$_SESSION['passenger_id'];
                // $result = mysqli_query($con, $sql);
                // if($result){
                //     $_SESSION[$fieldName] = $fieldNameValue;
                //     header('location:../../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                // }else{
                //     die(mysqli_error($con));
                // }
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