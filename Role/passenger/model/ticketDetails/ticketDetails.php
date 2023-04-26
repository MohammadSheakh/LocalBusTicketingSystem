<?php 

function connect() {
    $con = new mysqli("localhost", "root", "", "local_bus_ticketing_system"); // as i am not changing my password so empty
    // last one is database name 
    
    if(!$con){
        // show me an error 
        die("Error From Database : ".mysqli_error($con)); /// session e save kore front end e error dekhate hobe 
    }
    //echo "Connection Successful with local_bus_ticketing_system";
    return $con;
}

// selectSeatNoAndSeatStatusByBusId();$_SESSION['busId']
// selectPerKMCostAndTollCostByRouteId(); $_SESSION['routeId']

//  selectAreaIndexByStartAreaNameAndRouteId(); // $_SESSION['startArea'] ... $_SESSION['routeId']

function selectSeatNoAndSeatStatusByBusId(){
    $con = connect();
    $sqlForRouteId = "select seatNo, seatStatus from `local_bus_ticketing_system`.`ticket` where busId= ? ";
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("i", $_SESSION['busId']); // busId string o hoite pare ..   
    if($stmt -> execute() > 0){
        $stmt->bind_result($seatNo, $seatStatus);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('seatNo' => $seatNo,  'seatStatus' => $seatStatus);
        }
        $_SESSION['seatNo_And_seatStatus'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }  
}

function selectSeatNoAndSeatStatusByBusIdAndPassengerId(){
    $con = connect();
    $sqlForRouteId = "select seatNo, seatStatus from `local_bus_ticketing_system`.`ticket` where busId= ? AND passengerId = ?";
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("ii", $_SESSION['busId'], $_SESSION['passenger_id']); // busId string o hoite pare ..   
    if($stmt -> execute() > 0){
        $stmt->bind_result($seatNo, $seatStatus);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('seatNo' => $seatNo,  'seatStatus' => $seatStatus);
        }
        $_SESSION['seatNo_And_seatStatus'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }  
}

function selectPerKMCostAndTollCostByRouteId(){
    $con = connect();
    $sqlForRouteId = "select perKmCost, tollCost from `local_bus_ticketing_system`.`route` where routeId= ?";
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("i", $_SESSION['routeId']); //   routeId maybe integer .. string o hoite pare ..  
    if($stmt -> execute() > 0){
        $stmt->bind_result($perKmCost, $tollCost);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('perKmCost' => $perKmCost, 'tollCost' => $tollCost);
        }
        $_SESSION['perKmCost_And_tollCost'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }  
}

function selectAreaIndexByStartOrDestAreaNameAndRouteId($areaVariable){
    $con = connect();
    $sqlForRouteId = 'select areaIndex from `local_bus_ticketing_system`.`area`where areaName= ? AND routeId= ?';
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("si", $areaVariable, $_SESSION['routeId']); // date er jonno ki string kaj korbe kina ke jane ..  
    if($stmt -> execute() > 0){
        $stmt->bind_result($areaIndex);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('areaIndex' => $areaIndex);
        }
        $_SESSION['Area_Index'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }  
}


function calculateDistance($skipStartAreaPreviousDistance){
    $con = connect();
    $sqlForRouteId = 'select distanceFromPrevArea from `local_bus_ticketing_system`.`area` where ( areaIndex BETWEEN ? AND ? ) AND routeId= ?';
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("iii", $skipStartAreaPreviousDistance, $_SESSION["destinationAreaIndex"], $_SESSION['routeId']); // may be 3 tai integer .. 
    if($stmt -> execute() > 0){
        $stmt->bind_result($distanceFromPrevArea);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('distanceFromPrevArea' => $distanceFromPrevArea);
        }
        $_SESSION['distance_From_Prev_Area'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }  
}



?>