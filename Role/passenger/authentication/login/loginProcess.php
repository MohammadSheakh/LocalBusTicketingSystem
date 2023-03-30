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
        include '../../database/dbConnect.php';

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            
            
            // Account Information 
            $email = sanitize($_POST['email']);
            $password = sanitize($_POST['password']);
            
            $rememberMe = $_POST['rememberMe'];

            if(isset($_POST['rememberMe'])){
                setcookie('status', 'true', time()+86400, '/');
            }

            // if input form is empty then show some specific error 
            
            if(empty($email)){
                $_SESSION['emailErrorMsg'] = "please fill up the email form";
                //echo "please fill up the email form";
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $_SESSION['emailErrorMsg'] = "This is not correct email format";
                    //echo "This is not correct email format ";
                    $flag = false;
                }
            }
            // if(empty($password)){
            //     $_SESSION['passErrorMsg'] = "please fill up the password form";
                
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
                    $_SESSION['passErrorMsg'] ='Login credentials is wrong.';
                    $flag = false; /////////////////////////// 
                }
            }




            if($flag === true){
                // Data base operation should be done here ..  
                $sql = "Select * from `local_bus_ticketing_system`.`passenger` WHERE  email='$email' AND password='$password' ";
                // $email $password
                // we want to execute the query
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row > 0){
                    //echo " we found a user ";
                    $_SESSION["passenger_id"]= $row['passenger_id'];
                    $_SESSION["fullName"]= $row['fullName']; // row theke data gula access kortesi 
                    $_SESSION["email"]= $row['email']; // 'email' // eita hocche amar table er column field  
                    $_SESSION["password"]= $row['password'];
                    $_SESSION["gender"]= $row['gender'];
                    $_SESSION["type"]= $row['type'];
                    

                    // 😀 ei data gula amra session er moddhe rekhe dibo .. jeno amra ek page theke onno page e 
                    // data gula access korte pari 

                    // ekhon passenger Profile e niye jabo 
                    // if(isset($_SESSION["passenger_id"])){
                        
                        $_SESSION['status'] = true;
                        setcookie('status', 'true', time()+3600, '/');
                        
                        header('location:../../passengerProfile/subNavbar/personalInformation/personalInformation.php');
                        
                    // }else{
                    //     echo "sorry";
                    // }
                }else{
                    // echo "problem 1";
                    header('location:/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
                    
                    
                    // echo "we don't found a user ";
                }

            }else{
                header('location:/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
                    
            }
        }else{
        //echo "404 Error !";
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