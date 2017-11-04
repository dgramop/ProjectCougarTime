<?php
session_start();
if(Users::isLoggedIn()!==false)
{
  //echo $_POST["studentid"];
  echo '{"status":"success"}';
}
else {
  echo '{"status":"error", "reason":"not logged in"}';
}
?>
