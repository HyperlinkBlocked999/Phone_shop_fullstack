<?php 

 include "nav.php"; 

if (!isset($_SESSION["username"])) {
        
    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php echo "Hello " .$_SESSION["username"]; ?>

<br><br>

</body>
</html>

