<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

    $sql = "CREATE DATABASE jobBoard";
    $conn->exec($sql);
    echo "Database Created Successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// Close the Connection
$conn = null;

?>