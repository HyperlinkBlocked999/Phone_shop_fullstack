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

?>

<!DOCTYPE html>
<html>
<body>

<?php include "nav.php"; ?>

<h1>Update Record</h1>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $record["id"]; ?>">

    Brand:
    <input type="text" name="brand" value="<?php echo $record["brand"]; ?>">

    <br><br>

    Model:
    <input type="text" name="model" value="<?php echo $record["model"]; ?>">

    <br><br>

    Storage(GB):
    <input type="number" name="storage_gb" value="<?php echo $record["storage_gb"]; ?>">

    <br><br>

    Price(£):
    <input type="number" step="0.01" name="price" value="<?php echo $record["price"]; ?>">

    <br><br>

    <button type="submit">Update Phone</button>

</form>

</body>
</html>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {

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


echo "<br>";
echo "Phone Has been Updated"; 
}
?>


