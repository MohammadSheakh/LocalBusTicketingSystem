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
    // session_start();
    // include '../../passenger/database/dbConnect.php';
    include '../../../model/system/home/review.php';
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
            // general information
            $name = sanitize($_POST['name']);
            $review = sanitize($_POST['review']);
            

        
            // if input form is empty then show some specific error 
            if(empty($name)){
                echo "please fill up the name form from php validation";
                $flag = false;
            }
            if(empty($review)){
                echo "please fill up the review form  from php validation";
                $flag = false;
            }
        
            if($flag === true){
                
                //$sql = "insert into `local_bus_ticketing_system`.`review`(passengerId, fullName, review) values('".$_SESSION['passenger_id']."', '$name','$review')";
                    
                $flag = insertAReview($name, $review);
                
                if($flag === true){
                    //echo $name.$review;
                    header('location: ../../../view/system/home/home.php');
                }else{
                    // error 
                    header('location: ../../../view/system/home/home.php');
                    // die(mysqli_error($con));
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