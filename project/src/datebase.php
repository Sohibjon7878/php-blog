<?php

$dsn = 'mysql:host=mysql;dbname=mydb';
$user = 'user';
$password = 'password';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Connected to the MySQL database successfully!";
} catch (PDOException $e) {
    echo "Failed to connect to the MySQL database: " . $e->getMessage();
}



?>