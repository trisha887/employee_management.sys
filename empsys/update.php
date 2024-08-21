<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];

    $sql = "UPDATE employees SET name='$name', email='$email', phone='$phone', position='$position' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: employees.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM employees WHERE id=$id";
    $result = $conn->query($sql);
    $employee = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Update Employee</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $employee['name'] ?>" required>
        <input type="email" name="email" value="<?= $employee['email'] ?>" required>
        <input type="text" name="phone" value="<?= $employee['phone'] ?>" required>
        <input type="text" name="position" value="<?= $employee['position'] ?>" required>
        <button type="submit">Update Employee</button>
    </form>
    <a href="employees.php">Back to Employees</a>
</body>
</html>
