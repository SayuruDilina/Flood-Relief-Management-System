  <?php
  header('Content-Type: application/json');
  include '../config/database_con.php';
   session_start();
  if($_SERVER['REQUEST_METHOD']=='PUT'){
    if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    echo json_encode(["status"=>"error","message"=>"Please login"]);
    exit();
  }
  $user_id = $_SESSION["user_id"];
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
    

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     $sql = "UPDATE users SET
                username='$username',
                password='$hashedPassword',
                fullname='$fullname',
                contact_number='$contact_number',
                email='$email',
                NIC='$NIC',
                gender='$gender',
                street_address='$street_address',
                city='$city',
                district='$district',
                province='$province',
                DOB='$DOB'
                WHERE user_id=$user_id";

    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"Username registerd successfully"
          ]);
             exit();
    }

  }

  if($_SERVER['REQUEST_METHOD']=="GET"){
if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    echo json_encode(["status"=>"error","message"=>"Please login"]);
    exit();
  }
  $user_id = $_SESSION["user_id"];


  $sql="SELECT * FROM users where user_id=${user_id}";
  $result =$conn-> query($sql);
  if($result){
 if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo json_encode(["status" => "ok", "user" => $user]);
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "User not found"]);
        exit();
    }
 
  }
}
  ?>