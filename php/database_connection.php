<?php

// Database configuration
$host = 'localhost';
$db_name = 'dbcrms';
$username = 'root';
$password = '';

// Attempt to connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    
} catch (PDOException $e) {
    // If the connection fails, handle the exception
    die("Connection failed: " . $e->getMessage());
}

?>

