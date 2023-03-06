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

    include '../../database/dbConnect.php';

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            // general information
            $fullName = sanitize($_POST['fullName']);
            $email = sanitize($_POST['email']);
            $password = sanitize($_POST['password']);
            $gender = sanitize($_POST['gender']);
            $type = sanitize($_POST['type']);

            
            // $mothersName = sanitize($_POST['mothersName']);
            // $dateOfBirth = sanitize($_POST['dateOfBirth']);
            // $bloodGroup = sanitize($_POST['bloodGroup']);
            // $contractInfo = sanitize($_POST['contractInfo']);
            // $website = sanitize($_POST['website']);
            // $address = sanitize($_POST['address']);
            // $userName = sanitize($_POST['userName']);
            

            // if input form is empty then show some specific error 
            if(empty($fullName)){
                echo "please fill up the fullName form";
                $flag = false;
            }
            if(empty($email)){
                echo "please fill up the email form";
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "This is not correct email format ";
                    $flag = false;
                }
            }
            if(empty($password)){
                echo "please fill up the password form";
                $flag = false;
            }
            if(empty($gender)){
                echo "please fill up the gender form";
                $flag = false;
            }
            if(empty($type)){
                echo "please fill up the type form";
                $flag = false;
            }
        
            if($flag === true){
                // database e data create korbo ........................... 
                // write insert query
                $sql = "insert into `local_bus_ticketing_system`.`passenger`(fullName, email, password, gender, type) values('$fullName', '$email','$password','$gender','$type')";
                    
                // to execute this query 
                $result = mysqli_query($con, $sql); // connection and query variable 
                // this method will allow us to execute this query
                if($result){
                    // if query has execute successfully 
                    // echo "Data inserted successfully" ; // show me this 
                    // echo er poriborte ami onno ekta page e redirect korte chai .. 
                    header('location:../login/login.php');
                }else{
                    // error 
                    die(mysqli_error($con));
                }
            }
        }else{
            echo "404 Error !";
        }

        function sanitize($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>