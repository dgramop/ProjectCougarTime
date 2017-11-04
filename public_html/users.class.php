<?php
class Users
{
  //Make sure session_start(); has already been called
  // ABSTRACT FUNCTION! Replace with proper auth API before deployment
  public static function isLoggedIn()
  {
    if(isset($_SESSION["username"]))
    {
      return $_SESSION["username"];
    }
    else {
      return false;
    }
  }

  // ABSTRACT FUNCTION! Replace with proper auth API before deployment
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
    else {
      return "teacher";
    }
  }

  public static function logout()
  {
    session_destroy();
  }

  // ABSTRACT FUNCTION! Replace with proper auth API before deployment
  public static function login($username, $password)
  {
    //getRole();
    return true;
  }
}

 ?>
