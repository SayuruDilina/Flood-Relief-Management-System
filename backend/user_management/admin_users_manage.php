<?php
 header('Content-Type: application/json');
include '../config/database_con.php';
//GET ALL USERS
if($_SERVER['REQUEST_METHOD']=="GET"){

  $sql="SELECT * FROM users";
  $result =$conn-> query($sql);
  if($result->num_rows>0){
    $users = array();
    while($row = $result->fetch_assoc()){
      $users[] = $row;
    }
    echo json_encode($users);
    exit();
  }else{
    echo json_encode([
        "status" => "error",
        "message" => "No users found"
    ]);
  }
}
// DELETE SPECIFIC USER 
if($_SERVER['REQUEST_METHOD']=="DELETE"){
   if (!isset($_GET['user_id']) || $_GET['user_id'] === '') {
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "User ID is required"
        ]);
        exit();
    }
  $user_id=$_GET['user_id'];
  $sql="DELETE FROM users WHERE user_id=$user_id";
  if($conn->query($sql)){
    echo json_encode([
            "status"=>"ok",
            "message" =>"user acount deleted successfully"
        ]);
      exit();
  }else{
    echo json_encode([
        "status" => "error",
        "message" => "user account not deleted"
    ]);
  }
}


?>