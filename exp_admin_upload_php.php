<?php
    $er1="";
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
		
		if(empty($_POST["alid"])){
			$er1="Fill the field";
			$upp=0;
			}
		else{
			$alid=test_input($_POST['alid']);
		}			
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
$sqll = "INSERT INTO experience (Alumni_id,title,data) VALUES ('$alid','$tit','$expdata')"; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='exp_admin_upload.php';
    </SCRIPT>");
} else {
	$r=$conntn->error;	
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	echo"$upp $r  Submission not successful";
}
$conntn->close();
}
?>