<?php
    $er1="";
	$er2="";
	$er3="";
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
			$er3="Fill the field";
			$upp=0;
			}
		else{
			$expdata=test_input($_POST['expdata']);
		}
		$expid=test_input($_POST['expid']);
		
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
$sqll = "UPDATE experience SET title='$tit',data='$expdata' WHERE exp_id='$expid' "; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted ')
    window.location.href='exp_admin_change.php';
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