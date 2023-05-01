<?php
        $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
        // last one is database name 

        if($con){
            
        }else{
            
            die("Error From Database : ".mysqli_error($con));
        }
    if(isset($_COOKIE['status'])){
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="passengerMessaging.css">
    <style>
        .description {
            /* margin: 0 auto;
            width: 80%;
            height: 300px;
            overflow-x: hidden;
            overflow-y: scroll;

            box-sizing: border-box;

            border: 1px solid rgb(202, 201, 201);
            box-shadow: 3px 3px 4px gray;
            border-radius: 5px; */

            border-radius:8px;
            padding : 8px;
            width : auto;
            height : 200px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .description::-webkit-scrollbar {
            border-radius: 25px !important;
        }

        .description::-webkit-scrollbar-thumb {
            background: linear-gradient(#833ab4, #fd1d1d, #fcb045) !important;
            border-radius: 25px !important;
        }
        .singleMessage{
            /* height: auto; */
            /* min-width : 100px; */
            /* background-color : red; */
        }
        /* Tooltip container */
        .tooltip {
        position: relative;

        /* display: inline-block; */
        }

        /* Tooltip text */
        .tooltiptext {
        visibility: hidden;
        width: auto;
        background-color: #0f2920;
        color: white;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
        left: 170px;
        top: -45px;
        /* bottom: 100%;
        left: 50%; */
        margin-left: -60px;
        }

        /* Show the tooltip text when you mouse over the tooltip container */
        .tooltip:hover .tooltiptext {
        visibility: visible;
        }
        .rightSingleMessage{
            text-align: right;
            /* width: 200px;
            height: auto;
            border : 1px solid black; */
        }
        .leftSingleMessage{
            text-align: left;
        }

        #hidden-div {
            display: none;
        }

        #hidden-div:target {
            display: block; 
        }
        .btn{
            border: none;
            
        }

        #myDiv {
        display: none; /* hide the div by default */
        }



        

    </style>
</head>
<body>

<fieldset class="fieldSet">
        <legend class="legend">Messaging</legend>
        <table>
            <tr>
                <td>
                <button class='button'>Archived</button>
                <button  class='button'>Recycle Bin</button>
                
                </td>
            </tr>
            <tr>
            <!-- //========================= Create  a new conversation ============================= -->

                    <Form novalidate  action="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerMessaging/passengerMessagingProcess.php" method="post">
                    <td>
                    <textarea class='textBox' cols="50" rows="2" type="textarea" id="message" name="message" value=""
                        placeholder="Please Enter Your Message Here...  "></textarea>
                        </td>
                        <td>
                        <input class='textBox' type="email" id="receiverEmail" name="receiverEmail" value=""
                        placeholder="Enter Receiver's email...  ">
                        </td>
                        <td>
                        <button class="button"><img class='button' src="../../../images/passengerNotifications/send.png" alt=""></button></td>
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
                    $conversationId = '';
                    $actualReceiverEmail = '';
                    foreach ($conversationIds as $convId) {
                        //echo $convId . '<br>';
                        
                        echo "<tr>
                        <td>";
                        // show conversationId er against e  message table er shob gula message dekhabo 
                        $sqlAgain = "select conversationId, messageId, senderEmail, receiverEmail, message, timeStamps from `local_bus_ticketing_system`.`message` where conversationId='".$convId."'";
                        $resultAgain = mysqli_query($con, $sqlAgain);
                        if($resultAgain){
                            // ei fieldset tar height width set korte hobe .. 
                            // scroll korar option thakte hobe ..  
                            // echo "<fieldset class='conversation'>";
                            //echo "<div style='border: 1px solid white; width : 320px; border-radius:8px;'><div  style='border-radius:8px; padding : 8px; width : auto; height : 200px; overflow-y: scroll;' >";
                            echo "<div style='border: 1px solid white; width : 320px; border-radius:8px;'><div class='description'>";
                            while($rowAgain = mysqli_fetch_assoc($resultAgain)){
                                $conversationId = $rowAgain['conversationId'];
                                $messageId= $rowAgain['messageId'];
                                $senderEmail= $rowAgain['senderEmail'];
                                $receiverEmail= $rowAgain['receiverEmail'];
                                $message= $rowAgain['message'];
                                $timeStamps= $rowAgain['timeStamps'];
                                
                                if($senderEmail === $_SESSION["email"]){
                                    $actualReceiverEmail = $receiverEmail;
                                    echo "<div class='tooltip'><p class='legend rightSingleMessage  ' >
                                    ".str_replace("@gmail.com", "", $senderEmail)." : ".$message." 
                                    <span> <button class='btn' id='toggleBtn'><img  src='../../../images/passengerNotifications/option.png' ></button> </span>    
                                    </p>
                                    <h6 style='color:rgb(138, 135, 135);' class='legend  rightSingleMessage tooltiptext' >".$timeStamps."</h6>
                                    </div>
                                    <div id='myDiv'>This is the div to show/hide.</div>
                                    ";
                                }else if($receiverEmail === $_SESSION["email"]){
                                    $actualReceiverEmail = $senderEmail;
                                    echo"
                                    <div class='tooltip'>
                                    
                                    <p class='legend leftSingleMessage' >
                                    ".str_replace("@gmail.com", "", $senderEmail)." :  ".$message." 
                                        <span> <button class='btn'><img   src='../../../images/passengerNotifications/option.png' ></button> </span>    
                                    </p>
                                        <h6 style='color:rgb(138, 135, 135);' class='legend leftSingleMessage tooltiptext' >".$timeStamps."</h6>
                                       
                                    </div>
                                        ";
                                }
                                
                            }
                            // <td>
                            //             Mohammad Sheakh 
                            //         </td>
                            //         <td> :</td>
                            echo "

                            </div>
                            <div>
                            <form novalidate action='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerMessaging/passengerMessagingProcess.php' method='post'>
                            <table>
                                <tr>
                                
                                <td> </td>
                                    <td>
                                    <textarea class='textBox' type='textarea' name='message' id='message' rows='1' cols='32'> </textarea>
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
                        
                        <button class='button' style='margin-left:3px; margin-bottom:3px;'><a class='button' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerMessaging/conversationDeleteProcess.php?conversationId=".$conversationId."'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button>
                        <button class='button'>Save as Archive</button>
                            ";
                            // <button><img src='../../../images/passengerNotifications/delete.png' alt=''></button>
                            //echo "</fieldset><br>";
                            echo "</div> </div><br>";
                            
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

            
                    </table>
                </fieldset>
                <script>
                    window.onload = function() {
                        var descriptionDiv = document.getElementByClass("description");
                        descriptionDiv.scrollTop = descriptionDiv.scrollHeight;
                    }

                    // const toggleBtn = document.getElementById("toggleBtn");
                    // const myDiv = document.getElementById("myDiv");

                    // toggleBtn.addEventListener("click", function() {
                    // if (myDiv.style.display === "none") {
                    //     myDiv.style.display = "block"; // show the div
                    // } else {
                    //     myDiv.style.display = "none"; // hide the div
                    // }
                    // });
                    // ////////////////////////////////////////////

                    // const buttons = document.querySelectorAll('tooltip btn');
                    // const divs = document.querySelectorAll('tooltip #myDiv');
                    // buttons.forEach((button, index) => {
                    //     button.id = `button-${index+1}`;
                    //     divs[index].id = `div-${index+1}`;
                    // });
                    // // Add click event listeners to each button
                    // buttons.forEach((button) => {
                    // button.addEventListener('click', () => {
                    //     // Get the corresponding div by button's ID
                    //     const div = document.querySelector(`#divs #div-${button.id.split('-')[1]}`);
                        
                    //     // Toggle the visibility of the div
                    //     div.classList.toggle('hidden');
                    // });
                    // });
                    // Get the button element by ID

                    // Get all the buttons with class "btn"
var buttons = document.querySelectorAll('btn');

// Loop through each button and add a click event listener
buttons.forEach(function(button, index) {
  button.addEventListener('click', function() {
    // Find the corresponding div with an ID that matches "myDiv" + the current index
    var div = document.getElementById('myDiv' + (index + 1));
    // Toggle the visibility of the div
    if (div.style.display === 'none') {
      div.style.display = 'block';
    } else {
      div.style.display = 'none';
    }
  });
});
                </script>
            </body>
                <?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/login/login.php');
	}
?>