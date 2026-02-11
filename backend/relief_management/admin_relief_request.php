<?php
 header('Content-Type: application/json');
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql="SELECT * FROM relief_requests";
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

if($_SERVER['REQUEST_METHOD']=="PUT"){

  $data = json_decode(file_get_contents("php://input"), true);
  $relief_id=$data['relief_id'];
  $status=$data['status'];
  $sql="UPDATE relief_requests SET status='$status' WHERE relief_id=$relief_id";
  if($conn->query($sql)){
    echo json_encode([
            "status"=>"ok",
            "message" =>"relief request updated successfully"
        ]);
      exit();
  }else{
    echo json_encode([
        "status" => "error",
        "message" => "relief request not updated"
    ]);
  }
}


?>