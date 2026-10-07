<?php

include "db.php";

session_start();

$sql = "SELECT * FROM phones";

$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<?php include "nav.php"; ?>

<h1>View Records</h1>

<?php

foreach ($result as $record) {
    
    echo "ID: ";
    echo $record["id"];
    echo " │ ";

    echo $record["brand"];
    echo " │ ";

    echo $record["model"];
    echo " │ ";

    echo $record["storage_gb"] ."GB";
    echo " │ ";

    echo "£";
    echo $record["price"];
    echo "<br>";

    if ($_SESSION["role"] == "admin") {
        
        echo '<a href="update_phones.php?id=' . $record["id"] . '">Update</a>';
        echo" │ ";
        echo '<a href="delete_phones.php?id=' . $record["id"] . '">Delete</a>';

        include "show_accounts.php";
     
     } elseif ($_SESSION["role"] == "staff") {
 
         echo '<a href="update_phones.php?id=' . $record["id"] . '">Update</a>';
 
     }

    echo "<hr>";
    
}

?>
