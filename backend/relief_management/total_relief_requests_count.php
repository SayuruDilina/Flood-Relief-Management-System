<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT COUNT(*) AS tot_count FROM relief_requests";
$result =$conn-> query($sql);
if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "total_cases" => (int)$row['tot_count']
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