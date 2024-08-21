<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: employees.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Employee Management System</h1>
    </header>
    <main>
        <div class="form-container">
            <div class="form-box">
                <h2>Register</h2>
                <form method="POST" action="register.php">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
            <div class="form-box">
                <h2>Login</h2>
                <form method="POST" action="login.php">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
