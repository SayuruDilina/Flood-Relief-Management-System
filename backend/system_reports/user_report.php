<?php
header('Content-Type: application/json');
include '../config/database_con.php';

if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if (!isset($_GET['user_id']) || $_GET['user_id'] === '') {
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "User ID is required"
        ]);
        exit();
    }

    $user_id = $_GET['user_id'];
    $sqlUser = "SELECT * FROM users WHERE user_id = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $userResult = $stmtUser->get_result();

    if ($userResult->num_rows === 0) {
        echo json_encode([
            "status" => "error",
            "message" => "User not found"
        ]);
        exit();
    }

    $user = $userResult->fetch_assoc();

   
    $sqlRelief = "SELECT * FROM relief_requests WHERE user_id = ?";
    $stmtRelief = $conn->prepare($sqlRelief);
    $stmtRelief->bind_param("i", $user_id);
    $stmtRelief->execute();
    $reliefResult = $stmtRelief->get_result();

    $relief_requests = [];
    while ($row = $reliefResult->fetch_assoc()) {
        $relief_requests[] = $row;
    }
    echo json_encode([
        "status" => "ok",
        "user" => $user,
        "relief_requests" => $relief_requests
    ]);
    exit();
}
