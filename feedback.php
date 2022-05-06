<?php  
include('session.php');
include('feed.php');
if(!isset($_SESSION['login_user'])){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Something went wrong Please log in Again')
        window.location.href='sam6.php';
</SCRIPT>");}?>
		
<!doctype html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

	<head>
		<meta charset="UTF-8">
		<title>Feedback system</title>
		<style>


<!--.button_des {
    background-color: #40A0A0;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 16px 2px;
    cursor: pointer;
   
}-->
input[type=number] {
    width: 50%;
    box-sizing: border-box;
    margin: 5px 5px 5px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 20px;
    background-color: white;
    
    
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 5px 5px 5px;
   
}
input[type=text] {
    width: 400px;
    box-sizing: border-box;
    margin: 5px 5px 5px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 20px;
    background-color: white;
    
    
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 5px 5px 5px;
   
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
    background-color: #555;
    color: white;
}


</style>
	</head>

<body style="background-color:#ddd;"><div class="header"><br>
<a href="sam3.html"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
</div>
<div class="topnav">
  <!--<a href="aboutus.html" style="margin-left:10px;">About portal</a>
  <a href="search.html">Search</a>
  <a href="help.html">Help</a>-->
  <a href="logout.php" style="float:right;" id="signin">Log Out</a>
  <a href="#" style="float:right;" id="login"><?php echo $login_session; ?></a>
</div>
<div class="content">
<ul>
  <li><a href="account.php">Home</a></li>
  <li><a href="internacc.php">Upload News</a></li>
  <li><a href="expacc.php">Share Experiences</a></li>
  <li><a href="profile.php">About yourself</a></li>
  <li><a class=active href="feedback.php">Feedback form</a></li>
</ul>
<br><br><br>

<h3 align="center">Kindly fill the form sincerely </h3><br>
<form style="margin-left:100px;" method="post" action="">
<table align="center" >

<tr>
 <td><input type="hidden" name="Alumni_Id" value=<?php echo $login_session; ?> ><!--<span style="color:red;">*  echo $er2; ?>*/</span>--></td></tr>
 <tr>
<td> Batch number:</td><td><input type="number" name="Batch_Number" value="143";><span style="color:red;">*<?php echo $er3; ?></span></td></tr>
<tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr>
<th>
Rate the following out of 5</th><tr> </tr><tr></tr><tr> </tr><tr></tr>
<tr><td> Teaching quality</td>
 <td><input type="number" name="Teaching_quality" ><span style="color:red;">*<?php echo $er4; ?></span></td></tr>
 <tr>
<td> Infrastructure</td><td><input type="number" name="Infrastructure" ><span style="color:red;">*<?php echo $er5; ?></span></td></tr>

<tr><td>Lab facilities:</td>
 <td><input type="number" name="Lab_facilities"><span style="color:red;">*<?php echo $er6; ?></span></td></tr>
 <tr>
<td> Curriculum:</td><td><input type="number" name="Curriculum"><span style="color:red;">*<?php echo $er7; ?></span></td></tr>

<tr><td>Food canteen:</td>
 <td><input type="number" name="Food_canteen"><span style="color:red;">*<?php echo $er8; ?></span></td></tr>
 <tr>
<td> Surroundings:</td><td><input type="number" name="Surroundings"><span style="color:red;">*<?php echo $er9; ?></span></td></tr>
<tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr><tr> </tr><tr></tr>
<tr><td>Feedback and comments:</td>
 <td><input type="text" name="Feedback"></td></tr>
</table> 
<br><br>
  
 <center><input class="btnreg" type="submit" value="Submit"></center>
 </table>
 </form>
 <br><br><br><br><br><br>

</div>
<div class="footer" >
  <p>Alumni Feedback System</p>
</div>



</body>
</html>

