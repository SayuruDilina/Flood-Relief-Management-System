<?php
header('Content-Type: application/json');
include '../config/database_con.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$data = json_decode(file_get_contents("php://input"), true);
    $username=$data['username'];
    $password=$data['password'];

    if($username=="" || $password=="" ){
        echo json_encode([
            "status"=>"error",
            "message" =>"All fields are required"
        ]);
        exit();
    }


       $sql = "SELECT user_id, username, password, role FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows == 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid username or password"
        ]);
        exit();
    }

    $user = $result->fetch_assoc();

    
    if (!password_verify($password, $user['password'])) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid  password"
        ]);
        exit();
    }

 $_SESSION["user_id"] =  $user['user_id'];
    echo json_encode([
        "status" => "success",
        "message" => "Login successful",
        "user_id" => $user['user_id'],
        "username" => $user['username'],
        "role" => $user['role']
    ]);

    exit();


}


?>