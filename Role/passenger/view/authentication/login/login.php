<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css"/>
</head>

<body>
    <?php
        include '../../system/navbar/mainNavbar.php';
        // $fullNameVariable = '';
        // if(isset($_SESSION['fullName'])){
        //     $fullNameVariable = $_SESSION["fullName"];
        // }
        // if($fullNameVariable){
        //     header('location:../../passengerProfile/subNavbar/personalInformation/personalInformation.php');
                    
        // }
        session_start();
    ?>
    
    <table align="center">
        <tr>
            <td>
                <br>
                <br>
                <br>
                <fieldset class="fieldSet">
                    <legend class="legend">Login Form </legend>
                    <!-- ---------------------------------------- -->
                    <form action="../../../controller/authentication/login/loginProcess.php" method="post" novalidate onsubmit="return getLoginErrorMsg(this);">
                        <table>

                            <tr>
                                <td>
                                    <p class="inputName">Email</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    <input class="textBox"   type="email" id="email" name="email" value=""
                                        placeholder="Please enter your email...  ">
                                        <div >
                                         <?php
                                            if(isset($_SESSION['emailErrorMsg'])){
                                                echo "<p class='errorMsg'>".$_SESSION['emailErrorMsg']."</p>";
                                            }
                                        ?>
                                        <p  id='emailErrorMsg'></p>

                                        </div>
                                        
                                        
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="inputName">Password</p>
                                </td>
                                <td class="inputName">:</td>
                                <td>
                                    <input  class="textBox" type="password" id="password" name="password" value=""
                                        placeholder="Please enter your email...  ">
                                        <?php
                                            if(isset($_SESSION['passErrorMsg'])){
                                                echo "<p class='errorMsg'>".$_SESSION['passErrorMsg']."</p>";
                                            }
                                        ?>
                                        <p class='errorMsg' id='passwordErrorMsg'></p>
                                        
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input  type="checkbox" name="rememberMe" id="rememberMe" > <span class="inputName">Remember Me</span> </input></td>
                            </tr>
                            <tr align="center">
                                
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td><button class="submitBtn" type="submit" class="inputName" > Login </button>


                                <!-- onClick="login()"     -->
                            </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                <!-- <p class='errorMsg' id='generalErrorMsg'> -->

                                <?php
                                            if(isset($_SESSION['generalErrorMsg'])){
                                                echo "<p class='errorMsg'>".$_SESSION['generalErrorMsg']."</p>";
                                            }
                                        ?>

                                <!-- </p> -->
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td> <a class="decoration" href=""> <span class="forgetPass">Forgot Password</span> </a></td>

                            </tr>



                        </table>
                    </form>


                </fieldset>
            </td>
        </tr>

    </table>
    <script src="./login.js"></script>
</body>

</html>