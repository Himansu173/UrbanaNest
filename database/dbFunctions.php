<?php
require_once "../../database/dbConnect.php";

global $conn;

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

?>