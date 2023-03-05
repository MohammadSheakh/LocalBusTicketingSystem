<!-- http://localhost/Local%20Bus%20Ticketing%20System/Role/passenger/ticketBooking/ticketBooking.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- for main navbar  -->
    <?php
        include '../../system/navbar/mainNavbar.php';
    ?>

    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table>
                        <legend>Ticket / Trip Details Page</legend>

                        <div>
                            <h3>Rampura to Badda</h3>
                        </div>
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <img height="80px" src="../images/ticketDetailsPage/busPicture.png" alt="">

                                    </td>
                                    <td>
                                        <h5>Raida Paribahan</h5>
                                        <h6>Root No. 4332</h6>
                                    </td>

                                    <td>
                                        <h5>Arrival Time : 9:25am</h5>
                                        <h5>Leave Rampura point at 9:30am</h5>

                                    </td>
                                </tr>
                            </table>


                        </tr>




                        <tr>
                            <td>
                                <h3>Available Seats</h3>
                                <!-- ekhane amra table er moddhe arekta table dekhabo 
                                        -->


                                <table border="1">
                                    <tr>
                                        <td>Gate</td>
                                        <td>&nbsp;</td>

                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td><img width="20px" src="../images/ticketDetailsPage/steering.png" alt="">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><button>A4</button> </td>
                                        <td><button>A3</button> </td>
                                        <td> </td>
                                        <td><button>A2</button> </td>
                                        <td><button>A1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>B4</button> </td>
                                        <td><button>B3</button> </td>
                                        <td> </td>
                                        <td><button>B2</button> </td>
                                        <td><button>B1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>C4</button> </td>
                                        <td><button>C3</button> </td>
                                        <td> </td>
                                        <td><button>C2</button> </td>
                                        <td><button>C1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button style="">D4</button> </td>
                                        <td><button>D3</button> </td>
                                        <td> </td>
                                        <td><button>D2</button> </td>
                                        <td><button>D1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>E4</button> </td>
                                        <td><button>E3</button> </td>
                                        <td> </td>
                                        <td><button>E2</button> </td>
                                        <td><button>E1</button> </td>
                                    </tr>
                                    <tr>
                                        <td><button>F5</button> </td>
                                        <td><button>F4</button> </td>

                                        <td><button>F3</button> </td>
                                        <td><button>F2</button> </td>
                                        <td><button>F1</button> </td>
                                    </tr>
                                </table>


                            </td>
                            <td>
                                <fieldset>
                                    <!-- ---------------------------------------- -->
                                    <form action="" novalidate>
                                        <table>
                                            <tr>
                                                <td>
                                                    <p>Status of <button>A1</button></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" id="booked" name="seat_status" value="booked">
                                                      <label for="booked">Booked</label>
                                                      <input type="radio" id="free" name="seat_status" value="free">
                                                      <label for="free">Free</label>
                                                      <input type="radio" id="reserved" name="seat_status"
                                                        value="reserved">
                                                      <label for="reserved">Reserved</label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Status of <button>A2</button></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" id="booked" name="seat_status" value="booked">
                                                      <label for="booked">Booked</label>
                                                      <input type="radio" id="free" name="seat_status" value="free">
                                                      <label for="free">Free</label>
                                                      <input type="radio" id="reserved" name="seat_status"
                                                        value="reserved">
                                                      <label for="reserved">Reserved</label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Status of <button>A3</button></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" id="booked" name="seat_status" value="booked">
                                                      <label for="booked">Booked</label>
                                                      <input type="radio" id="free" name="seat_status" value="free">
                                                      <label for="free">Free</label>
                                                      <input type="radio" id="reserved" name="seat_status"
                                                        value="reserved">
                                                      <label for="reserved">Reserved</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>

                                    <!-- ----------------------------------------- -->
                                    <legend>Details seat plan</legend>
                                    <h5>You have selected A1, A2, A3 seat</h5>
                                    <p>Per kilometer price : 20 Tk</p>
                                    <p>Total Seat : 2</p>
                                    <p>Total Distance : 5 kilometer</p>
                                    <p>Total Price : 5 * 20 => 100 Taka</p>


                                    <button> <a href="../confirmBooking/confirmBooking.php">Confirm Booking</a> </button>
                                    <button>Cancel </button>
                                </fieldset>
                            </td>

                        </tr>



                        <!-- </form> -->
                    </table>
                </fieldset>
            </td>
        </tr>






    </table>
    <!--ticket booking form end here-->


</body>

</html>