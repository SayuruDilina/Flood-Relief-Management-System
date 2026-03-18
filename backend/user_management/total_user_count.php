<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT COUNT(*)  AS total_users  FROM users";
$result =$conn-> query($sql);
if($result){
       $row = $result->fetch_assoc();
         echo json_encode([
            "total_users" => (int)$row['total_users']
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