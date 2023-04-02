<?php 


// conversation create korte hobe ...  
function createConversation(){
    
}

function entryToMessageTable($receiverEmail, $conversation_id, $message){
    $con = connectAgain();
    // current logged in user er email $_SESSION["email"] ekhane ase ..  
    $sql = "insert into `local_bus_ticketing_system`.`message`(senderEmail, receiverEmail, conversationId, message) values(?, ?, ?, ?)";
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("isis", $_SESSION['passenger_id'],$receiverEmail, $conversation_id, $message);
    if($stmt -> execute() > 0){
        // true return korbo 
        return true;
    }else{
        // false return korbo ..
        return false;
    }



}
?>

