<?php
session_start(); 
if($_SERVER["REQUEST_METHOD"] =="POST"){
	
	
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$conntn = new mysqli($servername, $username, $password, $db);
	$err="";
	if ($conntn->connect_error) {
		$err1="connection failed";
		header("Location: intern_admin_delete.php");
		}
	$internid = $_POST['internid'];

 
    $sql = "delete from internship where id = '$internid'" ; 
    $result = $conntn->query($sql);
	if($result===TRUE){
		/*$_SESSION['login_user']=$alumni_id; 	*/
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Deleted Sucessfully')
        window.location.href='intern_admin_delete.php';
        </SCRIPT>");
		}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Something went wrong:Please log in again')
        window.location.href='admin_login.php';
        </SCRIPT>");
		}
	
	$conntn->close();
}
    

?>