<?php
 header('Content-Type: application/json');
include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
$sql = "SELECT relief_requests.*,users.nic AS NIC
        FROM relief_requests
        JOIN users ON relief_requests.user_id = users.user_id";
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
  // if (!isset($_GET['relief_id']) || $_GET['relief_id'] === '' ) {
  //       echo json_encode([
  //           "status" => "error",
  //           "message" => "relief_id is required"
  //       ]);
  //       exit();
  //   }
  $relief_id=$data['relief_id'];
  $status=$data['status'];
 // $status="viewed";
  $sql="UPDATE relief_requests SET current_status='$status' WHERE relief_id=$relief_id";
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