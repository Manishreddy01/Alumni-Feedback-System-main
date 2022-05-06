<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "alumni feedback";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
	header("Location: sam6.php");
	}
session_start();
$user_check=$_SESSION['login_user'];
$quey = "select alumni_id from alumni_info where alumni_id = '$user_check'" ; 
$result = $conn->query($quey);
$row = $result->fetch_assoc();
$login_session=$row['alumni_id'];
?>

