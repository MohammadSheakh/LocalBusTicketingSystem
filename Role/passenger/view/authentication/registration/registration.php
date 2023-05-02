<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../login/login.css"/>
</head>
<body>
    
    <?php
    // session_start();
    include '../../system/navbar/mainNavbar.php';
    ?>
    
    <form action="registrationProcess.php" novalidate method="post" >
    <div align="center">
    <h1  class="legend">Registration</h1>
    </div>    

    <table align="center">
        <tr>
            <td>
                <br>
                <br>
                <br>
                <fieldset class="fieldSet">
                    <legend class="legend">Registration Form </legend>
                    <!-- -------------------------------------onsubmit="return getReviewErrorMsg(this);"--- -->
                    <form action="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/authentication/registration/registrationProcess.php" novalidate  >
                        <table>
                            <tr>
                                <td>
                                    <p class="inputName">Full Name</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    <input class="textBox" type="fullName" id="fullName" name="fullName" value=""
                                        placeholder="Enter your full name here...  ">
                                        <?php
                                if(isset($_SESSION['fullNameErrorMsg'])){
                                    echo "<p>".$_SESSION['fullNameErrorMsg']."</p>";
                                }
                                ?>
                                <p class='errorMsg'  id='fullNameErrorMsg'></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="inputName">Email</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    <input class="textBox" onkeyup="showmyuser()" type="email" id="email" name="email" value=""
                                        placeholder="Enter your email...  ">
                                         <?php
                    if(isset($_SESSION['emailErrorMsg'])){
                        echo "<p>".$_SESSION['emailErrorMsg']."</p>";
                    }
                ?>
                            <p id="erroremail"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="inputName"> Password</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    <input class="textBox" type="password" id="password" name="password" value=""
                                        placeholder="Enter your password...  ">
                                        <?php
                    if(isset($_SESSION['passwordErrorMsg'])){
                        echo "<p>".$_SESSION['passwordErrorMsg']."</p>";
                    }
                ?>
                                </td>
                            </tr>
                            

                <tr>
                                <td>
                                    <p class="inputName">Gender</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    
                                    <input type="radio" id="gender" value="male" name="gender"> 
                                    <label for="gender" class="inputName">Male</label>

                                    <input type="radio" id="gender" value="female" name="gender"> 
                                    <label class="inputName" for="gender">Female</label>

                                    <?php
                    if(isset($_SESSION['genderErrorMsg'])){
                        echo "<p>".$_SESSION['genderErrorMsg']."</p>";
                    }
                ?>
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
                                    <p class="inputName">Passenger Type</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                      <input type="radio" id="Working People" name="type" value="working people">
                                      <label class="inputName" for="passenger">Working People</label>
                                      <input type="radio" id="student" name="type" value="student">
                                      <label class="inputName" for="employee">Student</label> <br>
                                    <?php
                    if(isset($_SESSION['typeErrorMsg'])){
                        echo "<p>".$_SESSION['typeErrorMsg']."</p>";
                    }
                ?>
                                </td>
                            </tr>
                            
                            <tr align="center">
                                <td></td>
                                <td></td>
                                <td><button  class="submitBtn" type="submit"> Registration</button>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td> <a class="decoration" href=""><span class="forgetPass">Forgot Password</span></a></td>

                            </tr>



                        </table>
                    </form>


                </fieldset>
            </td>
        </tr>

    </table>
    
    </form>
        
    <div align="center">
    <h5 class="inputName">Already Have an Accout ? Login <a href="../login/login.php" class="inputName">here</a></h5>

    </div>    

        
    <script src="./registration.js"></script>
</body>
</html>