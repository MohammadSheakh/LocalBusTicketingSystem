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
    <!-- <div>
        
        <table align="center">
            <tr>
                <td>
                    <h5>Bus Ticketing System </h5>
                </td>
                <td>
                    <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
                </td>
                <td>
                    <button> <a href="../../ticketBooking/ticketBooking.html">Home</a> </button>
                    <a href="#">Our Service</a>
                    <button>About Us</button>
                    <button>Contract Us</button>
                    <button> <a href="../authentication/login/login.html">Login</a> </button>
                    <button>Sign up</button>
                </td>
            </tr>
        </table>
        
    </div> -->
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
                                    <p>Email</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="email" id="email" name="email" value=""
                                        placeholder="Please enter your email...  ">
                                     
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Password</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="password" id="email" name="email" value=""
                                        placeholder="Please enter your email...  ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Login As</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="radio" id="admin" name="loginAs" value="admin">
                                      <label for="admin">Admin</label>
                                      <input type="radio" id="passenger" name="loginAs" value="passenger">
                                      <label for="passenger">Passenger</label>
                                      <input type="radio" id="employee" name="loginAs" value="employee">
                                      <label for="employee">Employee</label> <br>
                                    <input type="radio" id="busOwner" name="loginAs" value="busOwner">
                                      <label for="busOwner">Bus Owner</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="checkbox">Remember Me</input></td>
                            </tr>
                            <tr align="center">
                                <td></td>
                                <td></td>
                                <td><button> <a href="../../passengerProfile/passengerProfile.html">Login</a> </button>
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
</body>

</html>