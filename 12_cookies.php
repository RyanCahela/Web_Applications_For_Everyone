<?php 

setcookie("ryans_cool_cookie", "Hey this is my cool cookie", time() + 30);

if(isset($_COOKIE['ryans_cool_cookie'])) {
  echo $_COOKIE['ryans_cool_cookie'];
}