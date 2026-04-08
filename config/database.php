<?php
//connectie wordt gemaakt met de database

$host = 'localhost';
$dbname = 'crud_articles';
$username = 'root';
$password = '';

//
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connectie mislukt: " . $e->getMessage());
}




?>