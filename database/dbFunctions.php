<?php
require_once "../../database/dbConnect.php";

function getNewConnection(){
    $conn = new mysqli("localhost","root","","urbannest") or die("Connection failed: " . mysqli_connect_error());
    return $conn;
}

function getContats() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM contacts");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }
}

function getUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM user");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }
}

function getProperties() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM property");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }
}

function getTotalUser() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_user FROM user");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // echo "No of contacts ".$row['total_user'];
            return $row['total_user']; 
        } else {
            return 0; 
        }
    }
}

function getTotalProperty() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_property FROM property");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // echo "No of contacts ".$row['total_user'];
            return $row['total_property']; 
        } else {
            return 0; 
        }
    }
}

function getTotalContats() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_contacts FROM contacts");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // echo "No of contacts ".$row['total_contacts'];
            return $row['total_contacts']; 
        } else {
            return 0; 
        }
    }
}

function getRecentPost(){
    try{
        $conn = getNewConnection();
        // $query = "SELECT *FROM property p JOIN finance_details f ON p.pid = f.pid JOIN address a ON p.pid = a.pid ORDER BY p.pid DESC LIMIT 6;";
        $query = "SELECT p.pid, p.house_type, p.carpet_area, f.rent_amount, a.city, a.state 
              FROM property p 
              JOIN finance_details f ON p.pid = f.pid 
              JOIN address a ON p.pid = a.pid 
              ORDER BY p.pid DESC 
              LIMIT 8";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                return $result;
            }
        }
    }catch(Exception $e){
        echo $e->error();
    }finally{
        $conn->close();
    }
}
?>