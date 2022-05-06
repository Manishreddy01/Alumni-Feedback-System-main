<?php

	$er2="";
	$er4="";
	$er5="";
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
		if(empty($_POST["expdata"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$expdata=test_input($_POST['expdata']);
		}
		$al_d=test_input($_POST['ald']);
		
	}
	
if($upp==1){
$servername = "localhost";
$username = "root";
$password = "";
$db = "alumni feedback";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
$err="";
if ($conn->connect_error) {
    echo"connection failed";
}
$sqll = "INSERT INTO experience (Alumni_id,title,data) VALUES ('$al_d','$tit','$expdata')"; 
 if ($conn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='expacc.php';
    </SCRIPT>");
} else {
	$r=$conn->error;	
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	echo"$upp $r  Submission not successful";
}
$conn->close();
}