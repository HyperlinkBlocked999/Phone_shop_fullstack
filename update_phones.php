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
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $storage = $_POST["storage_gb"];
    $price = $_POST["price"];
    
    $sql = "UPDATE phones
            SET brand = ?,model = ?, storage_gb = ?, price = ?
            WHERE id = ?";
    
    $result = $pdo->prepare($sql);
    
    $result->execute([$brand, $model, $storage, $price,$id]);
    
    
    header("Location: admin_panel.php");
    exit; 
    }

    if (!isset($_GET["id"])) {
 
        header("Location: admin_panel.php");
        exit;
     
    }

?>

<!DOCTYPE html>
<html>
<body>

<?php include "nav.php"; ?>

<h1>Update Record</h1>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $record["id"]; ?>">

    Brand:
    <input type="text" name="brand" id="brand" value="<?php echo $record["brand"]; ?>" required>

    <br><br>

    Model:
    <input type="text" name="model" id="model" value="<?php echo $record["model"]; ?>" required>

    <br><br>

    Storage(GB):
    <input type="number" name="storage_gb" id="storage_gb" value="<?php echo $record["storage_gb"]; ?>" required>

    <br><br>

    Price(£):
    <input type="number" step="0.01" name="price" id="price" value="<?php echo $record["price"]; ?>" required>

    <br><br>

    <button type="submit">Update Phone</button>

</form>

</body>
</html>




