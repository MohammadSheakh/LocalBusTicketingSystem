    <!--ticket booking form start here-->
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./mainNavbar.css"/>
    <style>
        .fieldSet{
            border: 1px solid wheat;
            border-radius: 7px;
        }   
        .legend{
            color :white;
        }   
    </style>
</head>
<body>
    <table align="center">
        <tr>
            <td>
                <fieldset class="fieldSet">
                    <table>
                        <legend class="legend">Ticket / Trip Details Page</legend>

                        <!-- <div>
                            <h3>Rampura to Badda</h3>
                        </div> -->
                        <tr>
                            <table>
                                <tr>
                                    <td>
                                        <!-- Picture of Bus  -->
                                        <?php
                                        // require '../../../../model/passengerProfile/subNavbar/personalInformation/passenger.php';
                                        //         $flag = getProfilePicture($_SESSION["passenger_id"]);
                                        //         $passengerImage = '';
                                        //         if($flag === true){
                                        //             //$passenger_All_Image = $_SESSION["passenger_image"];
                                        //             // foreach ($passenger_All_Image as $row) {
                                        //             //     $passengerImage =  $row['passenger_image'];
                                        //             // }
                                        //             //$_SESSION["passenger_single_image"] = $passengerImage;
                                        //             $image_data = base64_decode($_SESSION["passenger_image"]['passenger_image']);
                                        //             // echo $image_data;
                                        //             if(isset($_SESSION["passenger_image"])){
                                        //                 // header("Content-type: image/jpeg");
                                        //                 echo " <img src='data:image/jpeg;base64,".base64_encode($_SESSION["passenger_image"]['passenger_image'])."' height='100' width='100'> "; // alt='Image'
                                        //                 //echo $_SESSION["passenger_image"]['passenger_image'];
                                        //         //echo "<img height='80px' src='data:image/jpeg;base64," . base64_encode($_SESSION["passenger_image"]['passenger_image']) . "' alt='Image'>";
                                        //             }else{
                                        //                 echo "session is not set";
                                        //             }
                                        //         }
                                        ?>
                                        <!-- <img src="../images/passengerProfile/profileImage.png" alt="image" height='100' width='100'> -->
                                        <img height="100px" src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/images/passengerProfile/profileImage.png" alt="">
                                    </td>
                                    <td>
                                    <?php 
                                    
                                        echo "<h5 style='color:white; margin-left:20px;'>".$_SESSION["fullName"]."</h5> " ?? '';
                                    ?>
                                        <!-- <h5>Mohammad Bin Ab. Jalil Sheakh</h5> -->
                                        <!-- // ekhane amake database theke image niye dekhate hobe ..  -->

                                        <h6> 
                                        <i>
                                            
                                            <img src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/images/passengerProfile/phone.png" alt="">
                                        </i>

                                        <?php 
                                        
                                        // echo $_SESSION["phoneNo"] ?? '';
                                        echo "<span style='color:white; margin-left:10px;'>".$_SESSION["phoneNo"]."</span> " ?? '';
                                        ?>
                                        </h6>

                                        <h6> <i><img src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/images/passengerProfile/home.png" alt=""></i>
                                        <?php 
                                        //echo "<span style='color:white; margin-left:10px;'>".$_SESSION["address"]."</span> " ?? 'Dhaka Bangladesh';
                                        
                                        echo $_SESSION["address"] ?? '<span style="color:white; margin-left:10px;">Lives in Dhaka Bangladesh</span> '
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
<body>