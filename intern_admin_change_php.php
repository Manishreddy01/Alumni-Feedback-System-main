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
				
		if(empty($_POST["comp"])){
			$er2="Fill the field";
			$upp=0;
			}
		else{
			$comp=test_input($_POST['comp']);
		}		
        if(empty($_POST["pos"])){
			$er3="Fill the field";
			$upp=0;
			}
		else{
			$pos=test_input($_POST['pos']);
		}	
		if(empty($_POST["cont"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$contct=test_input($_POST['cont']);
		}			
		if(empty($_POST["interndata"])){
			$er5="Fill the field";
			$upp=0;
			}
		else{
			$interndata=test_input($_POST['interndata']);
		}
		$internid=test_input($_POST['inid']);
		
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
$sqll = "UPDATE internship SET Company='$comp',Position='$pos',data='$interndata',Contact='$contct' WHERE id='$internid' "; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted ')
    window.location.href='intern_admin_change.php';
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