<?php
    $er1="";
	$er2="";
	$er3="";
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
		
		if(empty($_POST["alid"])){
			$er1="Fill the field";
			$upp=0;
			}
		else{
			$alid=test_input($_POST['alid']);
		}			
		if(empty($_POST["comp"])){
			$er2="Fill the field";
			$upp=0;
			}
		else{
			$comp=test_input($_POST['comp']);
		}
		if(empty($_POST["Contact"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$cont=test_input($_POST['Contact']);
		}		
		if(empty($_POST["expdata"])){
			$er5="Fill the field";
			$upp=0;
			}
		else{
			$data=test_input($_POST['expdata']);
		}
		$pos=test_input($_POST['pos']);
		
		
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
$sqll = "INSERT INTO internship (Alumni_id,Company,Position,data,Contact) VALUES ('$alid','$comp','$pos','$data','$cont')"; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='intern_admin_upload.php';
    </SCRIPT>");
} else {
	$r=$conntn->error;	
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	/*echo"<script type = \'text/javascript\'>alert(\"$upp $r  Submission not successful Check if Alumni already registered\")</script>";
	header("Location: intern_admin_upload.php");*/
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Submission not successful: Check if Alumni (ID) is REGISTERED or NOT')
    window.location.href='intern_admin_upload.php';
    </SCRIPT>");
}
$conntn->close();
}
?>