<?php
class Users
{
  public static function isLoggedIn()
  {
    if(isset($_SESSION["username"]))
    {
      return $_SESSION["username"];
    }
    return false;
  }
  public static function getRole()
  {
    return "teacher";
  }
  public static function logout()
  {
    session_destroy();
  }
}

 ?>
