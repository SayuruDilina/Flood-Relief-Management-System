<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT COUNT(*) FROM relief_requests WHERE current_status='pending'";
$result =$conn-> query($sql);
if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "pending_cases" => (int)$row['pending_cases']
        ]);
        exit();
    }else{
        echo json_encode([
                "status" => "error",
                "message" => "No results found"
        ]);
    }
}
?>