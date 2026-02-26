<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Little Lemon Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Little Lemon</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center mt-5">
    <h1>Welcome to Little Lemon 🍋</h1>
    <p class="lead">Reserve your table, order delicious food, and enjoy your meal!</p>

    <div class="mt-4">
        <a href="menu.php" class="btn btn-warning btn-lg">View Menu</a>
        <a href="reserve.php" class="btn btn-success btn-lg">Reserve Table</a>
        <a href="order.php" class="btn btn-primary btn-lg">Order Food</a>
    </div>
</div>

<footer class="text-center mt-5 p-3 bg-light">
    <p>&copy; <?php echo date("Y"); ?> Little Lemon Restaurant. All rights reserved.</p>
</footer>

</body>
</html>