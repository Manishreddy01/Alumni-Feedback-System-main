<?php  
include('session.php');
include('expaccphp.php');
if(!isset($_SESSION['login_user'])){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Something went wrong Please log in Again')
        window.location.href='sam6.php';
</SCRIPT>");}?>
		
<!DOCTYPE html>
<html lang="en">
<head>
<title>account login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<style>
.button_des {
    background-color: #40A0A0;
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 16px 2px;
    cursor: pointer;
   
}
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
  <li><a href="account.php">Home</a></li>
  <li><a href="internacc.php">Upload News</a></li>
  <li><a class=active href="expacc.php">Share Experiences</a></li>
  <li><a href="profile.php">About yourself</a></li>
  <li><a href="feedback.php">Feedback form</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Hey !!</h1>
  <h2>Share your College Experiences here</h2><br>
  <form method="post" action="">
  <input type="hidden" name="ald" value="<?php echo $login_session ?>">
  TITLE :<br><input type="text" name="title" placeholder="Title" style="width:50%;"><span style="color:red;"> &nbsp &nbsp * <?php echo $er2 ?></span><br><br>
  
   DESCRIPTION :<br><br>&nbsp &nbsp &nbsp <textarea cols="30" rows="8" name="expdata" placeholder="Please enter your text here"></textarea><span style="color:red;">&nbsp &nbsp *<?php echo $er4 ?></span><br><br>
   
   <center><input class="button_des" type="submit" value="Submit"></center>

  

</div>
 <br><br><br><br><br><br>

</div>
<div class="footer" style="bottom:0;">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>