<?php 

$aliderr="";
$passerr="";
$conpasserr="";
$user_ferr="";
$user_lerr="";
$batcherr="";
$schoolerr="";
$progerr="";
$mobileerr="";
$mailerr="";
$joberr="";
$comerr="";
$err="";
$err1="";
$proerr="";
 function test_input($input){
	$data=trim($input);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
$up=0;
if($_SERVER["REQUEST_METHOD"] =="POST"){
	
	$up=1;
	if(empty($_POST["alid"])){
		$aliderr="Fill the field";
		$up=0;
	}
	else{
		$alid=test_input($_POST['alid']);
		if(strlen($alid)<4){
			$aliderr="Minimum 4";
			$up=0;
		}
		if(!preg_match('/^[a-zA-Z0-9@$&*-+$]+$/',$alid))
		{
			$aliderr="Enter valid Name";
			$up=0;
		}
		
	}
	if(empty($_POST['pass'])){
		$passerr="Fill the field";
		$up=0;
	}
	else{
		$pass=test_input($_POST['pass']);
		if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/',$pass)){
			$passerr="Atleast One Upper,Lower, Digit and special char";
			$up=0;
		}
		if(strlen($pass)<6){
			$passerr="Minimum 8 char";
			$up=0;
		}
	}
	if(empty($_POST["conpass"])){
		$conpasserr="Fill the field";
		$up=0;
	}
	else{
		$conpass=test_input($_POST['conpass']);
		
		if($conpass==$pass){
			$conpasserr="Matched";
		}
		else{
			$conpasserr="Does not match password";
			$up=0;
		}
		
	}
	if(empty($_POST["user_f"])){
		$user_ferr="Fill the field";
	}
	else{
		$user_f=test_input($_POST['user_f']);
		if(!preg_match('/^[a-zA-Z0-9@$&*-+$]+$/',$user_f))
		{
			$user_ferr="Enter valid Name";
		}
		
	}
	
	$user_l=test_input($_POST['user_l']);
	
	if(!empty($_POST["batch"])){
		$batch=test_input($_POST['batch']);
		if(!preg_match('/^[0-9a-zA-Z-]/',$batch))
		{
			$batcherr="Invalid";
			$up=0;
		}
		
	}
	else{
		$batch=test_input($_POST['batch']);
	}
	

	
	if(!empty($_POST["school"])){
		$school=test_input($_POST['school']);
		if(!preg_match('/^[a-zA-Z]/',$school))
		{
			$schoolerr="Invalid";
			$up=0;
		}
		
	}
	else{
		$school=test_input($_POST['school']);
	}
	
	if(!empty($_POST["prog"])){
		$prog=test_input($_POST['prog']);
		if(!preg_match('/^[a-zA-Z]/',$prog))
		{
			$progerr="Invalid";
			$up=0;
		}
		
	}
	else{
		$prog=test_input($_POST['prog']);
	}
	
	if(empty($_POST["mobile"])){
		$mobileerr="Fill the field";
		$up=0;
	}
	else{
		$mobile=test_input($_POST['mobile']);
		if(strlen($mobile)<10){
			$mobileerr="Atleast 10 numbers";
			$up=0;
		}
		if(!preg_match('/[0-9-\)+\(]/',$mobile))
		{
			$mobileerr="Enter valid Number";
			$up=0;
		}
		
	}
	if(empty($_POST["mail"])){
		$mailerr="Fill the field";
	}
	else{
		$mail=test_input($_POST['mail']);
		if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/',$mail)){
			$mailerr="Fill appropriate addr";
		}
		
	}
	if(!empty($_POST["job"])){
		$job=test_input($_POST['job']);
		if(!preg_match('/^[a-zA-Z]/',$job))
		{
			$joberr="Invalid";
			$up=0;
		}
		
	}
	else{
		$job=test_input($_POST['job']);
	}
	
	if(!empty($_POST["com"])){
		$com=test_input($_POST['com']);
		if(!preg_match('/^[a-zA-Z]/',$com))
		{
			$comerr="Invalid";
			$up=0;
		}
		
	}
	else{
		$com=test_input($_POST['com']);
	}
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["pic"]["name"]);
	
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(!file_exists($_FILES['fileupload']['tmp_name'])){
		$path="uploads/sam.PNG";
	}
	else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"&& $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
		$proerr=" $imageFileType Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$up = 0;
	}
    else{
		
		$file_name = $_FILES['pic']['name'];
        $file_tmp_name = $_FILES['pic']['tmp_name'];
		$path=$target_dir.$file_name;
        if(!move_uploaded_file($file_tmp_name,$target_dir.$file_name)){
			$proerr="file not uploaded";
			$up=0;
		}
	}
	/*else{
		$
	}*/
	
}


if(!$up==0){
$servername = "localhost";
$username = "root";
$password = "";
$db = "alumni feedback";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
$err="";
if ($conn->connect_error) {
    $err1="connection failed";
}
$sql = "INSERT INTO alumni_info(alumni_id,password,batch,school, Programme,first_name,last_name,phone_no,email,job,company,Profilepic) VALUES ('$alid','$pass','$batch','$school','$prog','$user_f','$user_l','$mobile','$mail','$job','$com','$path')"; 
 if ($conn->query($sql) === TRUE) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='sam6.php';
    </SCRIPT>");
} else {
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	$err="RReg not successful";
}
$conn->close();

}
/*else {
	/*$msg = 'Registration was not successful. Please try again';
    echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
	header("Location: sam6.htm");*/
	/*$err="Reg not successful";}*/

 
 ?>