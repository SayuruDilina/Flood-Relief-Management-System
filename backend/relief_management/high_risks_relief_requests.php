<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT * FROM relief_requests WHERE flood_level='high' AND current_status='pending'";
$result =$conn-> query($sql);
if($result->num_rows>0){
        $relief_requests = array();
        while($row = $result->fetch_assoc()){
            $relief_requests[] = $row;
        }
        echo json_encode($relief_requests);
        exit();
    }else{
        echo json_encode([
                "status" => "error",
                "message" => "No relief requests found"
        ]);
    }
}
?>