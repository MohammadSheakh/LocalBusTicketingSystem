<?php 
session_start();
    include '../../passenger/database/dbConnect.php';
    $flag = false;
    if(isset($_GET['updateId'])){ // review id for updating like values 
        
        $updateId = $_GET['updateId']; // storing deleteid in a variable which i get from query parameter
    
        // query korte hobe .. already like kora ase kina ................... 
        $sqlForCheckingIfAlreadyLiked = "select * from `local_bus_ticketing_system`.`reviewlikes` where reviewId='".$updateId."' AND passenger_Id='".$_SESSION['passenger_id']."'";
        $resultForCheckingIfAlreadyLiked = mysqli_query($con, $sqlForCheckingIfAlreadyLiked); 
        if($resultForCheckingIfAlreadyLiked){
            // tar mane ekhon like kora ase .. unlike kore dite hobe 
            //while($row = mysqli_fetch_assoc($resultForCheckingIfAlreadyLiked)){
                $numrows = mysqli_num_rows($resultForCheckingIfAlreadyLiked);
                if($numrows > 0){
                    // echo $numrows;
                    //🙂 aleary like kora ase .. 
                    ////////////////////////////////////////////////////
                    //🙂 ekhon delete query likhbo 
                    $sqlForDeleteLikeStatus = "delete from `local_bus_ticketing_system`.`reviewlikes` where reviewId='".$updateId."' AND passenger_Id='".$_SESSION['passenger_id']."'"; // table id is equal to this id 

                    $resultForDeleteLikeStatus = mysqli_query($con, $sqlForDeleteLikeStatus); 
                    
                    if($resultForDeleteLikeStatus){
                        echo $sqlForDeleteLikeStatus."Delete from like status done ";
                        // Like table theke passenger ke delete kora hoise .. ekhon ... Review table er  like number 0 er cheye boro 
                        // hole 1 komate hobe ..  
                        // update query run kora lagbe ....  
                        ////////////////////////////////////////////////////////////////////////////////////////////////
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
                                    //header('location: ./home.php'); 

                                    //echo "Like Value Update Done ";///////////////////////////////////////////////
                                }
                            }else{
                                echo "Like Value Update is not Done ";
                            }
                            
                        }else{
                                die(mysqli_error($con));
                        }
                        ////////////////////////////////////////////////////////////////////////////////////////////////
                        //header('location:displayInformation.php');
                    }else{
                        // error 
                        die(mysqli_error($con));
                    }
                    ///////////////////////////////////////////////////
                }else{
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
                            }
                        }else{
                            echo "Like Value Update is not Done ";
                        }
                        
                    }else{
                            die(mysqli_error($con));
                    }
                    
                }
                
            //}
        }


    }
?>