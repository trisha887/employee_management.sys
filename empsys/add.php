<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];

    $sql = "INSERT INTO employees (name, email, phone, position) VALUES ('$name', '$email', '$phone', '$position')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: employees.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Add Employee</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="position" placeholder="Position" required>
        <button type="submit">Add Employee</button>
    </form>
    <a href="employees.php">Back to Employees</a>
</body>
</html>
