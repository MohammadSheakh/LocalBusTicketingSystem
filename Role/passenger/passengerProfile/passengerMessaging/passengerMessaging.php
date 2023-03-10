
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
                            
                                <Form novalidate  action="./passengerMessagingProcess.php" method="post">
                                <td>
                                <textarea type="textarea" id="message" name="message" value=""
                                    placeholder="Please Enter Your Message Here...  "></textarea>
                                    </td>
                                    <td>
                                    <input type="email" id="email" name="email" value=""
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

                //========================= Create  a new conversation =============================


                //========================= Show  all conversation =============================

                //========================= Reply to a conversation =============================
            ?>
            <tr>

            </tr>
            <tr>
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
                
            </tr>
                        

                    </table>
                </fieldset>