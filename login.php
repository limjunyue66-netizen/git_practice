<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "test_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check user
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    echo "Login successful!";
    // header("Location: dashboard.php");
} else {
    echo "Invalid email or password!";
}

$conn->close();
?>