<?php

try {

    $pdo = new PDO("mysql:host=localhost;dbname=phone_shop","root","");

} catch (PDOException $e) {

    echo "Connection failed";

}

?>
