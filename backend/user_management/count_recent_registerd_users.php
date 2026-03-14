<?php
include '../config/database_con.php';

if($_SERVER['REQUEST_METHOD']=="GET"){
    $sql = "SELECT COUNT(*) AS total_users
        FROM users
        WHERE DATE(created_at) = CURDATE() - INTERVAL 1 DAY";
    $result =$conn-> query($sql);
    if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "total_users" => (int)$row['total_users']
        ]);
        exit();
    }else{
        echo json_encode([
             "total_users" => "0" 
        ]);
    }
}
?>