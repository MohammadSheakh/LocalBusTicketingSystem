<?php
    if(isset($_COOKIE['status'])){
        // session_start();
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
                                <form action="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/showNotificationProcess.php" method="post" onsubmit="return getDataAgain();">
                                    <button class="button" type='submit'>
                                        <img  width='20 ' class="button" style=' border-radius:50%' src="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/images/passengerNotifications/ag.png" alt="">
                                    </button>    
                                <!-- <input class="button" type="submit"> -->
                                </form>
                            </td>
                        </tr>

                        <?php
                        
                        echo "<tr>
                        <td>";
                        // 😀 normal way
                        // $flag = getAllNotification();
                        // if($flag === true){
                            
                        //     $all_notifications = $_SESSION['all_notifications'];
                            
                        //     foreach ($all_notifications as $rowAgain) {
                        //         $notificationId= $rowAgain['notificationId'];
                        //         $notification= $rowAgain['notification'];
                        //         $busId= $rowAgain['busId'];
                        //         $passenger_id= $rowAgain['passenger_id'];
                        //         $email= $rowAgain['email'];
                        //         $employeeEmail_id= $rowAgain['employeeEmail_id'];
                        //         $employeeId= $rowAgain['employeeId'];
                        //         $companyName= $rowAgain['companyName'];
                        //         $busRegistrationNo= $rowAgain['busRegistrationNo'];
                                
                        //         echo " <div class='divInsideFieldSet'>";
                        //         echo "<p  class='divInsideFieldSet'>".$companyName."-".$busRegistrationNo."&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;".$notification."</p>";
                                
                        //         echo "
                        //         <div  class='divInsideFieldSet' align='right'>
                        //         <button class='button'><a class='button' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=".$notificationId."'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button>
                        //                 <button class='button'>Save as Archive</button>
                        //         </div>
                        //         ";
                        //         echo "</div><br>";
                                
                        //     }
                        // }
                        // echo "<div id='i2'></div>";

                        
            ?>
                    <!-- // 😀 with ajax -->
                    <div id='i2'></div>


                    </table>
                </fieldset>
                        
                <!-- <script src="./passengerNotification.js"></script> -->
                <script>
                    function getData() {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onload = function () {
                            let resp = JSON.parse(this.responseText);
                            // console.log(resp);

                            let t = "";
                            for (let i = 0; i < resp.length; i++) {
                                //console.log( typeof( resp[i].companyName));
                                t += "<div class='divInsideFieldSet'>";
                                t +=
                                    "<p  class='divInsideFieldSet'>" +
                                    resp[i].companyName +
                                    "-" +
                                    resp[i].busRegistrationNo +
                                    "&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;" +
                                    resp[i].notification +
                                    "</p>";
                                    // /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/
                                t +=
                                    "<div  class='divInsideFieldSet' align='right'><button class='button'><a class='button' href='passengerNotificationProcess.php?notificationId=" +
                                    resp[i].notificationId +
                                    "'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button><button class='button'>Save as Archive</button></div>";
                                t += "</div><br>";
                            }

                            console.log(t);
                            
                            
                            document.getElementById("i2").innerHTML = t;
                            
                            
                        };
                        xhttp.open(
                            "GET",
                            "/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/showNotificationProcess.php"
                            // true
                        );
                        xhttp.send();

                        // return false;
                    }
                    getData();
                    setInterval(getData, 4000); // mili second por por ami call korbo .


                    function getDataAgain() {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onload = function () {
                            let resp = JSON.parse(this.responseText);
                            // console.log(resp);

                            let t = "";
                            for (let i = 0; i < resp.length; i++) {
                                //console.log( typeof( resp[i].companyName));
                                t += "<div class='divInsideFieldSet'>";
                                t +=
                                    "<p  class='divInsideFieldSet'>" +
                                    resp[i].companyName +
                                    "-" +
                                    resp[i].busRegistrationNo +
                                    "&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;" +
                                    resp[i].notification +
                                    "</p>";

                                t +=
                                    "<div  class='divInsideFieldSet' align='right'><button class='button'><a class='button' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=" +
                                    resp[i].notificationId +
                                    "'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button><button class='button'>Save as Archive</button></div>";
                                t += "</div><br>";
                            }

                            console.log(t);
                            
                            
                            document.getElementById("i2").innerHTML = t;
                            
                            
                        };
                        xhttp.open(
                            "GET",
                            "/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/passengerProfile/passengerNotification/showNotificationProcess.php", false
                            // true
                        );
                        xhttp.send();

                        return false;
                    }
                </script>
            </body>

                <?php
	}
	else {
		header('location: /LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/view/authentication/login/login.php');
	}
?>

<!-- let t = "<div class='divInsideFieldSet'>";
t +=
    "<p  class='divInsideFieldSet'>" +
    resp[i].companyName +
    "-" +
    resp[i].busRegistrationNo +
    "&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;" +
    resp[i].notification +
    "</p>";

t +=
    "<div  class='divInsideFieldSet' align='right'><button class='button'><a class='button' href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/passengerNotification/passengerNotificationProcess.php?notificationId=" +
    resp[i].notificationId +
    "'><img class='button'  src='../../../images/passengerNotifications/delete.png' ></a></button><button class='button'>Save as Archive</button></div>";
t += "</div><br>"; -->