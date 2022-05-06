<?php
include('signin.php');
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
  <a href="logpage.php" style="float:right;font-size:20px;" id="signin">LogIn</a>
</div>



<div class="content">
  <h2>&nbsp Welcome to the Alumni Interactive portal of ABC university</h2>
 
<br><br>
<!-- The Modal -->
 <!-- <div id="myModalone" class="modal">
  <!-- Modal content -->
 <!-- <div class="modal-content">-->
    <!--<div class="modal-header">-->
      
    <div class="modal-body">
	<h2 style="color:#004080;text-align:center;">SIGN UP</h2><br><br>
      <form method="post" enctype="multipart/form-data" action="" >
      <input type="text" placeholder="Enter Alumni Id" name="alid" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo "$aliderr" ?></span><br>
	  <input type="password" placeholder="Enter Password" name="pass" class="pass" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;" ><span style="color:red;">*<?php echo"$passerr" ?></span><br>
	  <input type="password" placeholder="Confirm Password" name="conpass" class="conpass" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%"><span style="color:red;">*<?php echo"$conpasserr" ?></span><br>
      <input type="text" placeholder="First Name" name="user_f"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$user_ferr" ?></span><br>
      <input type="text" placeholder="Last Name" name="user_l"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$user_lerr" ?></span><br>
	  <input type="text" placeholder="Batch" name="batch" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$batcherr" ?></span><br>
	  <input type="text" placeholder="School" name="school"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$schoolerr" ?></span><br>
      <input type="text" placeholder="Programme" name="prog"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$progerr" ?></span><br>
      <input type="text" placeholder="Mobile Number" name="mobile" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$mobileerr" ?></span><br>
      <input type="text" placeholder="E Mail" name="mail"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$mailerr" ?></span><br>
	  <input type="text" placeholder="Current occupation" name="job"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$joberr" ?></span><br>
      <input type="text" placeholder="Firm/company you work in" name="com"  style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$comerr" ?></span><br><br>
      <input type="file" name="pic" ><span style="color:red;"><?php echo "$proerr" ?></span> 
	  <input type="submit" class="btnreg" value="Register"><span style="color:red;"><span><?php echo"$err" ?></span><br>
	  </form>
	  <br><br>
    </div>
   <!-- <div class="modal-footer">
      <h3>Forgot password? - Contact admin</h3>
    </div>
  </div></div>-->
 
</div>



<div class="footer">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>
