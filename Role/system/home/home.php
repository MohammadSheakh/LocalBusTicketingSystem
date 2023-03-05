<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <!--navbar section start here -->
        <!-- <table align="center">
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
        </table> -->
        <?php
        include '../navbar/mainNavbar.php';
    ?>
        <!--navbar section end here -->
    </div>
    <table align="center">
        <tr>
            <td>
                <!-- bus image 
                https://iconscout.com/icons/bus-booking
                -->
                <!-- vfv -->
                <img width="300px" src="../image/home/bus.png" alt="">
            </td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
                <!-- Welcoming Text And Book Now Button -->
                <h1>Have A NICE TRIP WITH US !</h1>
                <button><a href="../../passenger/ticketBooking/ticketBooking.php">Book Now</a></button>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Features</h3>
            </td>
        </tr>



    </table>
    <!--Feature section start here -->
    <table align="center">
        <tr>
            <td>
                <h5>Easy Money Return Policy</h5>
            </td>
            <td>
                <h5>Convenient Ticking Booking Process</h5>
            </td>
        </tr>
        <tr>
            <td>
                <h5>Emergency Balance </h5>
            </td>
            <td>
                <h5>Carry Luggage Easily</h5>
            </td>
        </tr>
        <tr>
            <td>
                <hr><!---------------------------------------------------------------->
            </td>
            <td>
                <hr>
            </td>

        </tr>
    </table>
    <!--Feature section end here -->


    <!-- Trending Trip Section Starts Here  -->

    <table align="center">
        <tr>
            <td>
                <h3>Trending Trip</h3>
            </td>
        </tr>

        <tr>
            <td>

                <img width="80px" src="../image/home/bus.png" alt="">
            </td>
            <td>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>

                <h3>Dhaka to Rajshahi</h3>
                <h6>Next level Poribohon</h6>
                <button> <a href="../../passenger/confirmBooking/confirmBooking.php">Book Now</a> </button>
            </td>
        </tr>

        <tr>
            <td>
                <h3>Dhaka to Rajshahi</h3>
                <h6>Next level Poribohon</h6>
                <button><a href="../../passenger/confirmBooking/confirmBooking.php">Book Now</a></button>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
                <img width="80px" src="../image/home/bus.png" alt="">
            </td>
        </tr>





    </table>

    <!-- Trending Trip Section Ends Here  -->
    <hr>

    <!-- Reviews Section Starts Here  -->

    <table align="center">
        <tr>
            <td>
                <h3>Review</h3>
            </td>
        </tr>

        <tr>

            <!-- <td> -->
            <!-- &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; -->
            <!-- </td> -->
            <td>
                <h5>Mohammad Sheakh</h5>
                <pre>Awsome System of online ticket booking .. 
Much Appreciated! </pre>

                <button>
                    <img src="../image/home/like.png" alt="">
                    <span>12</span>
                </button>
                <button>
                    <img src="../image/home/dislike.png" alt="">
                    <span>12</span>
                </button>
            </td>
            <td>
                <h5>Mohammad Sheakh</h5>
                <pre>Awsome System of online ticket booking .. 
Much Appreciated! </pre>

                <button>
                    <img src="../image/home/like.png" alt="">
                    <span>12</span>
                </button>
                <button>
                    <img src="../image/home/dislike.png" alt="">
                    <span>12</span>
                </button>
            </td>
        </tr>

            <!-- &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; -->
        
    </table>

    <!-- Reviews Section Ends Here -->

    <!------------------------ Post a review section Start Here --------------------------------->
    <hr>
    <table align="center">
        <tr>
            <td>
                <h3>Write a review</h3>
            </td>
        </tr>
        <tr>
            <!-- review section form -->
            <table align="center">
                <tr>
                    <td>
                        <fieldset>
                            <legend>Review Form </legend>
                            <!-- ---------------------------------------- -->
                            <form action="" novalidate>
                                <table>
                                    <tr>
                                        <td>
                                            <p>Name</p>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" id="name" name="name" value=""
                                                placeholder="Enter your name...  ">
                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Review</p>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <textarea type="textarea" id="review" name="review" value=""
                                                placeholder="Please enter your Review...  "></textarea>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td><button> <a href="../home/home.html">Post</a>
                                            </button>
                                        </td>
                                    </tr>





                                </table>
                            </form>


                        </fieldset>
                    </td>
                </tr>

            </table>

        </tr>
    </table>
    <hr>
    <!------------------------ Post a review section End Here --------------------------------->

</body>

</html>