<?php 

session_start();

if (!isset($_SESSION["username"])) {
        
    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<nav class="navbar">
    <nav class="nav_items">
        <a href="show_phones.php">VIEW</a> 
        <a href="add_phones.php">CREATE</a>
        <a href="home.php">HOME</a> 
    </nav>

</nav>

</head>
<body>

</body>
</html>

<?php

echo "Hello " .$_SESSION["username"];

?>

<br><br>

<a href="logout.php"> Logout </a>