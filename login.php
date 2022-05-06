<?php
session_start(); 
if($_SERVER["REQUEST_METHOD"] =="POST"){
	
	
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
	$alumni_id = $_POST['alid_l'];
    $password = $_POST['passw'];
 
    $sql = "select * from alumni_info where alumni_id = '$alumni_id' and password='$password'" ; 
    $result = $conn->query($sql);
	if($result->num_rows==1){
		$_SESSION['login_user']=$alumni_id; 	
		header("Location: account.php");
		}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Invalid Alumni Id/Password')
        window.location.href='logpage.php';
        </SCRIPT>");
		}
	
	$conn->close();
}
    

?>