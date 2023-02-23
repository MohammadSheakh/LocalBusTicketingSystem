<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="register.php" novalidate method="post" >
        

        <table  align="center">

        
        <tr>
            <td>
            
                <fieldset>
                <legend>Personalia:</legend>
                <label for="firstName">First name:</label>
                <input type="text" id="firstName" name="firstName"><br><br>
                
                <label for="lastName">Last name:</label>
                <input type="text" id="lastName" name="lastName"><br><br>
                
                <label for="fathersName">Father's Name :</label>
                <input type="text" id="fathersName" name="fathersName"><br><br>
                
                <label for="mothersName">Mother's Name :</label>
                <input type="text" id="mothersName" name="mothersName"><br><br>
                
                <label for="gender">Gender :</label>
                <input type="radio" id="gender" value="gender" name="gender"> 
                <label for="gender">Male</label>

                <input type="radio" id="gender" value="gender" name="gender"> 
                <label for="gender">Female</label> <br>

                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" id="dateOfBirth" name="dateOfBirth"><br>

                

                <label for="cars">Blood Group :</label>

                <select name="bloodGroup" id="bloodGroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                
                </select>

                
                </fieldset>
            </form>

            
            </td>
            
        </tr>

        <tr>
            <td>
            
                <fieldset>
                <legend>Personalia:</legend>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>

                <label for="contractInfo">Phone/Mobile : </label>
                <input type="text" id="contractInfo" name="contractInfo"><br><br>
                

                <label for="website">Website : </label>
                <input type="text" id="website" name="website"><br><br>
                
                <label for="address">Present Address : </label>
                <input type="textarea" id="address" name="address"><br><br>
                
                
                
                </fieldset>
            

            
            </td>
            
        </tr>

        <tr>
            <td>
            
                <fieldset>
                <legend>Account Information:</legend>
                <label for="userName">UserName : </label>
                <input type="text" id="userName" name="userName"><br><br>
                

                <label for="password">Password : </label>
                <input type="text" id="password" name="password"><br><br>
                

                </fieldset>
            

            
            </td>
            
        </tr>
        
        
        </table>
        <input type="submit" value="Submit">
    </form>
        


        <h4>Already Have an Accout ? Login <a href="login.html">here</a></h4>

    
</body>
</html>