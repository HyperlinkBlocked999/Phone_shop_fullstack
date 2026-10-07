<?php

include "db.php";

$sql = "SELECT * FROM metadata";

$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<?php

foreach ($result as $record) {
    
    echo " │ ";
    echo "ID: ";
    echo $record["user_id"];
    echo " │ ";

    echo $record["username"];
    echo " │ ";

    echo $record["role"];
    echo " │ ";
    
}

?>