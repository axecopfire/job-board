<?php

include "connect.php";

try {

$sql = "INSERT INTO users (username, password, email) VALUES('admin', 'password', 'test@test.com')";
$conn->exec($sql);
echo "New Record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>