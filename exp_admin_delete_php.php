<?php
session_start(); 
if($_SERVER["REQUEST_METHOD"] =="POST"){
	
	
	// Create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "alumni feedback";
	$connt = new mysqli($servername, $username, $password, $db);
	$err="";
	if ($connt->connect_error) {
		$err1="connection failed";
		header("Location: exp_admin_delete.php");
		}
	$expid = $_POST['expid'];

 
    $sql = "delete from experience where exp_id = '$expid'" ; 
    $result = $connt->query($sql);
	if($result===TRUE){
		/*$_SESSION['login_user']=$alumni_id; 	*/
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Deleted Sucessfully')
        window.location.href='exp_admin_delete.php';
        </SCRIPT>");
		}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Invalid Alumni Id/Password')
        window.location.href='logpage.php';
        </SCRIPT>");
		}
	
	$connt->close();
}
    

?>