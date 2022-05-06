<?php
    
	$er2="";
	
	$er4="";
	
	function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
	
	$upp=0;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		$upp=1;
		
		if(empty($_POST["title"])){
			$er2="Fill the field";
			$upp=0;
			}
		else{
			$tit=test_input($_POST['title']);
		}				
		if(empty($_POST["data"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$data=test_input($_POST['data']);
		}
		$type=test_input($_POST['type']);
		
		
	}
	
if($upp==1){
$servername = "localhost";
$username = "root";
$password = "";
$db = "alumni feedback";
// Create connection
$conntn = new mysqli($servername, $username, $password, $db);
$err="";
if ($conntn->connect_error) {
    echo"connection failed";
}
$sqll = "INSERT INTO news (title,type,data_news) VALUES ('$tit','$type','$data')"; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='news_admin_upload.php';
    </SCRIPT>");
} else {
	$r=$conntn->error;	
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	/*echo"<script type = \'text/javascript\'>alert(\"$upp $r  Submission not successful Check if Alumni already registered\")</script>";
	header("Location: intern_admin_upload.php");*/
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Submission not successful $r')
    window.location.href='news_admin_upload.php';
    </SCRIPT>");
}
$conntn->close();
}
?>