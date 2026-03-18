<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT COUNT(*) AS total_medicine_count FROM relief_requests WHERE type_of_relief='Medicine'";
$result =$conn-> query($sql);
if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "total_medicine_count" => (int)$row['total_medicine_count']
        ]);
        exit();
    }else{
        echo json_encode([
         "total_medicine_count" =>"0"
        ]);
    }
}
?>