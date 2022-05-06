<?php
include('session.php');

if(!isset($_SESSION['login_user']))
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Login Not Successful')
        window.location.href='sam6.php';
        </SCRIPT>");
}?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>account login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 5px;
		width: 18%;
		background-color: #f1f1f1;
		position: fixed;
		height: 40%;
		overflow: auto;
	
		}

	li a {
		display: block;
		color: #000;
		padding: 10px 16px;
		text-decoration: none;
	}

	li a.active {
		background-color: #4CAF50;
		color: white;
	}
	li a.visited {
		background-color: #4CAF50;
		color: white;
	}

	li a:hover:not(.active) {
		background-color: white;
		color: black;
	}
	</style>
	</head>
	<body>

	<div class="header"><br>
	<a href="sam3.html"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
	<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
	</div>
	<div class="topnav">
	<!--<a href="aboutus.html" style="margin-left:10px;">About portal</a>
	<a href="search.html">Search</a>
	<a href="help.html">Help</a>-->
	<a href="logout.php" style="float:right;" id="logout">Log out</a>
	<a href="#" style="float:right;" id="account"><?php echo $login_session; ?></a>
	</div>

<div class="content">
<ul>
  <li><a class=active href="#home">Home</a></li>
  <li><a href="internacc.php">Upload News</a></li>
  <li><a href="expacc.php">Share Experiences</a></li>
  <li><a href="profile.php">About yourself</a></li>
  <li><a href="feedback.php">Feedback form</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Hey !!</h1>
  <h2>Welcome to your account</h2>
  <p>Please fill in your details in the "About Yourself" link and give your feedback on the university :)  </p>
  <p> Your opinion matters a lot </p><br>
  <p>> Be active in the portal by sharing your college experiences with us.</p><br>
    <p>> Also help your juniors with info about internship and job opportunities</p><br>
	<p> > For further queries you may visit the help page or contact the admin.</p>

  

</div>
 <br><br><br><br><br><br>

</div>
<div class="footer" style="bottom:0;">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>


