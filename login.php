<?php include  "view/header.php" ?>

  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST["username"];
      $password = $_POST["password"];

      if(!empty($username)) {
        $username = sanitizeInput($username);
        echo "Username " . $username . " sanitized";
      } else {
          $usernameError = "username needs to be filled out";
      }
    }

    function sanitizeInput($data) {
      $data = htmlspecialchars($data);
      $data = trim($data);
      $data = stripslashes($data);
      return $data;
    };

  ?>


  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  >
    <label>
      Username:
      <input type="text" name="username" >
    </label>
    <div class="error" style="float: right; color: tomato;" >
      <?php
        if(!empty($usernameError)) {
          echo $usernameError;
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