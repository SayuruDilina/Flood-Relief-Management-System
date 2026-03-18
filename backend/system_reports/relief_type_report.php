<?php
header('Content-Type: application/json');
include '../config/database_con.php';
if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if (!isset($_GET['type_of_relief']) || $_GET['type_of_relief'] === '') {
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "User ID is required"
        ]); 
        exit();
    }

    $type_of_relief = $_GET['type_of_relief'];
    $sqlRelief = "SELECT rr.user_id,
    rr.flood_level,
    rr.current_status,
    u.fullname,
    rr.district,
    u.contact_number
   FROM relief_requests as rr 
    INNER JOIN users as u ON rr.user_id = u.user_id WHERE rr.type_of_relief = ?";


    $stmtRelief = $conn->prepare($sqlRelief);
    $stmtRelief->bind_param("s", $type_of_relief);
    $stmtRelief->execute();
    $reliefResult = $stmtRelief->get_result();
   


    $relief_requests = [];
    while ($row = $reliefResult->fetch_assoc()) {
        $relief_requests[] = $row;
    }
      $sqlCount = "SELECT COUNT(DISTINCT user_id) AS total_registered_users
                 FROM relief_requests
                 WHERE type_of_relief = ?";

    $stmtCount = $conn->prepare($sqlCount);
    $stmtCount->bind_param("s", $type_of_relief);
    $stmtCount->execute();
    $countResult = $stmtCount->get_result();
    $countRow = $countResult->fetch_assoc();
    $total_users = (int)$countRow['total_registered_users'];
    $stmtCount->close();
  
    $floodLevelHighCounts = "SELECT COUNT(*) AS high_flood_count
                 FROM relief_requests
                 WHERE type_of_relief = ? AND flood_level = 'High'";
 
     $stmtFloodCount = $conn->prepare($floodLevelHighCounts);
    $stmtFloodCount->bind_param("s", $type_of_relief);
    $stmtFloodCount->execute();
    $floodCountResult = $stmtFloodCount->get_result();
    $floodCountRow = $floodCountResult->fetch_assoc();
    $total_high_flood = (int)$floodCountRow['high_flood_count'];
    $stmtFloodCount->close();
    
    
    $totalReleifReqestCount= "SELECT COUNT(*) AS total_count
                 FROM relief_requests
                 WHERE type_of_relief = ?";

    $stmtCount = $conn->prepare($totalReleifReqestCount);
    $stmtCount->bind_param("s", $type_of_relief);
    $stmtCount->execute();
    $countResult = $stmtCount->get_result();
    $countRow = $countResult->fetch_assoc();
    $total_count = (int)$countRow['total_count'];
    $stmtCount->close();
 
    echo json_encode([
        "status" => "ok",
        "relief_requests" => $relief_requests,
        "total_registered_users" => $total_users,
        "total_high_flood"=> $total_high_flood,
        "total_count" => $total_count
    ]);
    exit();
}
