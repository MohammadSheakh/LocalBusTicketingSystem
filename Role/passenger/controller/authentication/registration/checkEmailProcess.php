<?php
// include "../Model/DatabaseConnection.php";
require '../../../model/authentication/passenger.php';
$Email="";
$Email=$_POST["Email"];

if($Email=="")
{
    echo "Email Empty";
}
else
{
    $flag = checkUniqueForRegistration($Email);
    if($flag == true){
        // $check_Unique_Email = $_SESSION['check_Unique_Email'];
        // if(isset($check_Unique_Email)){
            
        //     echo "Email Already Registered";
        // }
        echo "Email Already Registered";
    }else{
        echo "Unique Email";
    }


    // this code is belong to sadaf vai ... 
    // $connection=new DatabaseConnection();
    // $conobj=$connection->OpenCon();
    // $result=$connection->ShowData2($conobj,"Users",$Email);
    // if ($result->num_rows > 0)
    // {
    //    echo "Email Already Registered"; // ei echo  gula amra js e dhorbo 
    // }

    // else{
    //         echo "Unique Email"; // ei echo  gula amra js e dhorbo 
    // }
    // $connection->CloseCon($conobj);
}


// ei logic kaj korle .. same logic e amra kaj korbo .. 
// same jinish onno jaygay implement korbo ..  



?>