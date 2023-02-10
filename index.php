<?php
$oldUsername = isset($_POST['username']) ? $_POST['username'] : "";
$oldSearchTerm = isset($_GET['search']) ? $_GET['search'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

  .body {
    display: grid;
    gap: 2rem;
  }

  .form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
  }

  .form__item {
    display: flex;
    flex-direction: column;;
  }

  .form__label {
    font-size: 1rem;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  </style>
  <title>Document</title>
</head>
<body class="body">
  <h1>PHP Crash Course</h1>
  <form class="form" action="/action_page.php" method="post">
    <div class="form__item">
      <label class="form__label" for="username">Username</label>
      <input type="text" id="username" name="username" value="<?= htmlentities($oldUsername) ?>">
    </div>
    <div class="form__item">
      <label class="form__label" for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>
    <div class="form__item">
      <label class="form__label" for="confirm_password">Confim Password</label>
      <input type="password" id="confirm_password" name="confirm_password">
    </div>
    <input type="submit" value="Submit">
  </form> 

  <form class="form" action="/action_page.php" method="get">
    <div class="form__item">
      <label class="form__label" for="search">Search</label>
      <input type="text" name="search" id="search" value="<?= htmlentities($oldSearchTerm) ?>"/>
    </div>
    <input type="submit" value="submit" />
  </form>
</body>
</html>

