<?php 
/*
  Session are a way to store information (in Variables) to  
  be used across multiple pages. Unlike cookies, sessions are stored 
  on the server 
*/
foreach($_POST as $name => $value) {
  echo "name: $name | value: $value";
}

if(isset($_POST['submit'])) {
  $user_name = filter_input(INPUT_POST, $_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $user_name;

  $password = $_POST['password'];
  echo $password;
}


?>
<h1>Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit" name="submit">
</form> 