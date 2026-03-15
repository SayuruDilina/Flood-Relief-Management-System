<?php
header('Content-Type: application/json');
include '../config/database_con.php';

if($_SERVER['REQUEST_METHOD'] == "GET"){

    $nic = $_GET['nic'];  

    $sql = "SELECT relief_requests.*, users.nic
            FROM relief_requests
            JOIN users ON relief_requests.user_id = users.user_id
            WHERE users.nic = '$nic'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $requests = [];

        while($row = $result->fetch_assoc()){
            $requests[] = $row;
        }

        echo json_encode([
           "data" => $requests
        ]);

    }else{
        echo json_encode([
            "status" => "error",
            "message" => "No requests found for this NIC"
        ]);
    }

}
?>