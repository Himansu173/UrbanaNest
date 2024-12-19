<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully');";
    } else {
        echo "<script>alert('Failed to delete record'); window.location.href = 'adminDashboard.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>
