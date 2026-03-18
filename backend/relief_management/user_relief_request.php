  <?php
  header('Content-Type: application/json');
  include '../config/database_con.php';
  session_start();
  if($_SERVER['REQUEST_METHOD']=='POST'){
  if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    echo json_encode(["status"=>"error","message"=>"Please login"]);
    exit();
  }
  $user_id = $_SESSION["user_id"];

     $data = json_decode(file_get_contents("php://input"), true);
      $type_of_relief=$data['type_of_relief'];
      $district=$data['district'];
      $devisional_secretariat=$data['devisional_secretariat'];
      $gn_devision=$data['gn_devision'];
      $contact_person_name=$data['contact_person_name'];
      $contact_number=$data['contact_number'];
      $address=$data['address'];
      $num_of_family_members=$data['num_of_family_members'];
      $flood_level=$data['flood_level'];
      $description=$data['description'];
   
    
      if(empty($type_of_relief) || empty($devisional_secretariat) || empty($contact_number) || 
        empty($num_of_family_members)  || empty($flood_level) || empty($address)
      ){
         echo json_encode([
              "status" => "error",
              "message" => " mandatory fields are required"
          ]);
          exit();
      }
  
      $sql="INSERT INTO relief_requests (type_of_relief, district,
       divisional_secretariat, gn_division, 
       contact_person_name, contact_number,
        address, num_of_family_members, flood_level
        , description, user_id) VALUES
        ('$type_of_relief','$district',
        '$devisional_secretariat','$gn_devision',
        '$contact_person_name','$contact_number',
        '$address','$num_of_family_members','$flood_level',
        '$description','$user_id')"; ;

    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"relief request registerd successfully"
          ]);
        exit();
    }else{
      echo json_encode([
          "status" => "error",
          "message" => "relief request registerd failed try again login again"
      ]);
    }

  }
//UPDATE USER SPECIFIC RELIEF REQUEST
  if($_SERVER['REQUEST_METHOD']=='PUT'){
    if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    echo json_encode(["status"=>"error","message"=>"Please login"]);
    exit();
  }
  $user_id = $_SESSION["user_id"];
      $data = json_decode(file_get_contents("php://input"), true);
      $relief_id=$data['relief_id'];
      $type_of_relief=$data['type_of_relief'];
      $district=$data['district'];
      $devisional_secretariat=$data['devisional_secretariat'];
      $gn_devision=$data['gn_devision'];
      $contact_person_name=$data['contact_person_name'];
      $contact_number=$data['contact_number'];
      $address=$data['address'];
      $num_of_family_members=$data['num_of_family_members'];
      $flood_level=$data['flood_level'];
      $description=$data['description'];
     


    $sql="UPDATE relief_requests SET type_of_relief='$type_of_relief',
    district='$district',
    divisional_secretariat='$devisional_secretariat',
    gn_division='$gn_devision',
    contact_person_name='$contact_person_name',
    contact_number='$contact_number',
    address='$address',
    num_of_family_members='$num_of_family_members',
    flood_level='$flood_level',
    description='$description',
    user_id='$user_id' WHERE relief_id=$relief_id";
    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"relief request updated successfully"
          ]);
        exit();
    }else{
      echo json_encode([
              "status"=>"error",
              "message" =>"relief request not updated"
          ]);
        exit();
    }


  }
//GET USER SPECIFIC RELIEF REQUEST 
  if($_SERVER['REQUEST_METHOD']=='GET'){

    if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    echo json_encode(["status"=>"error","message"=>"Please login"]);
    exit();
  }
  $user_id = $_SESSION["user_id"];

  
    $sql="SELECT * FROM relief_requests WHERE user_id=$user_id";
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

  if($_SERVER['REQUEST_METHOD']=='DELETE'){
   
       if (!isset($_GET['relief_id']) || $_GET['relief_id'] === '') {
        echo json_encode([
            "status" => "error",
            "message" => "relief_id is required"
        ]);
        exit();
    }

    $relief_id=$_GET['relief_id'];

    $sql="DELETE FROM relief_requests WHERE relief_id=$relief_id";
    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"relief request deleted successfully"
          ]);
        exit();
    }else{
      echo json_encode([
              "status"=>"error",
              "message" =>"relief request not deleted"
          ]);
        exit();
    }
  }
  ?>