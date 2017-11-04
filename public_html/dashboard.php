<?php
include_once("theme.class.php");
include_once("topgen.class.php");
include_once("users.class.php");
?>
<?php //serialize and unserialize user objects and make into a non-static class? For now, let's keep it static and make everything into functions - that way we don't have to worry about the vulnerabilities that may arise
//login page
if(Users::isLoggedIn()==false)
{
  new Topgen("Project CougarTime - Staff Login");
?>
<body class="dark-body">
<center><?php /*echo Users::getRole("selarson1@fcps.edu");*/ ?>
  <div class="card">
    <div class="title">
      Login to Cougar Time
    </div>
    <div class="text">
      <form action="dashboard.php?login=true" method="post">
        <input class="long" type="text" name="username" placeholder="Username"/><br/>
        <input class="long" type="password" name="password" placeholder="Password"/><br/>
        <input class="long" type="submit"/>
      </form>
      <?php
      if(isset($_GET["login"]))
      {
        if(Users::login($_POST["username"], $_POST["password"]))
        {
          $_SESSION["username"]=$_POST["username"];
        }
      }
       ?>
    </div>
  </div>
</center>
<div class="footer">
<div class="button" onclick="light()">Light theme</div>
<div class="button" onclick="dark()">Dark theme</div>
</div>
</body>
</html>
<?php
}
else if(Users::isLoggedIn()!==false && Users::getRole()=="teacher") //rendundancy to prevent vulns just in case something is removed from above if statement
{
  new Topgen("Project CougarTime - Teacher Access/Take Attendance");
  ?>
  <body class="dark-body">
  <center>
    <div class="card">
      <div class="title">
        Take Attendance for Cougar Time (<?php echo Users::isLoggedIn();?>'s class)
      </div>
      <div class="text">
          <input class="long" id="id" type="text" placeholder="Student ID" autofocus/>
      </div>
    </div>

    <div class="card">
      <div class="title">
        Students:
      </div>
      <div id="stidlist" class="text">

      </div>
    </div>

  </center>
  <div class="footer">
  <div class="button" onclick="light()">Light theme</div>
  <div class="button" onclick="dark()">Dark theme</div>
  </div>
    <script src="attendance.js"></script> <!--Keep the script at the bottom so it can get dom, or you can go in and put some sort of onload around event registrars-->
  </body>
  </html>
<?php
}
?>
