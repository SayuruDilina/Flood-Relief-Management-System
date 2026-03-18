  <?php
  header('Content-Type: application/json');
  include '../config/database_con.php';
if($_SERVER['REQUEST_METHOD']=='PUT'){
      $data = json_decode(file_get_contents("php://input"), true);
      $username=$data['username'];
      $newpassword=$data['password'];
       $NIC=$data['NIC'];
     
    
      if(empty($username) || empty($newpassword) ||empty($NIC)){
          echo json_encode([
              "status" => "error",
              "message" => "All fields are required"
          ]);
          exit();
      }
    

    $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);

     $sql = "UPDATE users SET  password='$hashedPassword' WHERE username='$username' AND NIC='$NIC'";

   if($conn->query($sql)){
    if($conn->affected_rows > 0){
       
        echo json_encode([
            "status" => "ok",
            "message" => "Password updated successfully"
        ]);
    } else {
        
        echo json_encode([
            "status" => "error",
            "message" => "Invalid credentials"
        ]);
    }
    exit();
} else {
    
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong"
    ]);
    exit();
}

  }
