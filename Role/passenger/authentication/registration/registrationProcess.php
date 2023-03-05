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
                echo "please fill up the firstName form";
                $flag = false;
            }
            if(empty($email)){
                echo "please fill up the lastName form";
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "This is not correct email format ";
                    $flag = false;
                }
            }
            if(empty($password)){
                echo "please fill up the fathersName form";
                $flag = false;
            }
            if(empty($gender)){
                echo "please fill up the mothersName form";
                $flag = false;
            }
            if(empty($type)){
                echo "please fill up the gender form";
                $flag = false;
            }
        
            if($flag === true){
                // database e data create korbo ........................... 
                echo $email;
                echo "<hr>";
                echo $password;
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