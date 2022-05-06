<?php
    $er1="";
	$er2="";
	$er3="";
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
		$type=test_input($_POST['type']);	
		if(empty($_POST["newsdata"])){
			$er4="Fill the field";
			$upp=0;
			}
		else{
			$newsdata=test_input($_POST['newsdata']);
		}
		$newsid=test_input($_POST['newsid']);
		
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
$sqll = "UPDATE news SET title='$tit',type='$type',data_news='$newsdata' WHERE news_id='$newsid' "; 
 if ($conntn->query($sqll) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted ')
    window.location.href='news_admin_change.php';
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