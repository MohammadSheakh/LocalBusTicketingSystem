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

function showAllAvailableArea(){
    $con = connect();
    $sql = "select DISTINCT areaName from `local_bus_ticketing_system`.`area`";
    $stmt = $con -> prepare($sql);

    if($stmt -> execute() > 0){
        $stmt->bind_result($areaName);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('areaName' => $areaName);
        }
        $_SESSION['All_Area'] = $rows;
        $stmt->close();
        return true;
    }else{
        // echo "false"; // may be return false; 
        return false;
    }
}

function selectRouteIdAndAreaNameBasedOnStartAreaName($startAreaName){
    $con = connect();
    $sqlForRouteId = "select areaName, routeId from `local_bus_ticketing_system`.`area` where routeId IN (select routeId from `local_bus_ticketing_system`.`area` where areaName= ? )";
    $stmt = $con -> prepare($sqlForRouteId);   
    $stmt->bind_param("s", $startAreaName);
    if($stmt -> execute() > 0){
        $stmt->bind_result($areaName, $routeId);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('areaName' => $areaName, 'routeId' => $routeId);
        }
        $_SESSION['AreaName_And_RouteId'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }      
}

function showCompanyName($routeIdVariable){
    $con = connect();
    $sql = "select companyName from `local_bus_ticketing_system`.`bus` where routeId = ? ";
    $stmt = $con -> prepare($sql); 
    $stmt->bind_param("i", $routeIdVariable); /// may be eita integer hobe ... 
    if($stmt -> execute() > 0){
        $stmt->bind_result($companyName);
        $rows = array();
        while ($stmt->fetch()) {
            $rows[] = array('companyName' => $companyName);
        }
        $_SESSION['Company_Name'] = $rows;
        $stmt->close();
        return true;
    }else{
        return false;
    }
}
?>