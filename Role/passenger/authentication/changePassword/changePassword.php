<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table  align="center">
      
      <tr>
        <td>
          <h1>Change Password</h1>
          <form action="changePasswordProcess.php" novalidate method="post" >
            <fieldset>
              <legend>Change Password</legend>
              <label for="currentPass">Current Password:</label>
              <input type="password" id="currentPass" name="currentPass"><br><br>
              <label for="newPass">New Password:</label>
              <input type="text" id="newPass" name="newPass"><br><br>
              <label for="confirmPass">Confirm Password:</label>
              <input type="text" id="confirmPass" name="confirmPass"><br><br>
              
              <input type="submit" value="Submit">
            </fieldset>
          </form>

          <h3>Don't Have a Accout ? Register <a href="register.html">here</a></h3>
          <h3><a href="forgetPassword.html">Forget Password </a> </h3>
          

        </td>
        
      </tr>
      
    </table>

    
</body>
</html>