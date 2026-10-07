
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">

<nav class="navbar">
    <nav class="nav_items">
        <a href="login.php">Login</a> 
        <a href="register.php">Register</a> 
    </nav>

</nav>
<form method="POST">

    <h1> Login </h1>

    Username:
    <input type="text" name="username">

    <br><br>

    Password:
    <input type="password" name="user_password">

    <br><br>

    <button type="submit"> Login </button>


</form>

</body>

<br>

<?php

session_start();

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["user_password"];

    $sql = "SELECT * FROM metadata WHERE username = ?";

    $result = $pdo->prepare($sql);

    $result->execute([$username]);

    $user = $result->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user ["user_password"])) {
            
        $_SESSION["username"] = $user["username"];
        $_SESSION["role"] = $user["role"];

        header("Location: home.php");
        exit;

    } else {
        echo "Login incorrect.";
    }
 
}

?>
