<?php
// include "../Model/DatabaseConnection.php";
require '../../../model/authentication/passenger.php';
$Email="";
$Email=$_POST["Email"];

if($Email=="")
{
    echo "Email Empty";
}else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
    echo "This is not correct email format ";
}
else
{
    $flag = checkUniqueForRegistration($Email);
    if($flag == true){
        
        echo "Email Already Registered";
    }else{
        echo "Unique Email";
    }

}

?>