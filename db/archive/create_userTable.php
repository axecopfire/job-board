<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jobBoard";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Create Table
  $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(200) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP)";

    $conn->exec($sql);
    echo "User Table created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>