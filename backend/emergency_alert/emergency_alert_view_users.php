   <?php
 header('Content-Type: application/json');
  include '../config/database_con.php';
  session_start();
if($_SERVER['REQUEST_METHOD']=='GET'){
     $data = json_decode(file_get_contents("php://input"), true);
    
    
      $sql="SELECT * FROM emergency_alerts WHERE status='active'"; 

     $result = $conn->query($sql);
    $alerts = [];
    if($result){
    

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