<?php
        session_start();
        include '../../database/dbConnect.php';

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $flag = true;

            
            

            // Account Information 
            $receiverEmail = sanitize($_POST['receiverEmail']);
            $message = sanitize($_POST['message']);

            // if input form is empty then show some specific error 
            
            if(empty($receiverEmail)){
                echo "please fill up the email form";
                $flag = false;
            }else{
                // email er formatting thik ase kina check korbo 
                if(!filter_var($receiverEmail, FILTER_VALIDATE_EMAIL)){
                    echo "This is not correct email format ";
                    $flag = false;
                }
            }
            if(empty($message)){
                echo "please fill up the message form";
                $flag = false;
            }

            if($flag === true){


                // make participant email 
                $participant_email = $_SESSION["email"]."-".$receiverEmail;
                $participant_email2 = $receiverEmail."-".$_SESSION["email"];

                //======================== Check if already conversation exist or not 
                $conversationExistFlag = false;
                $conversation_id = '';
                $sql = "select conversation_id from `local_bus_ticketing_system`.`conversation` where participantEmail='".$participant_email."' OR participantEmail='".$participant_email2."'";
                $result = mysqli_query($con, $sql); 
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $conversation_id= $row['conversation_id'];
                        $conversationExistFlag = true;
                    }
                }else{
                    // //======================================= jehetu conversation create kora nai .. tai amra conversation create korbo
                    $conversationExistFlag = false;
                    //die(mysqli_error($con));
                }
            

                    //========================= Create  a new conversation =============================
                    // First Conversation Create  ..  

                if($conversationExistFlag == false){
                    // conversation create korte hobe and message table e entry dite hobe .. 
                    $sql = "insert into `local_bus_ticketing_system`.`conversation`(participantEmail) values('$participant_email')";
                    $result = mysqli_query($con, $sql); // connection and query variable 
                    if($result){

                        // ekhon amra message table e entry dibo 🙂🙂 ... 
                        // jei conversation ta create hoilo .. shetar id ta lagbe .. ekhon result er moddhe ki amra sheta pabo ? 
                        

                        //header('location: ./passengerMessaging.php');
                        
                    }else{
                        echo "we don't found a conductor with given email address";
                        header('location: ./passengerMessaging.php');
                        die(mysqli_error($con));
                    }

                    //////////////////////////////////////////////////// ekhon query kore amra conversation id ta ber kore niye ashbo... 
                    $conversation_id = '';
                    $sql = "select conversation_id from `local_bus_ticketing_system`.`conversation` where participantEmail='".$participant_email."' OR participantEmail='".$participant_email2."'";
                    $result = mysqli_query($con, $sql); 
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $conversation_id= $row['conversation_id'];
                        }
                    }else{
                        // error 
                        die(mysqli_error($con));
                    }
                    //////////////////////////////////////////////////////
                    // ekhane amra message table e entry dibo ... 
                    $sql = "insert into `local_bus_ticketing_system`.`message`(senderEmail, receiverEmail, conversationId, message) values('".$_SESSION["email"]."', '".$receiverEmail."','".$conversation_id."','".$message."')";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                        //////////////////// Submission done 
                    }else{
                        echo "we don't found a conductor with given email address";
                        header('location: ./passengerMessaging.php');
                        die(mysqli_error($con));
                    }
                }
                
                if($conversationExistFlag){
                    //////////////////////////////////////////////////////
                    // ekhane amra message table e entry dibo ... 
                    $sql = "insert into `local_bus_ticketing_system`.`message`(senderEmail, receiverEmail, conversationId, message) values('".$_SESSION["email"]."', '".$receiverEmail."','".$conversation_id."','".$message."')";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php');
                    //////////////////// Submission done 
                    }else{
                        echo "we don't found a conductor with given email address";
                        header('location: ./passengerMessaging.php');
                        die(mysqli_error($con));
                    }
                    ///////////////////////////////////////////////////////
                }

                
                // //////////////////////////////////////////////////// ekhon query kore amra conversation id ta ber kore niye ashbo... 
                // $conversation_id = '';
                // $sql = "select conversation_id from `local_bus_ticketing_system`.`conversation` where participantEmail='".$participant_email."' OR participantEmail='".$participant_email2."'";
                // $result = mysqli_query($con, $sql); 
                // if($result){
                //     while($row = mysqli_fetch_assoc($result)){
                //         $conversation_id= $row['conversation_id'];
                //     }
                // }else{
                //     // error 
                //     die(mysqli_error($con));
                // }
                //////////////////////////////////////////////////////
                // ekhane amra message table e entry dibo ... 
        //         $sql = "insert into `local_bus_ticketing_system`.`message`(senderEmail, receiverEmail, conversationId, message) values('".$_SESSION["email"]."', '".$receiverEmail."','".$conversation_id."','".$message."')";
        //         $result = mysqli_query($con, $sql);
        //         if($result){
        //             header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php');
        //  //////////////////// Submission done 
        //         }else{
        //             echo "we don't found a conductor with given email address";
        //             header('location: ./passengerMessaging.php');
        //             die(mysqli_error($con));
        //         }
        //         ///////////////////////////////////////////////////////

            }
        }else{
            // ekta error set kore dite hobe 
            header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php');
        }

        function sanitize($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>