<?php
header('Content-Type: application/json');

Database connection (update with your credentials)
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect data from POST
    $listingType = $_POST['listingType'];
    $propertyType = $_POST['propertyType'];
    $buildingType = $_POST['buildingType'];
    $listedBy = $_POST['listedBy'];
    $houseType = $_POST['houseType'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $locality = $_POST['locality'];
    $pinCode = $_POST['pinCode'];
    $area = $_POST['area'];
    $carpetArea = $_POST['carpetArea'];
    $age = $_POST['age'];
    $floorNumber = $_POST['floorNumber'];
    $furnish = $_POST['furnish'];
    $balcony = $_POST['balcony'];
    $power = $_POST['power'];
    $lift = $_POST['lift'];
    $parking = $_POST['parking'];
    $rent = $_POST['rent'];
    $securityDeposite = $_POST['securityDeposite'];
    $negotiable = $_POST['negotiable'];
    $leasePeriod = $_POST['leasePeriod'];
    $maintenanceCharges = $_POST['maintenanceCharges'];
    $availabilityDate = $_POST['availabilityDate'];
    $description = $_POST['description'];

    // Basic validation (server-side)
    if (empty($listingType) || empty($propertyType) || empty($state) || empty($city)) {
        echo json_encode(['success' => false, 'message' => 'Required fields are missing']);
        exit();
    }

    // SQL Query to insert data
    $stmt = $conn->prepare("INSERT INTO properties (listingType, propertyType, buildingType, listedBy, houseType, state, city, locality, pinCode, area, carpetArea, age, floorNumber, furnish, balcony, power, lift, parking, rent, securityDeposite, negotiable, leasePeriod, maintenanceCharges, availabilityDate, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        'sssssssssssssssssssssssss',
        $listingType,
        $propertyType,
        $buildingType,
        $listedBy,
        $houseType,
        $state,
        $city,
        $locality,
        $pinCode,
        $area,
        $carpetArea,
        $age,
        $floorNumber,
        $furnish,
        $balcony,
        $power,
        $lift,
        $parking,
        $rent,
        $securityDeposite,
        $negotiable,
        $leasePeriod,
        $maintenanceCharges,
        $availabilityDate,
        $description
    );

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => $conn->error]);
    }

    $stmt->close();
}

?>