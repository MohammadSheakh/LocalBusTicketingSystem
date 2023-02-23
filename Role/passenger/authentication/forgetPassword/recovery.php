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
            $recoveryPass = sanitize($_POST['recoveryPass']);
            

            // if input form is empty then show some specific error 
            
            if(empty($recoveryPass)){
                echo "<br> <br>please fill up the recovery form. <br> <br>";
                $flag = false;
            }
            

            if($flag === true){
                
                
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