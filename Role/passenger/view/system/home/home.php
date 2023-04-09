<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css"/>
    <title>Document</title>
</head>

<body>
    <div align="center">
        
        <?php
        // include '../../passenger/database/dbConnect.php';
        require '../../../model/system/home/review.php';
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
                <h1 class="title">Have A NICE TRIP WITH US !</h1>
                <button class="bookNowBtn">

                <?php 
                    $passengerIdVariable = '';
                    if(isset($_SESSION["passenger_id"])){
                        $passengerIdVariable = $_SESSION["passenger_id"];
                    }

                    if($passengerIdVariable){
                        echo "
                        <a class='bookNowBtn aBtn' href='../../passenger/ticketBooking/ticketBooking.php'
                
                >Book Now</a></button>
                        ";
                    }else{
                        echo "
                        <a class='bookNowBtn aBtn' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php'
                
                >Book Now</a></button>
                        ";
                    }
                ?>
                    
                
            </td>
        </tr>
        <tr>
            <td>
                <h3 class="title">Features</h3>
            </td>
        </tr>



    </table>
    <!--Feature section start here -->
    <table align="center">
        <tr class="features">
            <td>
                <div class="feature">
                    <span>
                        <img src="../../images/home/feature/cashback.png" alt="">
                    </span>
                    <h5 class="title">Easy Money Return Policy</h5>
                </div>
                
            </td>
            <td>
            <div class="feature">
                    <span>
                        <img src="../../images/home/feature/booking.png" alt="">
                    </span>
                    <h5 class="title">Convenient Ticking Booking Process</h5>
                </div>
                
            </td>
        </tr>
        <tr class="features">
            <td>
            <div class="feature">
                    <span>
                        <img src="../../images/home/feature/wallet.png" alt="">
                    </span>
                    <h5 class="title">Get Emergency Balance Easily</h5>
                </div>
                
            </td>
            <td>
            <div class="feature">
                    <span>
                        <img src="../../images/home/feature/carrier.png" alt="">
                    </span>
                    
                    <h5 class="title">Carry Luggage Easily</h5>
                </div>
                
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
                <h3 class="title">Trending Trip</h3>
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

                <h3 class="title">Dhaka to Rajshahi</h3>
                <h6 class="title">Next level Poribohon</h6>
                <button class='bookNowBtn'> <a class="aBtn" href="../../passenger/confirmBooking/confirmBooking.php">Book Now</a> </button>
            </td>
        </tr>

        <tr>
            <td>
                <h3 class="title">Dhaka to Rajshahi</h3>
                <h6 class="title">Next level Poribohon</h6>
                <button class='bookNowBtn'><a class="aBtn" href="../../passenger/confirmBooking/confirmBooking.php">Book Now</a></button>
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
                <h3  class="title">Review</h3>
            </td>
        </tr>

        <tr>
            <?php 
            // showAllReview
                $flag = showAllReview();
                if($flag === true){
                    // shob gula review array theke niye dekhabo 
                    $all_reviews = $_SESSION['all_reviews'];
                    // Loop through the array and display the data
                    echo "<div class='allReview'>";
                    foreach ($all_reviews as $rowAgain) {

                        $reviewId= $rowAgain['reviewId'];
                        $passengerId= $rowAgain['passengerId'];
                        $fullName= $rowAgain['fullName'];
                        $review= $rowAgain['review'];
                        $likeNumber= $rowAgain['likeNumber'];
                        $dislikeNumber= $rowAgain['dislikeNumber'];
                        
                        echo "
                        <td>
                        <div class='singleReview'>
                            <h5 class='reviewTitle'>".$fullName."</h5>
                            <pre class='reviewBody'>".$review."</pre>
                            <div> 
                                <button class='bookNowBtn'> <a class='innerBtn' href='./updateLikeProcess.php?updateId=".$reviewId."'>
                                <img  class='innerBtn' src='../image/home/like.png' alt=''>
                                    <span class='innerBtn'>".$likeNumber."</span>
                                </a>
                                    
                                </button>
                                <button class='bookNowBtn'>
                                <a class='innerBtn' href='./updateDislikeProcess.php?updateId=".$reviewId."'> 
                                <img class='innerBtn' src='../image/home/dislike.png' alt=''>
                                    <span class='innerBtn'>".$dislikeNumber."</span>
                                </a>
                                    
                                </button>
                            </div>
                            
                        </div>
                    </td>
                        ";
                    }
                    echo "</div>";
                }else{
                    /// kono review e kichui dekhabo na .. 
                    echo "No review Found !";
                }
                
            ?>
            
        </tr>
        

            <!-- &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; -->
        
    </table>

    <!-- Reviews Section Ends Here -->

    <!------------------------ Post a review section Start Here --------------------------------->
    <hr>
    <table align="center">
        <tr>
            <td>
                <h3 class='title'>Write a review</h3>
            </td>
        </tr>
        <tr>
            <!-- review section form -->
            <table align="center">
                <tr>
                    <td>
                        <fieldset class="fieldSet">
                            <legend class="legend">Review Form </legend>
                            <!-- ---------------------------------------- -->
                            <form action="./homeProcess.php" novalidate method='post'>
                                <table>
                                    <tr>
                                        <td>
                                            <p class="inputName">Name</p>
                                        </td>
                                        <td class="inputName">:</td>
                                        <td>
                                            <input  class="textBox" type="text" id="name" name="name" value=""
                                                placeholder="Enter your name...  ">
                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="inputName">Review</p>
                                        </td>
                                        <td class="inputName">:</td>
                                        <td>
                                            <textarea class="textBox" type="textarea" id="review" name="review" value=""
                                                placeholder="Please enter your Review...  "></textarea>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td><button class="submitBtn" type='submit'> Post
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