<?php
session_start();
if(isset($_SESSION['login_user'])){
session_destroy();
echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Logout Successful')
        window.location.href='sam6.php';
        </SCRIPT>");
	}


?>