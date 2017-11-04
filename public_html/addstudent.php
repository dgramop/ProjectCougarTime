<?php
include_once("users.class.php");
if(Users::isLoggedIn()!==false)
{
  $_POST["studentid"];
  echo '{"status":"success"}';
}
else {
  echo '{"status":"error", "reason":"not logged in"}';
}
?>
