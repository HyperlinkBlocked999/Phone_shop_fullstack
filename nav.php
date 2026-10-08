<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<div class="navbar">
    <nav class="nav_items">
        <a href="home.php">HOME</a> 
        <?php session_start(); if ($_SESSION["role"] == "admin") {echo '<a href="admin_panel.php">ADMIN</a>'; } 
        ?>
        <a href="logout.php"> LOGOUT </a>
    </nav>

</div>
</head>
</html>