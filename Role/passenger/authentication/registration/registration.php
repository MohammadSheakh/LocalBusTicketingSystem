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
    
    <form action="register.php" novalidate method="post" >
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
                    <legend>Login Form </legend>
                    <!-- ---------------------------------------- -->
                    <form action="" novalidate>
                        <table>
                        
                            <tr>
                                <td>
                                    <p>Full Name</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="fullName" id="fullName" name="fullName" value=""
                                        placeholder="Enter your full name here...  ">
                                     
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
                                    <input type="password" id="email" name="email" value=""
                                        placeholder="Enter your email...  ">
                                </td>
                            </tr>
                            

                <tr>
                                <td>
                                    <p>Gender</p>
                                </td>
                                <td>:</td>
                                <td>
                                    
                                    <input type="radio" id="gender" value="gender" name="gender"> 
                                    <label for="gender">Male</label>

                                    <input type="radio" id="gender" value="gender" name="gender"> 
                                    <label for="gender">Female</label>
                                </td>
                            </tr>

                            <tr>
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
                            </tr>
                            
                            <tr align="center">
                                <td></td>
                                <td></td>
                                <td><button> <a href="../../passengerProfile/subNavbar/personalInformation/personalInformation.php">Registration</a> </button>
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
    <h4>Already Have an Accout ? Login <a href="login.html">here</a></h4>

    </div>    

        
    
</body>
</html>