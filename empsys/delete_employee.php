<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: employees.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
