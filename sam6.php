<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<style>

<!--.but{
	text-decoration:none;
	color:white;
	background-color:blue;
}-->
.button_des{
	border: none;
    background-color: #004080;
    
    text-align: center;
    text-decoration: none;
    padding: 15px 32px;
	color: white;
	font-size: 24px;
	display: inline-block;
    
    <!--margin: 26px 10px 10px 350px;-->
    cursor: pointer;
	
}
.button_des:hover{
	background-color:#003366;
	box-shadow:1px 1px 2px grey;
	
}
.new{
margin-left: 320px;}
.main{
width:90%;
height:500px;
position:relative;
}
.a,.b,.c,.d,.e,.f{
height:100%;
width:100%;
position:absolute;
}

.a{
background:url("img1.png")no-repeat center;
background-size:cover;
animation:fade 15s infinite;
}
.b{
background:url("img2.jpg")no-repeat center;
background-size:cover;
animation:fade1 15s infinite;
}
.c{
background:url("img3.png")no-repeat center;
background-size:cover;
animation:fade2 15s infinite;
}
.d{
background:url("img4.jpg")no-repeat center;
background-size:cover;
animation:fade3 15s infinite;
}
.e{
background:url("img5.jpg")no-repeat center;
background-size:cover;
animation:fade4 15s infinite;
}
.f{
background:url("img6.jpg")no-repeat center;
background-size:cover;
animation:fade5 15s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
@keyframes fade4
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
@keyframes fade5
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
</style>
</head>
<body>

<div class="header">
<br>
<a href="sam6.php"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
</div>
<div class="topnav">
  <a href="aboutus.html" style="margin-left:10px;font-size:18px;">About portal</a>
  <a href="search.php" style="font-size:18px;">Search</a>
  <a href="help.html" style="font-size:18px;">Help</a>
  <a href="signpage.php" style="float:right;font-size:20px;" id="signin">Sign in</a>
  <a href="logpage.php" style="float:right;font-size:20px;" id="login">Log in</a>
</div>
<!-- 
include('signin.php');
include('login.php');
?>-->
<!-- The Modal -->
<!--  <div id="myModaltwo" class="modal">-->

  <!-- Modal content -->
 <!-- <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>SIGN IN</h2>
    </div>
    <div class="modal-body">
      <form method="post" action="http://localhost/alumni/signin.php" >
      <input type="text" placeholder="Enter Alumni Id" name="alid" value="1yteh" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo "$aliderr" ?></span><br>
	  <input type="password" placeholder="Enter Password" name="pass" value="Homepage8*" class="pass" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;" ><span style="color:red;">*<?php echo"$passerr" ?></span><br>
	  <input type="password" placeholder="Confirm Password" name="conpass" value="Homepage8*" class="conpass" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%"><span style="color:red;">*<?php echo"$conpasserr" ?></span><br>
      <input type="text" placeholder="First Name" name="user_f" value="hjk" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$user_ferr" ?></span><br>
      <input type="text" placeholder="Last Name" name="user_l" value="mnb" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$user_lerr" ?></span><br>
	  <input type="text" placeholder="Batch" name="batch" value="56yt" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$batcherr" ?></span><br>
	  <input type="text" placeholder="School" name="school" value="lknml" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$schoolerr" ?></span><br>
      <input type="text" placeholder="Programme" name="prog" value="btahc" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$progerr" ?></span><br>
      <input type="text" placeholder="Mobile Number" name="mobile" value="9087876776" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$mobileerr" ?></span><br>
      <input type="text" placeholder="E Mail" name="mail" value="dhbjhv@sdgv.com" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;">*<?php echo"$mailerr" ?></span><br>
	  <input type="text" placeholder="Current occupation" name="job" value="dvkj" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$joberr" ?></span><br>
      <input type="text" placeholder="Firm/company you work in" name="com" value="hggvg" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:70%;margin-left:27px;font-size:16px;padding-left:20px;"><span style="color:red;"><?php echo"$comerr" ?></span><br><br>
        
	  <input type="submit" class="btnreg" value="Register"><span style="color:red;"><span><?php echo" $err" ?></span><br>
	  </form>
    
    </div>
    <div class="modal-footer">
	
      <!--<h3>Forgot password? - contact admin</h3>-->
  <!--  </div>
  </div>

</div>-->

<!-- The Modal 
  <div id="myModalone" class="modal">
  <!-- Modal content 
  <div class="modal-content">
    <div class="modal-header">
      <span class="closes">&times;</span>
      <h2>LOG IN</h2>
    </div>
    <div class="modal-body">
      <form method="POST" action="http://localhost/alumni/login.php" >
      <input type="text" placeholder="Enter Alumni Id" name="alid_l" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;width:90%;margin-left:27px;font-size:16px;padding-left:20px;"><br>
	  <input type="password" placeholder="Enter Password" name="passw" style="border:none;background-color:#e6eeff;border-bottom:2px solid #004080;" ><br><br>
	  <form action="account.html"><input type="submit" class="btnreg" value="Log in" style="margin-left:200px;">
	  </form>
	  </form>
      
    </div>
    <div class="modal-footer">
      <h3>Forgot password? - Contact admin</h3>
    </div>
  </div>

</div>
-->

<div class="content">
  <h2>&nbsp Welcome to the Alumni Interactive portal of ABC university</h2>
  <div class="main" style="max-width:500px;">
  <br>
  <img class="a" src="img1.png" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
  <img class="b" src="img2.jpg" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
  <img class="c" src="img4.jpg" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
  <img class="d" src="img5.jpg" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
  <img class="e" src="img6.jpg" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
  <img class="f" src="img3.png" style="width:1420px;height:650px;margin-left:35px;margin-right:0px;" >
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
<a href="exp.php" class="button_des" style="margin-left:150px;">Experiences</a>
<a href="intern.php" class="button_des" style="float:center;margin-left:330px;">Internship</a>
<a href="news.php" class="button_des" style="float:right;margin-right:130px;">News</a>
</div>
<br><br><br><br><br><br><br>
<!--<script>
// Get the modal
/*var modal1 = document.getElementById('myModalone');

// Get the button that opens the modal
var btn1 = document.getElementById("login");

// Get the <span> element that closes the modal
var spane = document.getElementsByClassName("closes")[0];

// When the user clicks the button, open the modal 
<!--btn1.onclick = function() { modal1.style.display = "block"; }

// When the user clicks on <span> (x), close the modal
<!--span.onclick = function() { modal1.style.display = "none"; }

btn1.addEventListener('click',openModal);
spane.addEventListener('click',closeModal);

function openModal(){
modal1.style.display='block';}

function closeModal(){
modal1.style.display='none';}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function closeonClick(event) {
    if (event.target.className == "myModalone") {
        event.target.style.display = "none";
    }
}


// Get the modal
var modal = document.getElementById('myModaltwo');

// Get the button that opens the modal
var btn = document.getElementById("signin");

// Get the <span> element that closes the modal
var spa = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spa.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/*function sum(){
var pas=document.getElementsByClassName("pas");
var conpass=document.getElementsByClassName("conpass");
if(pas!==conpass){
alert("Enter correct confirm password");
}
}
	
/*var myIndex = 0;
carousel();

function carousel() {
    var i;    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}*/
</script>-->
  
</div>

<div class="footer">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>
