<?php
class Theme
{
  public static function getStylesheet()
  {
    $stylesheetbase="http://matdark.dgramop.xyz/build/mat";
    if(isset($_COOKIE["theme"]))
    {//"Duuuhh, can't you make it just output the cookie duhhhh?" No. That can cause XSS somehow (through a phorager (if you haven't read my whitepaper on phorager yet, ask me (dgramop) because the paper may not exist xD)). This could allow a phorager-style attack to persist through multiple webpages on our site
      if($_COOKIE["theme"]=="dark")
      {
        return $stylesheetbase. "dark";
      }
      else
      {
        return $stylesheetbase. "light";
      }
    }
    else
    {
      return $stylesheetbase. "light";
    }
  }
}

 ?>
