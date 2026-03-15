   <?php
 header('Content-Type: application/json');
  include '../config/database_con.php';
  session_start();
  if($_SERVER['REQUEST_METHOD']=='POST'){
     $data = json_decode(file_get_contents("php://input"), true);
    $message=$data['message'];
    $status="active";
    
    $sql="INSERT INTO emergency_alerts (message, status) VALUES 
       ('$message','$status')"; 

    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"emergency alert added successfully"
          ]);
        exit();
    }else{
      echo json_encode([
          "status" => "error",
          "message" => "emergency alert add failed try again"
      ]);
    }

  }

  if($_SERVER['REQUEST_METHOD']=='PUT'){
     $data = json_decode(file_get_contents("php://input"), true);
     $id=$data['id'];
    
      $sql="Update emergency_alerts SET status='inactive'  FROM emergency_alerts WHERE id=$id"; ;

    if($conn->query($sql)){
      echo json_encode([
              "status"=>"ok",
              "message" =>"emergency alert updated successfully"
          ]);
        exit();
    }else{
      echo json_encode([
          "status" => "error",
          "message" => "emergency alert updated failed try again"
      ]);
    }

  }

  if($_SERVER['REQUEST_METHOD']=='GET'){
     $data = json_decode(file_get_contents("php://input"), true);
     $id=$data['id'];
    
      $sql="SELECT * FROM emergency_alerts WHERE status='active'"; ;

     $result = $conn->query($sql);

    if($result){
        $alerts = [];

        while($row = $result->fetch_assoc()){
            $alerts[] = $row;
        }

        echo json_encode([
            "status" => "ok",
            "data" => $alerts
        ]);

    }else{
        echo json_encode([
            "status" => "error",
            "message" => "Failed to fetch alerts"
        ]);
    }

  }




  ?>