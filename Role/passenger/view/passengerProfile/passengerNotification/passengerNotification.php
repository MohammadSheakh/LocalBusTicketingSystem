<?php
    if(isset($_COOKIE['status'])){
    
?>

<fieldset>
                    <legend>Notifications</legend>
                    <table>
                        <tr>
                            <td>
                            <button>Archived</button>
                            <button>Recycle Bin</button>
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

                                echo "<fieldset>";
                                echo "<p>".$companyName."-".$busRegistrationNo."&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;".$notification."</p>";
                                // echo "notificationid".$notificationId;
                                echo "
                                <div align='right'>
                                <button><a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=".$notificationId."'><img  src='../../../images/passengerNotifications/delete.png' ></a></button>
                                        <button>Save as Archive</button>
                                </div>
                                    
                                ";
                                echo "</fieldset><br>";
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

                <?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>