<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT COUNT(*) FROM relief_requests WHERE flood_level='high'";
$result =$conn-> query($sql);
if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "total_cases" => (int)$row['total_cases']
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