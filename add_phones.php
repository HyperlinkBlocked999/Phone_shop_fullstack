<?php

include "db.php";
include "nav_admin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $storage = $_POST["storage_gb"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $images = $_POST["images"];

    $sql = "INSERT INTO phones
            (brand, model, storage_gb, price, quantity,images)
            VALUES (?, ?, ?, ?, ?, ?)";

    $result = $pdo->prepare($sql);

    $result->execute([$brand, $model, $storage, $price, $quantity,$images]);

    header("Location: admin_panel.php");
        exit;
}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Add Record</h1>

<form method="POST">

    <label for="brand"> Brand </label>
    <input type="varchar" name="brand" id="brand" required>

    <br><br>

    <label for="model"> Model </label>
    <input type="varchar" name="model" id="model" required>

    <br><br>

    <label for="storage_gb"> Storage(GB)</label>
    <input type="int" name="storage_gb" id="storage_gb" required>

    <br><br>

    <label for="price"> Price(£) </label>
    <input type="decimal" name="price" id="price" required>

    <br><br>

    <label for="quantity"> Quantity </label>
    <input type="int" name="quantity" id="quantity" required>

    <br><br>

    <label for="images"> Image(images/.png) </label>
    <input type="varchar" name="images" id="images" required>

    <br><br>

    <button type="submit"> Add Phone</button>

</form>

</body>
</html>

