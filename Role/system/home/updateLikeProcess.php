<?php 
session_start();
    include '../../passenger/database/dbConnect.php';
    $flag = false;
    $masterFlagForDelete = false;
    if(isset($_GET['updateId'])){ // review id for updating like values 
        
        $updateId = $_GET['updateId']; // storing deleteid in a variable which i get from query parameter
    
        $sqlForCheckingIfAlreadyLiked = "select * from `local_bus_ticketing_system`.`reviewlikes` where reviewId='".$updateId."' AND passenger_Id='".$_SESSION['passenger_id']."'";
        $resultForCheckingIfAlreadyLiked = mysqli_query($con, $sqlForCheckingIfAlreadyLiked); 
        
                $numrows = mysqli_num_rows($resultForCheckingIfAlreadyLiked);
                if($numrows > 0){
                    
                    $sqlForDeleteLikeStatus = "delete from `local_bus_ticketing_system`.`reviewlikes` where reviewId=".$updateId." AND passenger_Id=".$_SESSION['passenger_id'].""; // table id is equal to this id 
                    
                    $resultForDeleteLikeStatus = mysqli_query($con, $sqlForDeleteLikeStatus); 
                    
                    if($resultForDeleteLikeStatus){
                        //echo "Update Id : ".$updateId . "  === Passenger ID => ".$_SESSION['passenger_id'];
                        //echo $sqlForDeleteLikeStatus."--------Delete from like status done----------- ";
                        echo "reviewLikes Delete Done";
                        $masterFlagForDelete = true;
                    }else{
                        // error 
                        echo "reviewLikes Delete can no be Done";
                        die(mysqli_error($con));
                    }
                    

                }else{
                    //echo "problem 2";
                    // tar mane like kora nai .. like korte hobe .. 
                    // mane hocche ekta row insert korte hobe ..   review likes table e .. pore review table e number update korte hobe .. 
                    // mane 1 plus korte hobe ..  
                    $sqlForNewLikeInsert = "insert into `local_bus_ticketing_system`.`reviewlikes`(reviewId, passenger_Id) values('.$updateId.', '".$_SESSION['passenger_id']."')";
                    $resultForNewLikeInsert = mysqli_query($con, $sqlForNewLikeInsert); 
                    if($resultForNewLikeInsert){
                        // ekhon amra review table e like er value update korbo .. mane ++ korbo 
                        // er jonno current like number age nite hobe .. then tar shathe ++ korte hobe ...
                        $sqlForCurrentLikeNumber = "select likeNumber from `local_bus_ticketing_system`.`review` where reviewId='".$updateId."'";
                        $resultForCurrentLikeNumber = mysqli_query($con, $sqlForCurrentLikeNumber); 
                        $likeNumber = "";
                        if($resultForCurrentLikeNumber){
                            while($row = mysqli_fetch_assoc($resultForCurrentLikeNumber)){
                                $likeNumber= $row['likeNumber'];
                                echo "Current Like value ".$likeNumber;
                            }
                            
                            $likeNumber++;

                            // Finally update the like number in review table .. 
                            $sqlForUpdateLikeNumber = "UPDATE `local_bus_ticketing_system`.`review` SET likeNumber='".$likeNumber."' where reviewId=".$updateId." AND passengerId='".$_SESSION['passenger_id']."'";
                            $resultForUpdateLikeNumber =  mysqli_query($con, $sqlForUpdateLikeNumber); 
                            if($resultForUpdateLikeNumber){
                                // so .. update done ... 
                                echo "After Incresing Like value ".$likeNumber;
                                //header('location: ./home.php');
                                //echo "Like Value Update Done ";//////////////////////////////////////////////////

                                //🙂😅 like ++ korle same passenger id er jonno dislike deowa ase kina check korte hobe 
                                // query korte hobe .. already like kora ase kina ................... 
                                $sqlForCheckingIfAlreadyDisLiked = "select * from `local_bus_ticketing_system`.`reviewdislikes` where reviewId='".$updateId."' AND passenger_Id='".$_SESSION['passenger_id']."'";
                                $resultForCheckingIfAlreadyDisLiked = mysqli_query($con, $sqlForCheckingIfAlreadyDisLiked); 
                                if($resultForCheckingIfAlreadyDisLiked){
                                    // tar mane ekhon like kora ase .. unlike kore dite hobe 
                                    //while($row = mysqli_fetch_assoc($resultForCheckingIfAlreadyLiked)){
                                        $numrows = mysqli_num_rows($resultForCheckingIfAlreadyDisLiked);
                                        if($numrows > 0){
                                            //🙂😅 dislike deowa thakle .. disLike -- korte hobe .. mane reviewdislikes table thekeo remove korte hobe 
                                            ///////////////////////////////////////////
                                            $sqlForDeleteLikeStatus = "delete from `local_bus_ticketing_system`.`reviewdislikes` where reviewId=".$updateId." AND passenger_Id=".$_SESSION['passenger_id'].""; // table id is equal to this id 
                                            
                                            $resultForDeleteLikeStatus = mysqli_query($con, $sqlForDeleteLikeStatus); 
                                            
                                            if($resultForDeleteLikeStatus){
                                                //echo "Update Id : ".$updateId . "  === Passenger ID => ".$_SESSION['passenger_id'];
                                                //echo $sqlForDeleteLikeStatus."--------Delete from like status done----------- ";
                                                // echo "reviewLikes Delete Done";
                                                //$masterFlagForDelete = true;
                                            }
                                            ////////////////////////////////////////////
                                            //🙂😅  plus review table thekeo dislike er number one reduce korte hobe ... 
                                            $sqlForCurrentdislikeNumber = "select dislikeNumber from `local_bus_ticketing_system`.`review` where reviewId='".$updateId."'";
                                            $resultForCurrentdislikeNumber = mysqli_query($con, $sqlForCurrentdislikeNumber); 
                                            $dislikeNumber = "";
                                            if($resultForCurrentdislikeNumber){
                                                while($row = mysqli_fetch_assoc($resultForCurrentdislikeNumber)){
                                                    $dislikeNumber= $row['dislikeNumber'];
                                                    echo "Current like number  : ".$dislikeNumber;
                                                }
                                                if($dislikeNumber > 0){
                                                    $dislikeNumber--;
                                                }
                                                
                                                // Finally update the like number in review table .. 
                                                $sqlForUpdatedislikeNumber = "UPDATE `local_bus_ticketing_system`.`review` SET dislikeNumber='".$dislikeNumber."' where reviewId=".$updateId." AND passengerId='".$_SESSION['passenger_id']."'";
                                                $resultForUpdatedislikeNumber =  mysqli_query($con, $sqlForUpdatedislikeNumber); 
                                                if($resultForUpdatedislikeNumber){
                                                    // so .. update done ...
                                                    echo "After Reducing the like number  : ".$dislikeNumber;
                                                    header('location: ./home.php'); 

                                                    //echo "Like Value Update Done ";///////////////////////////////////////////////
                                                }
                                            }else{
                                                echo "Like Value Update is not Done ";
                                            }
                                        }
                            }
                        }else{
                            echo "Like Value Update is not Done ";
                        }
                        
                    }else{
                            die(mysqli_error($con));
                    }
                }
            
            
            }}
            if($masterFlagForDelete){
                // Like table theke passenger ke delete kora hoise .. ekhon ... Review table er  like number 0 er cheye boro 
                // hole 1 komate hobe ..  
                // update query run kora lagbe ....  
                ////////////////////////////////////////////////////////////////////////////////////////////////
                //$sqlForNewLikeInsert = "insert into `local_bus_ticketing_system`.`reviewlikes`(reviewId, passenger_Id) values('.$updateId.', '".$_SESSION['passenger_id']."')";
                //$resultForNewLikeInsert = mysqli_query($con, $sqlForNewLikeInsert); 
                //if($resultForNewLikeInsert){
                    // ekhon amra review table e like er value update korbo .. mane ++ korbo 
                    // er jonno current like number age nite hobe .. then tar shathe ++ korte hobe ...
                    $sqlForCurrentLikeNumber = "select likeNumber from `local_bus_ticketing_system`.`review` where reviewId='".$updateId."'";
                    $resultForCurrentLikeNumber = mysqli_query($con, $sqlForCurrentLikeNumber); 
                    $likeNumber = "";
                    if($resultForCurrentLikeNumber){
                        while($row = mysqli_fetch_assoc($resultForCurrentLikeNumber)){
                            $likeNumber= $row['likeNumber'];
                            echo "Current like number  : ".$likeNumber;
                        }
                        if($likeNumber > 0){
                            $likeNumber--;
                        }
                        
                        // Finally update the like number in review table .. 
                        $sqlForUpdateLikeNumber = "UPDATE `local_bus_ticketing_system`.`review` SET likeNumber='".$likeNumber."' where reviewId=".$updateId." AND passengerId='".$_SESSION['passenger_id']."'";
                        $resultForUpdateLikeNumber =  mysqli_query($con, $sqlForUpdateLikeNumber); 
                        if($resultForUpdateLikeNumber){
                            // so .. update done ...
                            echo "After Reducing the like number  : ".$likeNumber;
                            header('location: ./home.php'); 

                            //echo "Like Value Update Done ";///////////////////////////////////////////////
                        }
                    }else{
                        echo "Like Value Update is not Done ";
                    }
                    
                //}else{
                //        die(mysqli_error($con));
                //}
            }else{
                echo "master flag is false";
                // ekhane kono code ki run korte hobe ???? 
                header('location: ./home.php'); 
            }
    
?>