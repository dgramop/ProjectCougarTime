<?php
class HttpResponse
{
  public $status=false;
  public $message="none";
  public function HttpResponse($stat="error", $mes="none")
  {
    $status=$stat;
    $message=$mes;
  }
}
?>
