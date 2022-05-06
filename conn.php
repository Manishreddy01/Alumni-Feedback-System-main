<?php
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

?>