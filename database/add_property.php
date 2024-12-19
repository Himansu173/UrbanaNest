<?php
require_once "dbconnect.php";
session_start();


if (isset($_POST['submit'])) {
    // Collect data from POST
    $userId = $_SESSION['userId'];
    $listingType = $_POST['listingType'];
    $propertyType = $_POST['propertyType'];
    $buildingType = $_POST['buildingType'];
    $listedBy = $_POST['listedBy'];
    $houseType = $_POST['houseType'];
    $state = $_POST['stateProperty'];
    $city = $_POST['cityProperty'];
    $locality = $_POST['locality'];
    $pinCode = $_POST['pinCode'];
    $area = $_POST['area'] . " sq.ft";
    $carpetArea = $_POST['carpetArea'] . " sq.ft";
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

    // SQL Query to insert data
    $stmt = $conn->prepare("INSERT INTO property (uid,listing_type, property_type, building_type, listed_by, house_type,property_age,balcony,area,carpet_area,parking,furnishing_type,power_backup,lift,floor,date_of_available,description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        'issssssssssssssss',
        $userId,
        $listingType,
        $propertyType,
        $buildingType,
        $listedBy,
        $houseType,
        $age,
        $balcony,
        $area,
        $carpetArea,
        $parking,
        $furnish,
        $power,
        $lift,
        $floorNumber,
        $availabilityDate,
        $description
    );

    if ($stmt->execute()) {
        $stmt = $conn->prepare("SELECT pid FROM property WHERE uid = $userId ORDER BY pid DESC LIMIT 1");
        
        if(!$stmt->execute()){
            die($conn->error);
        }
        $result = $stmt->get_result();
        
        if($result->num_rows != 0){
            $property = $result-> fetch_assoc();
            $pid = $property['pid'];
            $qry1 = "INSERT INTO finance_details(pid,rent_amount,security_deposit,lease_period,m_charges,negotiable) values(?,?,?,?,?,?)";
            $qry2 = "INSERT INTO address(pid,state,city,locality,pincode) values(?,?,?,?,?)";
            $stmt1 = $conn->prepare($qry1);
            $stmt2 = $conn->prepare($qry2);
            // $hash_password = password_hash($password,PASSWORD_BCRYPT);
            $stmt1->bind_param("isssss",$pid,$rent,$securityDeposite,$leasePeriod,$maintenanceCharges,$negotiable);
            $stmt2->bind_param("issss",$pid, $state, $city, $locality, $pinCode);
            $res1 = $stmt1->execute();
            $res2 = $stmt2->execute();
            if($res1 && $res2){
                echo "success";
                header("location:../frontend/ui/home.php");
            }else{
                echo "error1";
            }
            $stmt1->close();
            $stmt2->close();
        }
        $stmt->close();
       
    }
}
?>