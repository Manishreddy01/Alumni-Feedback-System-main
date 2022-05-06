<?php
session_start();
$err="";
function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	} 
if($_SERVER["REQUEST_METHOD"] =="POST"){
	
	
	
	$admin_id = test_input($_POST['adminid']);
	$passwd = test_input($_POST['passwd']);
	
	

	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$conn = new mysqli($servername, $username, $password, $db);
	
	if ($conn->connect_error) {
		$err1="connection failed";
		header("Location: logpage.php");
		}

 
    $sql = "select * from admin_login where admin_id = '$admin_id' and admin_password='$passwd'" ; 
    $result = $conn->query($sql);
	if($result->num_rows==1){
		$_SESSION['login_user']=$admin_id; 	
		header("Location: admin_home.php");
		}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Invalid Alumni Id/Password $password')
        window.location.href='admin_login.php';
        </SCRIPT>");
		}
	
	$conn->close();
}
    

?>