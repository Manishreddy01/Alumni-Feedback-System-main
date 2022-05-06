<?php
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<style>

.new{
margin-left: 320px;}
.main{
width:90%;
height:500px;
position:relative;
}

</style>
</head>
<body>

<div class="header">
<br>
<a href="sam6.php"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
</div>
<div class="topnav">
  <a href="aboutus.html" style="margin-left:10px;font-size:18px;">About portal</a>
  <a href="search.html" style="font-size:18px;">Search</a>
  <a href="help.html" style="font-size:18px;">Help</a>
  <a href="signpage.php" style="float:right;font-size:20px;" id="signin">Sign in</a>
</div>



<div class="content">
  <h2>&nbsp Welcome to the Alumni Interactive portal of ABC university</h2>
 
<br><br><br>
<!-- The Modal -->
 <!-- <div id="myModalone" class="modal">
  <!-- Modal content -->
 <!-- <div class="modal-content">-->
    <!--<div class="modal-header">-->
      
    <div class="modal-body">
	<h2 style="color:#004080;text-align:center;">LOG IN</h2><br><br>
      <form method="POST" action="" >
      <input type="text" placeholder="Enter Alumni Id" name="alid_l" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:90%;margin-left:27px;font-size:16px;padding-left:20px;"><br><br>
	  <input type="password" placeholder="Enter Password" name="passw" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;" ><br><br>
	  <input type="submit" class="btnreg" value="Log in" style="margin-left:200px;">
	  <a href="admin_login.php" style=":color:blue;margin-left:50%;">Admin</a>
	  </form>
	  <br><br>
    </div>
   <!-- <div class="modal-footer">
      <h3>Forgot password? - Contact admin</h3>
    </div>
  </div>

</div>-->
<br><br><br><br><br>



  
</div>

<div class="footer">
  <p>Alumni Feedback System</p>
</div>
</body>
</html>
