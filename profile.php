<?php 
include("session.php");
function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
$q='0';

	
	$ald = $login_session;
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$conn = new mysqli($servername, $username, $password, $db);
	$err="";
	if ($conn->connect_error) {
		$err1="connection failed";
		header("Location: account.php");
		}
	
		$sql = "select * from alumni_info where alumni_id = '$ald'" ; 
		$result = $conn->query($sql);
		if($result->num_rows>0){
			echo"<!DOCTYPE html>";
			echo"<html lang='en'>";
			echo"<head>";
			echo"<title>account login</title>";
			echo"<meta charset='utf-8'>";
			echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";
			echo"<link rel='stylesheet' type='text/css' href='style.css'>";
echo"<style>";
echo"ul {";
    echo"list-style-type: none;";
    echo"margin: 0;";
    echo"padding: 5px;";
    echo"width: 18%;";
    echo"background-color: #f1f1f1;";
    echo"position: fixed;";
    echo"height: 40%;";
    echo"overflow: auto;";
	
echo"}";

echo"li a {
    display: block;
    color: #000;
    padding: 10px 16px;
    text-decoration: none;
}";

echo"li a.active {
    background-color: #4CAF50;
    color: white;
}";
echo"li a.visited {
    background-color: #4CAF50;
    color: white;
}";

echo"li a:hover:not(.active) {
    background-color: white;
    color: black;
}";
echo"</style>";
echo"</head>";
echo"<body>";

echo"<div class='header'><br>";
echo"<a href='sam6.php'><img src='ABC2.png' alt='LOGO' style='float:left; width:100px;height:100px;border-radius:50%;'></a>";
echo"<h1 style='font-family:sans-serif; font-size:50px;color:white;'>  ABC University - Alumni Portal</h1>";
echo"</div>";
echo"<div class='topnav'>";
  /*echo"<a href='aboutus.html' style='margin-left:10px;'>About portal</a>";
  echo"<a href='search.html'>Search</a>";
  echo"<a href='help.html'>Help</a>";*/
  echo"<a href='sam6.php' style='float:right;' id='logout'>Log out</a>";
  echo"<a href='#' style='float:right;' id='account'>$login_session</a>";
  echo"</div>";

echo"<div class='content'>";
echo"<ul>";
  echo"<li><a href='account.php'>Home</a></li>";
  echo"<li><a href='internacc.php'>Upload News</a></li>";
  echo"<li><a href='expacc.php'>Share Experiences</a></li>";
  echo"<li><a class=active href='profile.php'>About yourself</a></li>";
  echo"<li><a href='feedback.php'>Feedback form</a></li>";
echo"</ul>";

echo"<div style='margin-left:25%;padding:1px 16px;height:1000px;'>";
while($row=$result->fetch_assoc()){
echo"<h1>Profile</h1><br><br>";
echo"<img src=".$row["Profilepic"]." alt=".$row["Profilepic"]." style='float:right;margin-right:200px;border:1px solid black;width:200px;height:200px;'>";
echo"Full Name : <span id='a'>&nbsp".$row["first_name"]." ".$row["last_name"]."</span><br><br>";
echo"Alumni ID : <span id='b'>&nbsp".$row["alumni_id"]."</span><br><br>";
echo"Batch : <span id='c'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$row["batch"]."</span><br><br>";
echo"School : <span id='d'>&nbsp &nbsp &nbsp &nbsp &nbsp".$row["school"]."</span><br><br>";
echo"Programme : <span id='e'>".$row["Programme"]."</span><br><br>";
echo"Contact :<span id='f'>&nbsp &nbsp &nbsp &nbsp &nbsp".$row["phone_no"]."</span><br><br>";
echo"E Mail : <span id='h'>&nbsp &nbsp &nbsp &nbsp &nbsp".$row["email"]."</span><br><br>";
echo" Profession : <span id='g'>&nbsp &nbsp".$row["job"]."</span><br><br>";
echo" Company: <span id='i'>&nbsp &nbsp &nbsp".$row["company"]."</span><br><br>";


}
  

echo"</div>";
echo"<br><br><br><br><br><br>";

echo"</div>";
echo"<div class='footer' style='bottom:0;'>";
echo"<p>Alumni Feedback System</p>";
echo"</div>";

echo"</body>";
echo"</html>";
}
?>