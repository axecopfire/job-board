<?php

include "connect.php";

try {

$stmt = $conn->prepare(
  "INSERT INTO users (username, password, email)
  VALUES(:username, :password, :email)"
  );

// We can bind Params this way
// $stmt->bindParam(':username', $username);
// $stmt->bindParam(':password', $password);
// $stmt->bindParam(':email', $email);
// $stmt->execute();




// We could also bind params
// $stmt->execute([
//   'username'=> $username,
//   'password' => $password,
//   'email' => $email
// ]);

// Third example of prepared statements
// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND status=?');
// $stmt->execute([$email, $status]);
// $user = $stmt->fetch();


echo "New Record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>