<?php
session_start();
function connect() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    if(!$con){
        die("Error From Database : ".mysqli_error($con)); /// session e save kore front end e error dekhate hobe 
    }
    return $con;
}

function insertAReview($name, $review){
    $con = connect();
    //$sql = "insert into `local_bus_ticketing_system`.`review`(passengerId, fullName, review) values('".$_SESSION['passenger_id']."', '$name','$review')";
                    
    $sql = "insert into `local_bus_ticketing_system`.`review`(passengerId, fullName, review) values('".$_SESSION['passenger_id']."', ? , ? )";
         
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("ss",$name,$review);

    if($stmt -> execute()){
        return true;
    }else{
        return false;
    }

    //$stmt -> execute();  // true false return kore ..  
    // successfully execute korle mysqli object return kore 
    // select statement er khetre bolte hobe .. $stmt->get_result() // mysqli_result object return kore .. 
    // er moddhe num_rows return kore 0 or 1 or multiple 

    /*
    die(var_dump($stmt->get_result()));
    die(var_dump($stmt->get_result()->num_rows)); // object er property access korar jonno amra -> ei sign use kori 
    */

    // $email $password
    // we want to execute the query
    ///////////////////////////////////////////////////////$result = mysqli_query($con, $sql);
    // if(mysqli_num_rows($result) === 1) // then return true otherwise return false 
    ///////////////////////////////////////////////////////////$row = mysqli_fetch_assoc($result);
    
    //if($row > 0){
    //if($stmt->get_result()->num_rows > 0){     //  or === jodi 1 hoy ..  
    
}

function showAllReview(){
    $con = connect();
    $sql = "select reviewId, passengerId, fullName, review, likeNumber, dislikeNumber from `local_bus_ticketing_system`.`review`";

    $stmt = $con -> prepare($sql);
    //$stmt->bind_param("ss",$name,$review);

    if($stmt -> execute()){
        // ekhane jei value gula return korbe .. shegula array te save korbo ..  
        $stmt->bind_result($reviewId, $passengerId, $fullName, $review, $likeNumber, $dislikeNumber);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('reviewId' => $reviewId, 'passengerId' => $passengerId, 'fullName' => $fullName, 'review' => $review, 'likeNumber' => $likeNumber, 'dislikeNumber' => $dislikeNumber);
        }
        $_SESSION['all_reviews'] = $rows;
        $stmt->close(); // close the prepared statement
        //$mysqli->close(); // close the database connection
        return true;
    }else{
        return false;
    }
}
?>