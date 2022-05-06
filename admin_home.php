<?php 
include("session_admin.php");
?>
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
    height: 60%;
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

.dropbtn {
    background-color: #f1f1f1;
    color: black;
    padding: 10px 150 px 10px 16px;
    font-size: 19px;
    border: none;
	width:100%;
	font-family:serif;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 10px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}
</style>
</head>
<body>

<div class="header">
<br>
<a href="sam3.html"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
</div>
<div class="topnav">
  <!--<a href="aboutus.html" style="margin-left:10px;">About portal</a>
  <a href="search.html">Search</a>
  <a href="help.html">Help</a>-->
  <a href="logout.php" style="float:right;" id="logout">Log out</a>
  <a href="#" style="float:right;" id="account"><?php echo $login_session ?></a>
</div>

<div class="content">
<ul>
  <li><a class=active href="admin_home.html">Manage</a></li><br><br><br>
  <div class="dropdown" style="margin-left:20px;">
  <button class="dropbtn" >Experiences</button>
  <div class="dropdown-content">
    <a href="exp_admin_upload.php">Upload</a>
    <a href="#">Delete</a>
    <a href="#">Change</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Internship</button>
  <div class="dropdown-content">
    <a href="#">Upload</a>
    <a href="#">Delete</a>
    <a href="#">Change</a>
  </div>
</div><br><br><br><br><br><br><br><br>
  
  <div class="dropdown" style="margin-left:35px;">
  <button class="dropbtn" style="width:85px;">News</button>
  <div class="dropdown-content">
    <a href="#">Upload</a>
    <a href="#">Delete</a>
    <a href="#">Change</a>
  </div>
</div>&nbsp &nbsp 
  <div class="dropdown">
  <button class="dropbtn">Feedback</button>
  <div class="dropdown-content">
    <a href="#">View</a>
  </div>
</div><br><br><br><br>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Hey !!</h1>
 <a href="details_admin_view.php" style="color:blue">Click Here to To view All details</a>

  

</div>
 <br><br><br><br><br><br>

</div>
<div class="footer" style="bottom:0;">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>