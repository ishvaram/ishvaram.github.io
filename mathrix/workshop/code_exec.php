<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$college=$_POST['college'];
$email=$_POST['email'];
$phone=$_POST['phone'];
mysql_query("INSERT INTO members(name,college,email,phone)VALUES('$name', '$college', '$email', '$phone')");
header("location: index.php?remarks=success");
mysql_close($con);
?>