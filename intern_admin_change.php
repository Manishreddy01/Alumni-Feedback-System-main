<?php  
include('session_admin.php');
include('intern_admin_change_php.php');
if(!isset($_SESSION['login_user'])){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Something went wrong Please log in Again')
        window.location.href='admin_login.php';
</SCRIPT>");}

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
		
echo"<!DOCTYPE html>
<html lang='en'>
<head>
<title>Admin login</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<link rel='stylesheet' type='text/css' href='style.css'>";
echo"<style>";
/*<!--.button_des {
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
   
}-->*/
echo".button_des{
	border: none;
    background-color: #004080;
    
    text-align: center;
    text-decoration: none;
    padding: 10px 25px;
	color: white;
	font-size: 24px;
	display: inline-block;
    
    <!--margin: 26px 10px 10px 350px;-->
    cursor: pointer;
	
}
.button_des:hover{
	background-color:#003366;
	box-shadow:1px 1px 2px grey;
	
}
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

.dropdown:hover .dropbtn {background-color: white; padding:8px 10px 8px 10px;}
</style>";
echo"</head>";
echo"<body>

<div class='header'><br>
<a href='sam6.php'><img src='ABC2.png' alt='LOGO' style='float:left; width:100px;height:100px;border-radius:50%;'></a>
<h1 style='font-family:sans-serif; font-size:50px;color:white;'>  ABC University - Alumni Portal</h1>
</div>
<div class='topnav'>

  <a href='logout.php' style='float:right;' id='logout'>Log out</a>
  <a href='#' style='float:right;' id='account'>"; echo $login_session; echo"</a>
</div>";

echo"<div class='content'>
<ul>
  <li><a href='admin_home.php'>Manage</a></li><br><br>
  <div class='dropdown' style='margin-left:17px;'>
  <button class='dropbtn' style='padding:8px 10px 8px 10px;' >Experiences</button>
  <div class='dropdown-content'>
    <a href='exp_admin_upload.php' >Upload</a>
    <a href='exp_admin_delete.php' style='background-color: #4CAF50;color:white;'>Delete</a>
    <a href='exp_admin_change.php'>Change</a>
  </div>
</div>
  <div class='dropdown'>
  <button class='dropbtn' style='padding:8px 10px 8px 10px;background-color: #4CAF50;color:white;'>Internship</button>
  <div class='dropdown-content'>
    <a href='intern_admin_upload.php'>Upload</a>
    <a href='intern_admin_delete.php'>Delete</a>
    <a href='intern_admin_change.php' style='background-color: #4CAF50;color:white;'>Change</a>
  </div>
</div><br><br><br><br><br><br><br><br>
  
  <div class='dropdown' style='margin-left:17px;'>
  <button class='dropbtn' style='width:105px;padding:8px 10px 8px 10px;'>News</button>
  <div class='dropdown-content'>
    <a href='news_admin_upload.php'>Upload</a>
    <a href='news_admin_delete.php'>Delete</a>
    <a href='news_admin_change.php'>Change</a>
  </div>
</div>&nbsp &nbsp 
  <div class='dropdown'>
  <button class='dropbtn' style='width:90px;padding:8px 10px 8px 10px;border:none;font-family:serif;font-size:19px;'>Feedback</button>
  <div class='dropdown-content'>
    <a href='feedback_admin_view.php'>View</a>
  </div>
</div><br><br><br><br>
</ul>

<div style='margin-left:25%;padding:1px 16px;height:100%;'>
  <h1>Hey !!</h1>
  <h2>Update the internship Opportunities here</h2><br>";
  while($row=$result->fetch_assoc()){
			echo"<div class='exbox' style='border:2px ridge #004080;width:50%;margin-left:20%;padding:15px 0px 15px 15px;'>";
  echo"<form method='post' action=''>
  
  Alumni ID : ".$row["Alumni_id"]."<br> <br>";
  echo"Company :&nbsp &nbsp  <input type='text' name='comp' style='width:50%;' value=".$row["Company"]."><span style='color:red;'> &nbsp &nbsp *".$er2."</span><br><br>";
  echo"Position :&nbsp &nbsp &nbsp  <input type='text' name='pos' style='width:50%;' value=".$row["Position"]."><span style='color:red;'> &nbsp &nbsp *".$er3."</span><br><br>";
  echo"Contact :&nbsp &nbsp &nbsp &nbsp <input type='text' name='cont' style='width:50%;' value=".$row["Contact"]."><span style='color:red;'> &nbsp &nbsp *".$er4."</span><br><br>";
   echo"DESCRIPTION :<br><br> <textarea cols='40' rows='8' name='interndata' style='margin-left:11%;'>".$row["data"]."</textarea><span style='color:red;'>&nbsp &nbsp *".$er5."</span><br><br>";
   echo"<input type='hidden' name='inid' value=".$row["id"].">";
   echo"<input type='submit' class='button_des' style='margin-left:80%;padding:7px;font-size:15px;' value='Update'></center>

  </form>

</div><br>";
  }
 echo"<br><br><br><br><br><br><br>

</div>

<div class='footer' style='bottom:0;'>
  <p>Alumni Feedback System</p>
</div>
</body>

</html>";
		}
$conn->close();
?>