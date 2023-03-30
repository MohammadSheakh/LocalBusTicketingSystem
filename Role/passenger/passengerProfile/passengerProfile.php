
    <!--ticket booking form start here-->
    <table align="center">
        <tr>
            <td>
                <fieldset>
                    <table>
                        <legend>Ticket / Trip Details Page</legend>

                        <!-- <div>
                            <h3>Rampura to Badda</h3>
                        </div> -->
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <img height="80px" src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/images/passengerProfile/profileImage.png" alt="">
                                    </td>
                                    <td>
                                    <?php 
                                        echo "<h5>".$_SESSION["fullName"]."</h5> " ?? ''
                                    ?>
                                        <!-- <h5>Mohammad Bin Ab. Jalil Sheakh</h5> -->
                                        <h6> <i><img src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/images/passengerProfile/phone.png" alt=""></i>

                                        <?php 
                                        echo $_SESSION["phoneNo"] ?? ''
                                        ?>
                                        </h6>

                                        <h6> <i><img src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/images/passengerProfile/home.png" alt=""></i>Lives in
                                        <?php 
                                        echo $_SESSION["address"] ?? ''
                                        ?>
                                        </h6>
                                    </td>

                                    <!-- <td>
                                        <h5>Arrival Time : 9:25am</h5>
                                        <h5>Leave Rampura point at 9:30am</h5>

                                    </td> -->
                                </tr>
                            </table>


                        </tr>

                        <!-- ----------------- Sub Navbar ----------------------- starts here -->

                        <?php
                        //    include './subNavbar/passengersSubNavbar.php';
                        ?>

                        <!-- ----------------- Sub Navbar ----------------------- ends here -->

                        <!-- ------------------Ticket History Starts Here --------------------- -->
                        




                        <!-- ------------------Ticket History Ends Here --------------------- -->

                    </table>
                </fieldset>
            </td>
        </tr>






    </table>
   