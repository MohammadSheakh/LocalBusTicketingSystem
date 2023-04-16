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
        //include '../../database/dbConnect.php';
        require '../../../model/authentication/passenger.php';
        $flag = true;
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            // $flag = true;
            
            
            // Account Information 
            $email = sanitize($_POST['email']);
            $password = sanitize($_POST['password']);
            
            //$rememberMe = $_POST['rememberMe'];

            if(isset($_POST['rememberMe'])){
                setcookie('status', 'true', time()+86400, '/');
            }

            // if input form is empty then show some specific error 
            
            if(empty($email)){
                $_SESSION['emailErrorMsg'] = "please fill up the email form. php validation";
                //echo "please fill up the email form";
                echo "emptyEmailField";
                // echo json_encode($rows); //////////////////////////////////////////////////////// for js
                    
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $_SESSION['emailErrorMsg'] = "This is not correct email format";
                    echo "This is not correct email format ";
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
                    $_SESSION['passErrorMsg'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character. php validation';
                    $flag = false;
                    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character. php validation';
                }else{
                    //$_SESSION['passErrorMsg'] ='Login credentials is wrong.';
                    //echo "flag from else";
                    //$flag = false; /////////////////////////// 
                }
            }




            if($flag){

                // user valid kina .. ekhane check korte hobe 
                $flag = checkUserForLogin($email, $password);
                
                if($flag === true){
                    //echo "Flag ->>>>>>>>>".$flag;
                    // er pore amra profile page e redirect kore dibo ..
                    $passenger_All_Details = $_SESSION['passenger_All_Details'];
                    // Loop through the array and display the data
                    
                    $passenger_id = '';
                    $fullName = ''; 
                    $email = ''; 
                    $password = '';
                    $gender = '';
                    $type = '';
                    //var_dump($passenger_All_Details) ;
                    foreach ($passenger_All_Details as $row) {
                        

                        // may be age normal variable e save kore then session e add korte hobe 

                        $passenger_id = $row['passenger_id'];
                        $fullName = $row['fullName']; // row theke data gula access kortesi 
                        $email = $row['email']; // 'email' // eita hocche amar table er column field  
                        $password = $row['password'];
                        $gender = $row['gender'];
                        $type = $row['type'];

                    }


                    $_SESSION["passenger_id"]= $passenger_id;
                    $_SESSION["fullName"]= $fullName; // row theke data gula access kortesi 
                    $_SESSION["email"]= $email; // 'email' // eita hocche amar table er column field  
                    $_SESSION["password"]= $password;
                    $_SESSION["gender"]= $gender;
                    $_SESSION["type"]=  $type;

                    $_SESSION['status'] = true;
                    setcookie('status', 'true', time()+3600, '/'); // 60 * 60 => 1 hour .. 
                    $_SESSION['emailErrorMsg'] = '';
                    $_SESSION['passErrorMsg'] = '';

                    
                    echo "success"; // ei echo ta ki navigation er age korbo naki pore korbo .. 
                    
                    // navigation ta rakhbo naki delete kore dibo ..  
                    header('location:../../../view/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                    
                }else{
                    // login page e redirect korbo .. error message shoho 
                    
                    header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
        
                }

                // $sql = "Select * from `local_bus_ticketing_system`.`passenger` WHERE  email='$email' AND password='$password' ";
                

            }else{
                // echo "flag : $flag " ;
                // echo "whats up";
                header('location:/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
                    
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