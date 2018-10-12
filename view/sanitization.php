<?php
    function sanitizeInput($data) {
      $data = htmlspecialchars($data);
      $data = trim($data);
      $data = stripslashes($data);
      return $data;
    };

    function hashPassword($password) {
      $hashFormat = "$2y$10$";
      $salt = "iusesomecrazystrings22";

      $hashF_and_salt = $hashFormat . $salt;
      $password = crypt($password,$hashF_and_salt);
      return $password;
    };

?>