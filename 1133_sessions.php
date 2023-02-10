<?php 
  session_start();
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  echo $username;
  echo $password;
?>

<div class="output">
    <div>Username</div>
    <?php if(isset($username)) {echo "<div>$username</div>";} ?>
    <div>Password</div>
    <?php echo isset($password) ?>
    <?php if(isset($password)) {echo "<div>$password</div>";} ?>
  </div> 