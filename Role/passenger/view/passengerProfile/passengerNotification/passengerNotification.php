<?php
    if(isset($_COOKIE['status'])){
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .fieldSet{
            border: 1px solid wheat;
            border-radius: 7px;
        }
        .legend{
            color :white;
        }
        .button{
            
            background: linear-gradient(to right, #06b6d4, #14b8a6 );/**50%, transparent 50%, transparent */
            border: 2px solid #14b8a6;
            color: black;
            text-transform: uppercase;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .divInsideFieldSet{
            background-color: teal !important;
            padding: 3px;
            border-radius:7px;
        }       
    </style>
</head>
<body>
<fieldset class="fieldSet"> 
                    <legend class="legend">Notifications</legend>
                    <table>
                        <tr>
                            <td>
                            <button class="button">Archived</button>
                            <button class="button">Recycle Bin</button>
                            </td>
                            <td>
                                <!-- reload button to grab notification from database .. 
                                or automatic hoile to kono kotha e nai ..  -->
                                <form action="Data.php" method="post" onsubmit="return getData();">
                                    <input class="button" type="submit">
                                </form>
                            </td>
                        </tr>

                        <?php
                        // require '../../../model/passengerProfile/notification/notification.php';
                        
                        echo "<tr>
                        <td>";

                        $flag = getAllNotification();
                        if($flag === true){
                            // shob gula review array theke niye dekhabo 
                            $all_notifications = $_SESSION['all_notifications'];
                            // var_dump($all_notifications);
                            // Loop through the array and display the data
                            foreach ($all_notifications as $rowAgain) {
                                $notificationId= $rowAgain['notificationId'];
                                $notification= $rowAgain['notification'];
                                $busId= $rowAgain['busId'];
                                $passenger_id= $rowAgain['passenger_id'];
                                $email= $rowAgain['email'];
                                $employeeEmail_id= $rowAgain['employeeEmail_id'];
                                $employeeId= $rowAgain['employeeId'];
                                $companyName= $rowAgain['companyName'];
                                $busRegistrationNo= $rowAgain['busRegistrationNo'];
                                // <fieldset class='fieldSet'>
                                echo " <div class='divInsideFieldSet'>";
                                echo "<p  class='divInsideFieldSet'>".$companyName."-".$busRegistrationNo."&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;".$notification."</p>";
                                // echo "notificationid".$notificationId;
                                echo "
                                <div  class='divInsideFieldSet' align='right'>
                                <button class='button'><a class='button' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=".$notificationId."'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button>
                                        <button class='button'>Save as Archive</button>
                                </div>
                                ";
                                echo "</div><br>";
                                // </fieldset>
                            }
                        }

                        // show conversationId er against e  message table er shob gula message dekhabo 
                        // $notification = '';
                        // $sqlAgain = "select companyName, busRegistrationNo, notificationId, notification, busId, passenger_id, email, employeeEmail_id, employeeId from `local_bus_ticketing_system`.`notification` where passenger_Id='".$_SESSION["passenger_id"]."'";
                        // $resultAgain = mysqli_query($con, $sqlAgain);
                        // if($resultAgain){
                            
                        //     while($rowAgain = mysqli_fetch_assoc($resultAgain)){
                        //         echo "<fieldset>";
                        //         $notificationId= $rowAgain['notificationId'];
                        //         $notification= $rowAgain['notification'];
                        //         $busId= $rowAgain['busId'];
                        //         $passenger_id= $rowAgain['passenger_id'];
                        //         $email= $rowAgain['email'];
                        //         $employeeEmail_id= $rowAgain['employeeEmail_id'];
                        //         $employeeId= $rowAgain['employeeId'];
                        //         $companyName= $rowAgain['companyName'];
                        //         $busRegistrationNo= $rowAgain['busRegistrationNo'];
                        //         echo "<p>".$companyName."-".$busRegistrationNo."&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;".$notification."</p>";
                        //         echo "notificationid".$notificationId;
                        //         echo "
                        //         <div align='right'>
                        //         <button><a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=".$notificationId."'><img  src='../../../images/passengerNotifications/delete.png' ></a></button>
                        //                 <button>Save as Archive</button>
                        //         </div>
                                    
                        //         ";
                        //         echo "</fieldset><br>";
                        //     }
                            
                            
                        // }
                    
                
                

                //========================= Reply to a conversation =============================
            ?>
                    


                    </table>
                </fieldset>
                        
                <script src="./passengerNotification.js"></script>
            </body>

                <?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
	}
?>