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
<center>
  <div class="card">
    <div class="title">
      Login to Cougar Time
    </div>
    <div class="text">
      <form action="dashboard.php" method="post">
        <input class="long" type="text" name="username" placeholder="Username"/><br/>
        <input class="long" type="password" name="password" placeholder="Password"/>
      </form>
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
  <script src="attendance.js"></script>
  <body class="dark-body">
  <center>
    <div class="card">
      <div class="title">
        Take Attendance for Cougar Time
      </div>
      <div class="text">
        <form>
          <input class="long" type="text" placeholder="Student ID"/>
        </form>
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
?>
