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
            $firstName = sanitize($_POST['firstName']);
            $lastName = sanitize($_POST['lastName']);
            $fathersName = sanitize($_POST['fathersName']);
            $mothersName = sanitize($_POST['mothersName']);
            $gender = sanitize($_POST['gender']);
            $dateOfBirth = sanitize($_POST['dateOfBirth']);
            $bloodGroup = sanitize($_POST['bloodGroup']);
            //Contract information
            $email = sanitize($_POST['email']);
            $contractInfo = sanitize($_POST['contractInfo']);
            $website = sanitize($_POST['website']);
            $address = sanitize($_POST['address']);
            // Account Information 
            $userName = sanitize($_POST['userName']);
            $password = sanitize($_POST['password']);

            // if input form is empty then show some specific error 
            if(empty($firstName)){
                echo "please fill up the firstName form";
                $flag = false;
            }
            if(empty($lastName)){
                echo "please fill up the lastName form";
                $flag = false;
            }
            if(empty($fathersName)){
                echo "please fill up the fathersName form";
                $flag = false;
            }
            if(empty($mothersName)){
                echo "please fill up the mothersName form";
                $flag = false;
            }
            if(empty($gender)){
                echo "please fill up the gender form";
                $flag = false;
            }
            if(empty($dateOfBirth)){
                echo "please fill up the dateOfBirth form";
                $flag = false;
            }
            if(empty($bloodGroup)){
                echo "please fill up the bloodGroup form";
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

            if(empty($contractInfo)){
                echo "please fill up the contractInfo form";
                $flag = false;
            }
            if(empty($website)){
                echo "please fill up the website form";
                $flag = false;
            }
            if(empty($address)){
                echo "please fill up the address form";
                $flag = false;
            }
            if(empty($userName)){
                echo "please fill up the userName form";
                $flag = false;
            }
            if(empty($password)){
                echo "please fill up the password form";
                $flag = false;
            }

            if($flag === true){
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