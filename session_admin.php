<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "alumni feedback";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
	header("Location: admin_login.php");
	}
session_start();
$user_check=$_SESSION['login_user'];
$quey = "select admin_id from admin_login where admin_id = '$user_check'" ; 
$result = $conn->query($quey);
$row = $result->fetch_assoc();
$login_session=$row['admin_id'];
?>

