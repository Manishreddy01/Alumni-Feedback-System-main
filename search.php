
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<style>


<!--.button_des {
    background-color: #40A0A0;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 16px 2px;
    cursor: pointer;
   
}-->
input[type=number] {
    width: 50%;
    box-sizing: border-box;
    margin: 5px 5px 5px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 20px;
    background-color: white;
    
    
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 5px 5px 5px;
   
}
input[type=text] {
    width: 400px;
    box-sizing: border-box;
    margin: 5px 5px 5px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 20px;
    background-color: white;
    
    
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 5px 5px 5px;
   
}



</style>
</head>
<body>

<div class="header"><br>
<a href="sam6.php"><img src="ABC2.png" alt="LOGO" style="float:left; width:100px;height:100px;border-radius:50%;"></a>
<h1 style="font-family:sans-serif; font-size:50px;color:white;">  ABC University - Alumni Portal</h1>
</div>
<div class="topnav">
  <a href="aboutus.html" style="margin-left:10px;">About portal</a>
  <a href="search.html">Search</a>
  <a href="help.html">Help</a>
  <!--<a href="#" style="float:right;" id="signin">Sign in</a>
  <a href="#" style="float:right;" id="login">Log in</a>-->
</div>
<?php 
include('serachphp.php');
?>
<div class="content">

<p style="font-size:35px; margin-top:15px;margin-left:500px;">SEARCH FOR ALUMNI DETAILS:</p><br>
<form method="post" action="http://localhost/alumni/serachphp.php" style="margin-left:100px;">
<table>
<tr>
   <td style="font-size:20px;">Alumni id:</td>
   <td><input type="text" name="Alumni_id"></td>
   </tr>
   <tr>
<td style="font-size:20px;">Name:</td><td><input type="text" name="Alumni_name"></td></tr>

<tr><td style="font-size:20px;">Batch:</td>
 <td><input type="number" name="batchno"></td></tr>
 <tr><td style="font-size:20px;">Programme:</td>
 <td><input type="text" name="prog"></td></tr>
</table> 
  <br>
 <center><input class="btnreg" type="submit" value="Search"></center>
 <p style="color:red;">* <?php echo$er ?></p>
 <br><br><br><br><br><br>

</div>
<div class="footer" style="bottom:0;">
  <p>Alumni Feedback System</p>
</div>

</body>
</html>
