<?php
header('Content-Type: application/json');
include '../config/database_con.php';

if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if (!isset($_GET['district']) || $_GET['district'] === '') {
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "User ID is required"
        ]);
        exit();
    }

    $district = $_GET['district'];
   $sqlRelief = "
    SELECT 
        rr.user_id,
        rr.type_of_relief,
        rr.current_status,
        rr.flood_level,
        u.fullname,
        u.contact_number
    FROM relief_requests AS rr
    INNER JOIN users AS u ON rr.user_id = u.user_id
    WHERE TRIM(rr.district) = TRIM(?)
";




    $stmtRelief = $conn->prepare($sqlRelief);
    $stmtRelief->bind_param("s", $district);
    $stmtRelief->execute();
    $reliefResult = $stmtRelief->get_result();
  
 $relief_requests = [];
    while ($row = $reliefResult->fetch_assoc()) {
        $relief_requests[] = $row;
    }
  
   
      $sqlCount = "SELECT COUNT(DISTINCT user_id) AS total_registered_users
                 FROM relief_requests
                 WHERE district = ?";
    


    $stmtCount = $conn->prepare($sqlCount);
    $stmtCount->bind_param("s", $district);
    $stmtCount->execute();
    $countResult = $stmtCount->get_result();
    $countRow = $countResult->fetch_assoc();
    $total_users = (int)$countRow['total_registered_users'];
    $stmtCount->close();

    $floodLevelHighCounts = "SELECT COUNT(*) AS high_flood_count
                 FROM relief_requests
                 WHERE district = ? AND flood_level = 'High'";
 
     $stmtFloodCount = $conn->prepare($floodLevelHighCounts);
    $stmtFloodCount->bind_param("s", $district);
    $stmtFloodCount->execute();
    $floodCountResult = $stmtFloodCount->get_result();
    $floodCountRow = $floodCountResult->fetch_assoc();
    $total_high_flood = (int)$floodCountRow['high_flood_count'];
    $stmtFloodCount->close();
    

    $foodRequestCounts = "SELECT COUNT(*) AS food_request_count
                 FROM relief_requests
                 WHERE district = ? AND type_of_relief = 'Food'";


    $stmtFoodCount = $conn->prepare($foodRequestCounts);
    $stmtFoodCount->bind_param("s", $district);
    $stmtFoodCount->execute();
    $foodCountResult = $stmtFoodCount->get_result();
    $foodCountRow = $foodCountResult->fetch_assoc();
    $total_food_request = (int)$foodCountRow['food_request_count'];
    $stmtFoodCount->close();

    $waterRequestCounts = "SELECT COUNT(*) AS water_request_count
                 FROM relief_requests
                 WHERE district = ? AND type_of_relief = 'Water'";


    $stmtWaterCount = $conn->prepare($waterRequestCounts);
    $stmtWaterCount->bind_param("s", $district);
    $stmtWaterCount->execute();
    $waterCountResult = $stmtWaterCount->get_result();
    $waterCountRow = $waterCountResult->fetch_assoc();
    $total_water_request = (int)$waterCountRow['water_request_count'];
    $stmtWaterCount->close();

    $medicineRequestCounts = "SELECT COUNT(*) AS medicine_request_count
                 FROM relief_requests
                 WHERE district = ? AND type_of_relief = 'Medicine'";


    $stmtMedicineCount = $conn->prepare($medicineRequestCounts);
    $stmtMedicineCount->bind_param("s", $district);
    $stmtMedicineCount->execute();
    $medicineCountResult = $stmtMedicineCount->get_result();
    $medicineCountRow = $medicineCountResult->fetch_assoc();
    $total_medicine_request = (int)$medicineCountRow['medicine_request_count'];
    $stmtMedicineCount->close();

    $shelterRequestCounts = "SELECT COUNT(*) AS shelter_request_count
                 FROM relief_requests
                 WHERE district = ? AND type_of_relief = 'Shelter'";


    $stmtShelterCount = $conn->prepare($shelterRequestCounts);
    $stmtShelterCount->bind_param("s", $district);
    $stmtShelterCount->execute();
    $shelterCountResult = $stmtShelterCount->get_result();
    $shelterCountRow = $shelterCountResult->fetch_assoc();
    $total_shelter_request = (int)$shelterCountRow['shelter_request_count'];
    $stmtShelterCount->close();
    echo json_encode([
        "status" => "ok",
        "relief_requests" => $relief_requests,
       "total_registered_users" => $total_users,
       "total_high_flood"=> $total_high_flood,
       "total_food_request" => $total_food_request,
       "total_water_request" => $total_water_request,
       "total_medicine_request" => $total_medicine_request,
       "total_shelter_request" => $total_shelter_request
    ]);
    exit();
}
