<?php

include "db.php";

$sql = "SELECT * FROM phones";

$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<?php include "home.php"; ?>

<h1>View Records</h1>

<?php

foreach ($result as $record) {
    
    echo "ID: ";
    echo $record["id"];
    echo " -- ";

    echo $record["brand"];
    echo " -- ";

    echo $record["model"];
    echo " -- ";

    echo $record["storage_gb"] ."GB";
    echo " -- ";

    echo "£";
    echo $record["price"];
    echo "<br>";

    echo '<a href="update_phones.php?id=' . $record["id"]. '"> Edit</a>';

    echo " / ";

    echo '<a href="delete_phones.php?id=' . $record["id"]. '"> Delete</a>';

    echo "<hr>";
    
}

?>
