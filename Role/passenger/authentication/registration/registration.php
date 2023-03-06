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
        include '../../../system/navbar/mainNavbar.php';
    ?>
    
    <form action="registrationProcess.php" novalidate method="post" >
    <div align="center">
    <h1>Registration</h1>
    </div>    

    <table align="center">
        <tr>
            <td>
                <br>
                <br>
                <br>
                <fieldset>
                    <legend>Registration Form </legend>
                    <!-- ---------------------------------------- -->
                    <form action="./registrationProcess.php" novalidate>
                        <table>
                        
                            <tr>
                                <td>
                                    <p>Full Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="fullName" id="fullName" name="fullName" value=""
                                        placeholder="Enter your full name here...  ">
                                    Mohammad Bin Ab. Jalil Sheakh
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Email</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="email" id="email" name="email" value=""
                                        placeholder="Enter your email...  ">
                                     
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Password</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="password" id="password" name="password" value=""
                                        placeholder="Enter your email...  ">
                                </td>
                            </tr>
                            

                <tr>
                                <td>
                                    <p>Gender</p>
                                </td>
                                <td>:</td>
                                <td>
                                    
                                    <input type="radio" id="gender" value="male" name="gender"> 
                                    <label for="gender">Male</label>

                                    <input type="radio" id="gender" value="female" name="gender"> 
                                    <label for="gender">Female</label>
                                </td>
                            </tr>

                            <!-- <tr>
                                <td>
                                    <p>Registration As</p>
                                </td>
                                <td>:</td>
                                <td>
                                    
                                      <input type="radio" id="passenger" name="loginAs" value="passenger">
                                      <label for="passenger">Passenger</label>
                                      <input type="radio" id="employee" name="loginAs" value="employee">
                                      <label for="employee">Employee</label> <br>
                                    <input type="radio" id="busOwner" name="loginAs" value="busOwner">
                                      <label for="busOwner">Bus Owner</label>
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <p>Passenger Type</p>
                                </td>
                                <td>:</td>
                                <td>
                                    
                                      <input type="radio" id="Working People" name="type" value="working people">
                                      <label for="passenger">Working People</label>
                                      <input type="radio" id="student" name="type" value="student">
                                      <label for="employee">Student</label> <br>
                                    
                                </td>
                            </tr>
                            
                            <tr align="center">
                                <td></td>
                                <td></td>
                                <td><button type="submit"> Registration</button>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td> <a href="">Forgot Password</a></td>

                            </tr>



                        </table>
                    </form>


                </fieldset>
            </td>
        </tr>

    </table>
    
    </form>
        
    <div align="center">
    <h4>Already Have an Accout ? Login <a href="../login/login.php">here</a></h4>

    </div>    

        
    
</body>
</html>