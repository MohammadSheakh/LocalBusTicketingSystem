<?php 


// conversation create korte hobe ...  
function collectAllConversationIdIfExistForAPassenger(){
    $sql = "SELECT conversation_id FROM local_bus_ticketing_system.conversation WHERE participantEmail LIKE '%?%'";
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("s", $_SESSION["email"]);
    if($stmt -> execute() > 0){
        // true return korbo 
        // ekta conversation id return kore .. sheta session e save kore onno page e send kore dibo 
        $rows = array();
        while ($stmt->fetch()) {

            $rows[] = array('conversation_id' => $conversation_id);
        }
        $_SESSION['conversation_id_exist_from_database'] = $rows;
        return true;
    }else{
        // false return korbo ..
        return false;
    }
}
function createNewConversation($participant_email){
    $con = connectAgain();
    $sql = "insert into `local_bus_ticketing_system`.`conversation`(participantEmail) values('?')";
    $stmt = $con -> prepare($sql);
    $stmt->bind_param("s", $participant_email);
    if($stmt -> execute()){
        return true;
    }else{
        return false;
    }
}

function findConversationId($participant_email, $participant_email2){
    $con = connectAgain();
    $sql = "select conversation_id from `local_bus_ticketing_system`.`conversation` where participantEmail=? OR participantEmail=?";
    $stmt = $con -> prepare($sql);   
    $stmt->bind_param("ss", $participant_email, $participant_email2);
    if($stmt -> execute() > 0){
        // true return korbo 
        // ekta conversation id return kore .. sheta session e save kore onno page e send kore dibo 
        $rows = array();
        while ($stmt->fetch()) {

            $rows[] = array('conversation_id' => $conversation_id);
        }
        $_SESSION['conversation_id_from_database'] = $rows;
        return true;
    }else{
        // false return korbo ..
        return false;
    }
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

// function showAllConversation(){

// }
?>

