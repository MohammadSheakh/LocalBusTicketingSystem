<?php
    if(isset($_COOKIE['status'])){
?>



<fieldset>
                    <legend>Messaging</legend>
                    <table>
                        <tr>
                            <td>
                            <button>Archived</button>
                            <button>Recycle Bin</button>
                            
                            </td>
                        </tr>
                        <tr>
                        <!-- //========================= Create  a new conversation ============================= -->

                                <Form novalidate  action="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/passengerMessaging/passengerMessagingProcess.php" method="post">
                                <td>
                                <textarea cols="50" rows="2" type="textarea" id="message" name="message" value=""
                                    placeholder="Please Enter Your Message Here...  "></textarea>
                                    </td>
                                    <td>
                                    <input type="email" id="receiverEmail" name="receiverEmail" value=""
                                    placeholder="Enter Receiver's email...  ">
                                    </td>
                                    <td>
                                    <button><img src="../../../images/passengerNotifications/send.png" alt=""></button></td>
                                </Form>
                                
                        </tr>
            <!-- //employeeEmail_id -------------- emp01@gmail.com 
            employeeId ------------ 1
            busId ------------- 1

            passenger email -------------- a@a.com
            passenger name -------------- Mohammad Sheakh
            passenger id --  passenger_id
            -->
            <?php
                // current logged in passenger er id jodi kono conversation id er 
                // participant email er moddhe paowa jay .. tailei amra logged in passenger ke 
                // shei conversation ta show korbo ..  

                // conversation initialize korar jonno receiver er email ta lagbe .. taile 
                // senderEmail-receiverEmail er maddhome ekta conversationId generate hobe .. 
                // then shei id er against e message table e message add hobe ..  

                

                //========================= Show  all conversation =============================

                /** Logged in user er email Conversation table er ParticipantEmail er moddhe thaklei Thaklei shekhan theke 
                 * conversation id niye .. message table e shob gula message dekhabo .. sender or receiver email logged in user
                 * er shathe mille sheta ek side e dekhabo .. na mille sheta arek side e dekhabo .. timestamp hishebe ulta hoye 
                 * ashbe ..  
                 */
                $conversationExistFlag = false;
                $conversations_id[] = [];
                $conversationIds = "";
                //$sql = "select conversation_id from `local_bus_ticketing_system`.`conversation` where participantEmail='%".$_SESSION["email"]."%' OR participantEmail='%".$_SESSION["email"]."-% OR participantEmail='%-".$_SESSION["email"]."%'";
                $sql = "SELECT conversation_id FROM local_bus_ticketing_system.conversation WHERE participantEmail LIKE '%".$_SESSION["email"]."%'";
                // '%a@a.com%'
                // echo $sql;
                $result = mysqli_query($con, $sql); 
                // $_SESSION['con']
                if($result){
                    // while($row = mysqli_fetch_assoc($result)){
                    //     $conversations_id[] = $row['conversation_id'];
                    //     $conversationExistFlag = true;
                    // }
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $conversationIds = array_column($rows, 'conversation_id');
                    $conversationExistFlag = true;
                }else{
                    // //======================================= jehetu conversation create kora nai .. tai amra conversation create korbo
                    $conversationExistFlag = false;
                    //die(mysqli_error($con));
                }
                //============================ Conversation jehetu exist kore .. taile .. conversation exist er against e 
                
                
                    
                if($conversationExistFlag){
                    // foreach ($conversations_id as $conversationId) {
                    //     // Print out each name value
                    //     //echo $conversationId . "<br>";
                    //     print_r(" ", $conversationId);
                    // }
                    $actualReceiverEmail = '';
                    foreach ($conversationIds as $convId) {
                        //echo $convId . '<br>';
                        
                        echo "<tr>
                        <td>";
                        // show conversationId er against e  message table er shob gula message dekhabo 
                        $sqlAgain = "select messageId, senderEmail, receiverEmail, message, timeStamps from `local_bus_ticketing_system`.`message` where conversationId='".$convId."'";
                        $resultAgain = mysqli_query($con, $sqlAgain);
                        if($resultAgain){
                            echo "<fieldset>";
                            while($rowAgain = mysqli_fetch_assoc($resultAgain)){
                                
                                $messageId= $rowAgain['messageId'];
                                $senderEmail= $rowAgain['senderEmail'];
                                $receiverEmail= $rowAgain['receiverEmail'];
                                $message= $rowAgain['message'];
                                $timeStamps= $rowAgain['timeStamps'];
                                
                                // echo "<p>Raida Poribohon - Dhk-Metro-Ja20-42132-1</p>"
                                if($senderEmail === $_SESSION["email"]){
                                    $actualReceiverEmail = $receiverEmail;
                                    echo "<p align='right'>
                                    ".str_replace("@gmail.com", "", $senderEmail)." : ".$message." 
                                    </p>
                                    <h6 align='right'>".$timeStamps."</h6>
                                    ";
                                }else if($receiverEmail === $_SESSION["email"]){
                                    $actualReceiverEmail = $senderEmail;
                                    echo"
                                    <p align='left'>
                                    ".str_replace("@gmail.com", "", $senderEmail)." :  ".$message." 
                                        </p>
                                        <h6 align='left'>".$timeStamps."</h6>
                                    ";
                                }
                                //else if($senderEmail !== $_SESSION["email"]){
                                //     //$receiverEmail !== $_SESSION["email"]
                                //     //$actualReceiverEmail = $receiverEmail;
                                    
                                //     echo"
                                //     <p align='right'>
                                //     ".str_replace("@gmail.com", "", $receiverEmail)." :  ".$message." 
                                //         </p>
                                //         <h6>".$timeStamps."</h6>
                                //     ";
                                // }else if($senderEmail !== $_SESSION["email"]){
                                //     //$receiverEmail === $_SESSION["email"]
                                //     //$actualReceiverEmail = $senderEmail;
                                    
                                //     echo"
                                //     <p align='right'>
                                //     ".str_replace("@gmail.com", "", $receiverEmail)." :  ".$message." 
                                //         </p>
                                //         <h6>".$timeStamps."</h6>
                                //     ";
                                // }
                                
                            }
                            echo "
                            <form novalidate action='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/passengerMessaging/passengerMessagingProcess.php' method='post'>
                            <table>
                                <tr>
                                    <td>
                                        Mohammad Sheakh 
                                    </td>
                                    <td> :</td>
                                    <td>
                                    <textarea type='textarea' name='message' id='message' rows='1' cols='20'> </textarea>
                                    </td>
                                    <td>
                                        <button><img src='../../../images/passengerNotifications/send.png'/> </button>
                                    </td>
                                    <td> 
                                        <input type='checkbox' checked name='receiverEmail' id='receiverEmail'  value='".$actualReceiverEmail."' />   
                                    </td> 
                                </tr>
                            </table>

                        </form>
                        <button><img src='../../../images/passengerNotifications/delete.png' alt=''></button>
                        <button>Save as Archive</button>
                            ";
                            echo "</fieldset><br>";
                            // echo $actualReceiverEmail;
                        }
                    }
                }
                

                //========================= Reply to a conversation =============================
            ?>
            <tr>

            </tr>
            
                      
                    </fieldset>
                </td>
            </tr>

            <!-- <tr>
                <td>
                    <fieldset>
                        <p>Raida Poribohon - Dhk-Metro-Ja20-42132-1</p>
                        
                        <p align="left">
                        Raida Poribohon : Vai Koi Apni 
                        </p>
                        <p align="right">
                        Mohammad Sheakh : Mia apne Koi ?  
                        </p>
                        <form novalidate action="./passengerMessagingProcess.php">
                            <table>
                                <tr>
                                    <td >
                                        Mohammad Sheakh 
                                    </td>
                                    <td> :</td>
                                    <td>
                                    <textarea type="textarea"> </textarea>
                                    </td>
                                    <td>
                                        <button>post</button>
                                    </td>
                                </tr>
                            </table>

                        </form>
                        <button><img src="../../../images/passengerNotifications/delete.png" alt=""></button>
                        <button>Save as Archive</button>
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