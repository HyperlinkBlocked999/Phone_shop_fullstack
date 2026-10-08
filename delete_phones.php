<?php

include "db.php";

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM phones
            WHERE id = ?";

    $result = $pdo->prepare($sql);

    $result->execute([$id]);

    $record = $result->fetch();

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    
    $sql = "DELETE FROM phones
            WHERE id = ?";
    
    $result = $pdo->prepare($sql);
    
    $result->execute([$id]);
     
     header("Location: admin_panel.php");
     exit;
    }

    if (!isset($_GET["id"])) {
    
        header("Location: home.php");
        exit;
    
    }
    
    
?>

<!DOCTYPE html>
<html>
<body>

<?php include "nav_admin.php"; ?>

<h1>Delete Record</h1>

<p>Are you sure you want to delete?</p>

<?php 
echo $record["brand"];
echo "<br>";
echo $record["model"];
?>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $record["id"]; ?>">

    <br><br>

    <button type="submit">Delete Phone</button>

</form>

</body>
</html>



