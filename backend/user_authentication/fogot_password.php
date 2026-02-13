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
      echo json_encode([
              "status"=>"ok",
              "message" =>"password updated successfully"
          ]);
             exit();
    }else{
        echo json_encode([
            "status" => "error",
            "message" => "Invalid credintials"
        ]);
        exit();
    }

  }
