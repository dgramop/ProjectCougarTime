<?php
include_once("users.class.php");
include_once("jsonhttpresponse.class.php");
session_start();
header("Content-Type", "text/plain");
$httpobj=new HttpResponse();
if(Users::isLoggedIn()!==false)
{
  //echo $_POST["studentid"];
  $httpobj->status=true;
  $httpobj->message=$_POST["studentid"];
  echo json_encode($httpobj);
}
else {
  $httpobj->status=false;
  $httpobj->message="not logged in";
  echo json_encode($httpobj);
}
?>
