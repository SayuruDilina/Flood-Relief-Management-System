<?php
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT relief_requests.*, users.nic AS NIC
FROM relief_requests
JOIN users ON relief_requests.user_id = users.user_id
WHERE relief_requests.flood_level = 'high'
AND relief_requests.current_status = 'pending'";
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