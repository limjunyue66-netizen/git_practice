<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Little Lemon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Little Lemon 🍋</a>

        <div>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php" class="btn btn-light btn-sm">Dashboard</a>
                <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-light btn-sm">Login</a>
                <a href="register.php" class="btn btn-warning btn-sm">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container text-center mt-5">
    <h1>Welcome to Little Lemon</h1>
    <p>Online Restaurant Reservation & Food Ordering System</p>

    <a href="menu.php" class="btn btn-primary">View Menu</a>
    <a href="reserve.php" class="btn btn-success">Reserve Table</a>
    <a href="order.php" class="btn btn-warning">Order Food</a>
</div>

<!-- Footer -->
<footer class="text-center mt-5 p-3 bg-light">
    <p>&copy; <?php echo date("Y"); ?> Little Lemon</p>
</footer>

<!-- Simple Script -->
<script>
console.log("Homepage loaded");

function welcomeMessage() {
    alert("Welcome to Little Lemon Restaurant!");
}

// Run function when page loads
window.onload = welcomeMessage;
</script>

</body>
</html>