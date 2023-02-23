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
           
            // Account Information 
            $userName = sanitize($_POST['userName']);
            $password = sanitize($_POST['password']);

            // if input form is empty then show some specific error 
            
            if(empty($userName)){
                echo "<br> <br>please fill up the userName form. <br> <br>";
                $flag = false;
            }
            if(empty($password)){
                echo "please fill up the password form";
                $flag = false;
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
              <label >User Name : </label>
              $userName <br> <br>
              
              <label >Password : </label>
              $password
              
              
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