<?php 

session_start();

if (!isset($_SESSION["username"])) {
        
    header("Location: login.php");
    exit;

}

?>

<?php include "nav.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php echo "Hello " .$_SESSION["username"]; ?>

<br><br>

<a href="logout.php"> Logout </a>

</body>
</html>

