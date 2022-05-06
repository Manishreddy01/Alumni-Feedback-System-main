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
		header("Location: news_admin_delete.php");
		}
	$newsid = $_POST['newsid'];

 
    $sql = "delete from news where news_id = '$newsid'" ; 
    $result = $conntn->query($sql);
	if($result===TRUE){
		/*$_SESSION['login_user']=$alumni_id; 	*/
		echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Deleted Sucessfully')
        window.location.href='news_admin_delete.php';
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