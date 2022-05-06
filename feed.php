<?php

	$er1="";
	$er2="";
	$er3="";
	$er4="";
	$er5="";
	$er6="";
	$er7="";
	$er8="";
	$er9="";
	function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
	
	$upp=0;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		$upp=1;
		
		if(empty($_POST["Alumni_Id"])){
			$er2="Fill the field";
			$upp=0;
			}
		else{
			$aid=test_input($_POST['Alumni_Id']);
		}			
	    if(empty($_POST["Batch_Number"])){
			$er3="Fill the field";
			$upp=0;
			}
			else{
				$bno=test_input($_POST['Batch_Number']);
			}
		if(empty($_POST["Teaching_quality"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$teachq=test_input($_POST['Teaching_quality']);
		}
		if(empty($_POST["Infrastructure"])){
			$er5="Fill the field";
			$upp=0;
			}
		else{
			$inf=test_input($_POST['Infrastructure']);
		}
		if(empty($_POST["Lab_facilities"])){
			$er6="Fill the field";
			$upp=0;
			}
		else{
			$lab=test_input($_POST['Lab_facilities']);
		}
		if(empty($_POST["Curriculum"])){
			$er7="Fill the field";
			$upp=0;
			}
		else{
			$curr=test_input($_POST['Curriculum']);
		}
		if(empty($_POST["Food_canteen"])){
			$er8="Fill the field";
			$upp=0;
			}
		else{
			$food=test_input($_POST['Food_canteen']);
		}
		if(empty($_POST["Surroundings"])){
			$er9="Fill the field";
			$upp=0;
			}
		else{
			$surr=test_input($_POST['Surroundings']);
		}
		
		$feed=test_input($_POST['Feedback']);
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
$sqll = "INSERT INTO feedback (al_id,batch,teach,infrastructure,lab,curriculum,food,surrounding,feed) VALUES ('$aid','$bno','$teachq','$inf','$lab','$curr','$food','$surr','$feed')"; 
 if ($conn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='account.php';
    </SCRIPT>");
} else {
	$r=$conn->error;	
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	echo"$upp $r Submission not successful";
}
$conn->close();
}