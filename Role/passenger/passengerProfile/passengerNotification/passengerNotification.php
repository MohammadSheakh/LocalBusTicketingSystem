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
                
                        echo "<tr>
                        <td>";
                        // show conversationId er against e  message table er shob gula message dekhabo 
                        $notification = '';
                        $sqlAgain = "select companyName, busRegistrationNo, notificationId, notification, busId, passenger_id, email, employeeEmail_id, employeeId from `local_bus_ticketing_system`.`notification` where passenger_Id='".$_SESSION["passenger_id"]."'";
                        $resultAgain = mysqli_query($con, $sqlAgain);
                        if($resultAgain){
                            
                            while($rowAgain = mysqli_fetch_assoc($resultAgain)){
                                echo "<fieldset>";
                                $notificationId= $rowAgain['notificationId'];
                                $notification= $rowAgain['notification'];
                                $busId= $rowAgain['busId'];
                                $passenger_id= $rowAgain['passenger_id'];
                                $email= $rowAgain['email'];
                                $employeeEmail_id= $rowAgain['employeeEmail_id'];
                                $employeeId= $rowAgain['employeeId'];
                                $companyName= $rowAgain['companyName'];
                                $busRegistrationNo= $rowAgain['busRegistrationNo'];
                                echo "<p>".$companyName."-".$busRegistrationNo."&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;".$notification."</p>";
                                echo "
                                <div align='right'>
                                <button><img  src='../../../images/passengerNotifications/delete.png' ></button>
                                        <button>Save as Archive</button>
                                </div>
                                    
                                ";
                                echo "</fieldset><br>";
                            }
                            
                            
                        }
                    
                
                

                //========================= Reply to a conversation =============================
            ?>
                    
                        

<!-- 
                        <tr>
                            <td>
                                <fieldset>
                                    <p>
                                    Raida Poribohon : Bus Number 2233 is arrived
                                    in bus stop .. 
                                    Time : 12:03pm , Date : 2:3:23
                                    </p>
                                    <button><img src="../../../images/passengerNotifications/delete.png" alt=""></button>
                                    <button>save as archive</button>
                                </fieldset>
                            </td>
                        </tr> -->
                        
                        

                    </table>
                </fieldset>

                <?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>