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
            $check = true;
            
            // Account Information 
            $currentPass = sanitize($_POST['currentPass']);
            $newPass = sanitize($_POST['newPass']);
            $confirmPass = sanitize($_POST['confirmPass']);

            // if input form is empty then show some specific error 

            
            
            if(empty($currentPass)){
                echo "<br> <br>please fill up the Current Password form. <br> ";
                $flag = false;
            }
            if(empty($newPass)){
                echo "please fill up the New Password form<br>";
                $flag = false;
            }
            if(empty($confirmPass)){
                echo "please fill up the Confirm form<br>";
                $flag = false;
            }
            if($currentPass != 1234){
                // current password validation check 
                echo "Your Current Password is not valid<br>";
                $flag = false;
            }

            // new pass and confirm pass same check 
            if( ($newPass != $confirmPass)){
                $flag = false;
                echo "Your New Password And Confirm Password is not same <br>";
            }

            // new pass and confirm pass same check 
            if(  $newPass === $currentPass){
                $flag = false;
                echo "Your New Password And Current Password is same <br>";
            }

            if($flag == false){
                echo "
                <table  align='center'>
      
      <tr>
        <td>
          <h1>Change Password</h1>
          <form action='changePassword.php' novalidate method='post' >
            <fieldset>
              <legend>Change Password</legend>
              <label for='currentPass'>Current Password:</label>
              <input type='password' id='currentPass' name='currentPass'><br><br>
              <label for='newPass'>New Password:</label>
              <input type='text' id='newPass' name='newPass'><br><br>
              <label for='confirmPass'>Confirm Password:</label>
              <input type='text' id='confirmPass' name='confirmPass'><br><br>
              
              <input type='submit' value='Submit'>
            </fieldset>
          </form>
          <h3>Don't Have a Accout ? Register <a href='register.html'>here</a></h3>
          <h3><a href='forgetPassword.html'>Forget Password </a> </h3>
          
        </td>
        
      </tr>
      
    </table>
                ";
            }

            if($flag === true){
                
                echo "
                
                <table  align='center'>
      
      <tr>
        <td>
          <h1>Login</h1>
          <form action='login.php' novalidate method='post' >
            <fieldset>
              <legend>Login</legend>
              <label >New Password : </label>
              $newPass <br> <br>
              
              
              
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