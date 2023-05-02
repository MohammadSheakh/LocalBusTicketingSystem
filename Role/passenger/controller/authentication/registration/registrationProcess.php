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
    // include '../../database/dbConnect.php';
    
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            // general information
            $fullName = sanitize($_POST['fullName']);
            $email = sanitize($_POST['email']);
            $password = sanitize($_POST['password']);
            $gender = sanitize($_POST['gender']);
            $type = sanitize($_POST['type']);

            
            
            // if input form is empty then show some specific error 
            if(empty($fullName)){
                //echo "please fill up the fullName form";

                
                $_SESSION['fullNameErrorMsg'] = "please fill up the fullName form";

                $flag = false;
            }
            if(empty($email)){
                //echo "please fill up the email form";
                
                $_SESSION['emailErrorMsg'] = "please fill up the email form";
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    //echo "This is not correct email format ";

                
                $_SESSION['emailErrorMsg'] = "This is not correct email format";
                    $flag = false;
                }
            }
            // if(empty($password)){
            //     //echo "please fill up the password form";
            //     $_SESSION['passwordErrorMsg'] = "please fill up the password form";
            //     $flag = false;
            // }
            if($password){
                // Validate password strength
                // Validate password strength
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                    $_SESSION['passErrorMsg'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                    $flag = false;
                    //echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }else{
                    $_SESSION['passErrorMsg'] ='Strong password.';
                    $flag = true;
                }
            }

            if(empty($gender)){
               // echo "please fill up the gender form";

                
                $_SESSION['genderErrorMsg'] = "please fill up the gender form";

                $flag = false;
            }
            if(empty($type)){
                echo "please fill up the type form";

                
                $_SESSION['typeErrorMsg'] = "please fill up the type form";

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

                    // session er value gula clear korte hobe .. 
                    $_SESSION['fullNameErrorMsg'] = "";
                    $_SESSION['typeErrorMsg'] = "";
                    $_SESSION['genderErrorMsg'] = "";
                    $_SESSION['passwordErrorMsg']  ="";
                    $_SESSION['emailErrorMsg'] = "";

                    echo "process page1 ";
                      // 😀😀
                     // header('location:../login/login.php');
                }else{
                    echo "process page 2";
                    // error 
                    die(mysqli_error($con));
                }
            }else{
                echo "process page3 ";
                // 😀😀
                // header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/registration/registration.php');
                
            }
        }else{
            echo "process page4 ";
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