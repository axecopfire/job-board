<?php include  "view/header.php" ?>

  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST["username"];
      $password = $_POST["password"];

      // Username Handling
      if(!empty($username)) {
        $username = sanitizeInput($username);
        echo "Username: " . $username . " sanitized <br>";
      } else {
          $usernameError = "Please enter a username";
      }

      // Password Handling
      if(!empty($password)) {
        $password = sanitizeInput($password);
        $password = hashPassword($password);

        echo "Password: " . $password . " sanitized";
      } else {
        $passwordError = "Please enter a password";
      }

    }
  ?>


  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  >
    <div class="error" >
      <?php
        if(!empty($usernameError)) {
          echo $usernameError;
        }
      ?>
     </div>
    <label>
      Username:
      <input type="text" name="username" >
    </label>
    <div class="error" >
      <?php
        if(!empty($passwordError)) {
          echo $passwordError;
        }
      ?>
     </div>
    <label>
      Password
      <input type="text" name="password" >
    </label>
    <input type="submit" value="submit" >
  </form>



<?php include "view/footer.php" ?>