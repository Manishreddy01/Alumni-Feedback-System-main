<?php 

function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
#$q='0';

	
	#$ald = $login_session;
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$conn = new mysqli($servername, $username, $password, $db);
	$err="";
	if ($conn->connect_error) {
		$err1="connection failed";
		header("Location: sam6.php");
		}
	
		$sql = "select * from internship" ; 
		$result = $conn->query($sql);
		if($result->num_rows>0){
			echo"<!doctype html>";
			echo"<html>";
			echo"<meta charset='utf-8'>";
			echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";
			echo"<link rel='stylesheet' type='text/css' href='style.css'>";
			echo"<head>";
			echo"<meta charset='UTF-8'>";
			echo"<title>Experiences</title>";
			echo"<style>";
			echo".hea{
		    margin-left:20px;
		    }</style>";
	        echo"</head>";
			echo"<body><div class='header'><br>";
			echo"<a href='sam6.php'><img src='ABC2.png' alt='LOGO' style='float:left; width:100px;height:100px;border-radius:50%;'></a>";
            echo"<h1 style='font-family:sans-serif; font-size:50px;color:white;'>  ABC University - Alumni Portal</h1>";
			echo"</div>";
			echo"<div class='topnav'>";
			echo"<a href='aboutus.html' style='margin-left:10px;'>About portal</a>";
            echo"<a href='search.php'>Search</a>";
            echo"<a href='help.html'>Help</a>";
			/*<!--<a href="#" style="float:right;" id="signin">Sign in</a>
  <a href="#" style="float:right;" id="login">Log in</a>-->*/
echo"</div>";
echo"<div class='hea'>";
        echo"<h1>Here are the experiences of out very own alumni students of ABC university</h1>
		<h4>   2-5 years of college life gives every student bagful of good and bad memories</h4><br>";
		while($row=$result->fetch_assoc()){
			echo"<div class='exbox' style='border:2px ridge #004080;width:50%;margin-left:20%;padding:15px 0px 15px 15px;'>";
			echo"<b>Alumni id: </b>".$row["Alumni_id"]."<br><br>";
			echo"<b>Title:</b> ".$row["Company"]."<br><br>";
			echo"<b>Position/Job:</b> ".$row["Position"]."<br><br>";
			echo"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ".$row["data"]."<br><br><br>";
			echo"<b>Contact:</b> ".$row["Contact"]."<br><br>";
			echo"</div><br><br>";
		}
		echo"<br><br><a href='logpage.php' style='margin-left:80%;color:blue'>Upload Your Internship details</a><br><br><br>";
		echo"</div>";
		
	echo"<div class='footer' >";
  echo"<p>Alumni Feedback System</p>";
echo"</div>";
	echo"</body>";
echo"</html>";
		}
?>
