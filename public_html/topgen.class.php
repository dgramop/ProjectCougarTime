<?php
include_once("theme.class.php");
class Topgen
{
  public function Topgen($title="ProjectCT", $otherhtml="", $mainstylesheet="main.css", $mainscript="main.js", $googlefont="Nunito",$faviconlink="http://oaktonhs.fcps.edu/favicon.ico")
  {//todo: move all resources onto our server instead of CDN
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title> <?php echo $title ?> </title>
  <link rel="stylesheet" href="<?php echo Theme::getStylesheet(); ?>.css">
  <link rel="stylesheet" href="<?php echo $mainstylesheet; ?>">
  <link href="https://fonts.googleapis.com/css?family=<?php echo $googlefont; ?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo $faviconlink; ?>">
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2<?php /*Should we use @latest? It could break compatibility, but we wont get bugfixes (vulns?)*/?>/src/js.cookie.min.js"></script>
  <script src="<?php echo $mainscript; ?>"></script>
  <script src="http://matdark.dgramop.xyz/build/matdark.js"></script>
  <?php echo $otherhtml ?>
</head>
<?php  }
}
?>
