<?php
class Users
{
  public static function isLoggedIn()
  {
    if(isset($_SESSION["username"]))
    {
      return $_SESSION["username"];
    }
    return true;
  }

  public static function getRole()
  {
    $username=$_SESSION["username"];
    /*Assumes that the user is logged in!*/
    $parsedStudents=false;
    preg_match("/[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/", $username, $parsedStudents);
    if(strlen($username)==7 && !($parsedStudents===false))//make sure we use triple eq. so "false"!=false
    {
      return "student";
    }

    return "teacher";
  }

  public static function logout()
  {
    session_destroy();
  }

  public static function login($username, $password)
  {
    getRole($username);
  }
}

 ?>
