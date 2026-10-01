<?php include "nav.php"; ?>

<!DOCTYPE html>
<html>
<body>

<h1>Add Record</h1>

<form method="POST">

    Brand:
    <input type="varchar" name="brand">

    <br><br>

    Model:
    <input type="varchar" name="model">

    <br><br>

    Storage(GB):
    <input type="int" name="storage_gb">

    <br><br>

    Price(£):
    <input type="decimal" name="price">

    <br><br>

    <button type="submit"> Add Phone</button>

</form>

</body>
</html>

<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $storage = $_POST["storage_gb"];
    $price = $_POST["price"];

    $sql = "INSERT INTO phones
            (brand, model, storage_gb, price)
            VALUES (?, ?, ?, ?)";

    $result = $pdo->prepare($sql);

    $result->execute([$brand, $model, $storage, $price]);

    echo "<br>";
    echo "Phone Has been Added";
}