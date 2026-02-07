  <?php
  header('Content-Type: application/json');
  include '../config/database_con.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $data = json_decode(file_get_contents("php://input"), true);
      $username=$data['username'];
      $password=$data['password'];
      $fullname=$data['fullname'];
      $contact_number=$data['contact_number'];
      $email=$data['email'];
      $NIC=$data['NIC'];
      $gender=$data['gender'];
      $street_address=$data['street_address'];
      $city=$data['city'];
      $district=$data['district'];
      $province=$data['province'];
      $DOB=$data['DOB'];
    
      if(empty($username) || empty($password) || empty($fullname) || empty($contact_number) || 
        empty($email) || empty($NIC) || empty($gender) || empty($street_address) || 
        empty($city) || empty($district) || empty($province) || empty($DOB)){
          echo json_encode([
              "status" => "error",
              "message" => "All fields are required"
          ]);
          exit();
      }
      
    $checkSql = "SELECT user_id FROM users WHERE username = ? OR email = ?";
      $stmt = $conn->prepare($checkSql);
      $stmt->bind_param("ss", $username, $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if($result->num_rows>0){
          echo json_encode([
              "status"=>"error",
              "message" =>"Username or email already exist"
          ]);
        exit();
       
      }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $sql="INSERT INTO `users` (`username`, `password`, `fullname`,
       `contact_number`, `email`, `NIC`, `gender`,
        `street_address`, `city`, `district`, `province`,
         `DOB`) VALUES('$username','$hashedPassword','$fullname',
         '$contact_number','$email','$NIC',
         '$gender','$street_address','$city',
         '$district','$province','$DOB')"; ;

    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"Username registerd successfully"
          ]);
             exit();
    }

  }
  ?>