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
		
		if(empty($_POST["company"])){
			$er2="Fill the field";
			$upp=0;
			}
		else{
			$comp=test_input($_POST['company']);
		}			
		if(empty($_POST["data"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$data=test_input($_POST['data']);
		}
		if(empty($_POST["cont"])){
			$er5="Fill the field";
			$upp=0;
			}
		else{
			$cont=test_input($_POST['cont']);
		}
		$posn=test_input($_POST['job']);
		$al_id=test_input($_POST['ald']);
		
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
$sqll = "INSERT INTO internship (Alumni_id,Company,Position,data,Contact) VALUES ('$al_id','$comp','$posn','$data','$cont')"; 
 if ($conn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='internacc.php';
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