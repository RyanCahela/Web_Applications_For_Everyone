<?php
if (isset($_POST['submit'])) {
  // echo "submit set";
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>113_Sessions.php</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" />
    <label for="password">Password</label>
    <input type="password" id="password" name="password" />
    <input type="submit" name="submit" value="submit" /> 
  </form>

<div class="output">
    <div>Username</div>
    <?php if(isset($username)) {echo "<div>$username</div>";} ?>
    <div>Password</div>
    <?php if(isset($password)) {echo "<div>$password</div>";} ?>
  </div> 
</body>
</html>