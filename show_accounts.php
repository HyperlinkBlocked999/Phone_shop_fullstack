<?php

include "db.php";

$sql = "SELECT * FROM metadata";

$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<h1>View Accounts</h1>

<?php

foreach ($result as $record) {
    
    echo "ID: ";
    echo $record["user_id"];
    echo " │ ";

    echo $record["username"];
    echo " │ ";

    echo $record["role"];
    echo "<br>";
    
    echo "<hr>";
}

?>