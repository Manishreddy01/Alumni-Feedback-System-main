<?php 
$er="";

function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
$q='0';
if($_SERVER["REQUEST_METHOD"] =="POST"){
	if(!empty($_POST['Alumni_id'])){
		$q='1';
	}
	elseif(empty($_POST['Name'])){
		if(empty($_POST['batchno'])){
			if(empty($_POST['progno'])){
				$er='Fill at the fields as per requirement';
			}else{
				$q='2';  /*only prog*/
			}
		}
		else{
			if(empty($_POST['progno'])){
				$q='3';  /*only batchno*/
			}
			else{
				$q='4';   /*batch and prog*/
			}
		}
		}
	else{
		if(empty($_POST['batchno'])){
			if(empty($_POST['progno'])){
				$q='5';   /*only name*/
			}else
			{
				$q='6';    /*prog and name*/
 			}
		}
		else{
			if(empty($_POST['progno'])){
				$q='7';     /*name and batch no*/
			}
			else{
				$q='8';     /*Name,batch,prog*/
				}
			}
			
		}
	$ald = test_input($_POST['Alumni_id']);
    $batc = test_input($_POST['batchno']);
	$Name = test_input($_POST['Alumni_name']);
	$pro = test_input($_POST['prog']);
		}
	if($q!=='0')
	{
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$conn = new mysqli($servername, $username, $password, $db);
	$err="";
	if ($conn->connect_error) {
		$err1="connection failed";
		header("Location: search.php");
		}
	
	if($q=='1'){
		$sql = "select * from alumni_info where alumni_id = '$ald'" ; 

	}
	elseif($q=='2'){
		$sql = "select * from alumni_info where Programme='$pro' " ; 
		}
	elseif($q=='3'){
		$sql = "select * from alumni_info where batch= '$batc' " ;
	}
	elseif($q=='4'){
		$sql = "select * from alumni_info where Programme='$pro' and batch= '$batc' " ;
	}
	elseif($q=='5'){
       $sql = "select * from alumni_info where first_name='$Name' " ; 
	  }
	 elseif($q=='6'){
		$sql = "select * from alumni_info where Programme='$pro' and first_name= '$Name' " ;
		 
	 }
	 elseif($q=='7'){
		$sql = "select * from alumni_info where batch='$batc' and first_name= '$Name' " ;
	 }
	 else{
		$sql = "select * from alumni_info where Programme='$pro' and first_name= '$Name' and batch='$batc' " ;
	 }

    $result = $conn->query($sql);
	if($result->num_rows>0){
		$num=$result->num_rows;
		$_SESSION['varname']=$num;
		echo"<!DOCTYPE html>";
		echo"<html lang='en'>";
		echo"<head>";
		echo"<title>CSS Template</title>";
		echo"<meta charset='utf-8'>";
		echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";
		echo"<link rel='stylesheet' type='text/css' href='style.css'>";
		echo"<style>";
		echo"tr,th,td{
		padding:10px;
		border:1px solid black;
		}";
		echo".back:hover{
			background-color:#003366;
			box-shadow:1px 1px 2px grey;
			
		}";
		echo"</style>";
		echo"</head>";
		echo"<body>";
		echo"<div class='header'><br>";
		echo"<a href='sam6.php'><img src='ABC2.png' alt='LOGO' style='float:left; width:100px;height:100px;border-radius:50%;'></a>";
		echo"<h1 style='font-family:sans-serif; font-size:50px;color:white;'>  ABC University - Alumni Portal</h1>";
		echo"</div>";
		echo"<div class='topnav'>";
		echo"<a href='aboutus.html' style='margin-left:10px;'>About portal</a>";
		echo"<a href='search.html'>Search</a>";
		echo"<a href='help.html'>Help</a>";
		echo"</div>";
		echo"<div class='content'>";
		echo"<p style='font-size:35px; margin-top:15px;margin-left:500px;'>SEARCH FOR ALUMNI DETAILS:</p><br>";
		while($row = $result->fetch_assoc()){
			echo"<table style='margin-left:30%;border-collapse:collapse;padding:10px;border:3px ridge black;text-align:center;background-color:white;'>";
			echo"<tr><th>Alumni ID </th><th>Batch</th><th>School</th><th>Programme</th><th>First Name</th><th>E Mail</th></tr>";
			echo "<tr><td>".$row["alumni_id"]."</td><td>".$row["batch"]."</td><td>".$row["school"]."</td>
			       <td>".$row["Programme"]."</td><td>".$row["first_name"]."</td><td>".$row["email"]."</td></tr>";
		    echo "</table>";
		}
		echo"<br><br><br><br>";
		echo"<a class='back' href='search.php' style='border:1px ridge #004080;border-radius:1px;background-color:#004080;color:white;padding:10px;margin-left:50%;'>Back</a>";
		echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		echo"</div>";
		echo"<div class='footer' style='bottom:0;'>";
		echo"<p>Alumni Feedback System</p>";
		echo"</div>";
		echo"</body>";
		echo"</html>";
		
		
		}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('No results')
        window.location.href='search.php';
        </SCRIPT>");
		}
	
	$conn->close();
	}
    

?>