<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
    <h2>$_POST values</h2>
    <?php  
    foreach($_POST as $VALUE) {
      echo "<p>$VALUE</p>";
    } 
    ?>
  </section>  
  <section>
    <h2>$_GET values</h2>
    <?php
    foreach($_GET as $VALUE) {
      echo "<p>$VALUE</p>";
    } 
    ?>
  </section>  
</body>
</html>

