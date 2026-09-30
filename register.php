
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

    <h1> Register </h1>

    Username:
    <input type="text" id="username" name="username" required>

    <br><br>

    Password:
    <input type="password" id="user_password" name="user_password" required>

    <br><br>

    <button type="submit"> Register Account </button>

</form>

</body>

<?php 

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = password_hash($_POST["user_password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO metadata
            (username, user_password)
            VALUES (?, ?)";

    $result = $pdo->prepare($sql);

    $result->execute([$username, $password]);

    echo "<br>";
    echo "User Has been added to the system.";

}

?>