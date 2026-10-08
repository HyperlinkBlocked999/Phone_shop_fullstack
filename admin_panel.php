<?php

session_start();
include "db.php";

if ($_SESSION["role"] == "admin") {
        
    include "nav_admin.php";
 
 }


$sql = "SELECT * FROM phones";

$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<h1>View Phones</h1>

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
     
     } elseif ($_SESSION["role"] == "staff") {
 
         echo '<a href="update_phones.php?id=' . $record["id"] . '">Update</a>';
 
     }

    echo "<hr>";
    
}



?>
