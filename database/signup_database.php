<?php
require_once "dbconnect.php",
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['Mobile']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    $errors = [];

    if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
        $errors[] = "Name should contain only letters and spaces.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) {
        $errors[] = "Invalid mobile number. It must start with 6-9 and have 10 digits.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Password and Confirm Password do not match.";
    }

    if (empty($errors)) {
        $query = "INSERT INTO user (name, email, contact, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssis", $name, $email, $mobile, $confirmPassword);
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<div class='text-danger'>" . $error . "</div>";
        }
    }
}
$conn->close();
?>
