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
    
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;
           
            // Account Information 
            $email = sanitize($_POST['email']);
            

            // if input form is empty then show some specific error 
            
            if(empty($email)){
                echo "<br> <br>please fill up the email form. <br> <br>";
                $flag = false;
            }
            

            if($flag === true){
                $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

                $email=$_POST['email'];
    $subject = 'Recovery Code ';
    $message = '123';

    mail($email, $subject, $message, $headers);
                
                echo "
                
                <table  align='center'>
      
      <tr>
        <td>
          <h1>Login</h1>
          <form action='recovery.php' novalidate method='post' >
            <fieldset>
              <legend>Login</legend>
              <label >User Name : </label>
              $email <br> <br>
              
              <label for='recoveryPass'>Recovery Password:</label>
              <input type='password' id='recoveryPass' name='recoveryPass'><br><br>
              
              <input type='submit' value='Recover Your Account '>
              
            </fieldset>
          </form>
                <a href='register.html'>click here to go to register page</a>
        </td>
        
      </tr>
      
    </table>
                ";

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