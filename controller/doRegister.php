<?php 
session_start();
require("connect.php");
$fullname = $_POST["fullname"];
$password = $_POST["password"];
$email = $_POST["email"];

$password = md5($password);

$query = "INSERT INTO MsUser VALUES(NULL,'$email','$password','$fullname')";
if(!mysql_query($query))
	die("Error in creating new user");
else
{
	$_SESSION["fullname"]=$fullname;
	header("location:../index.php","_self");
}

?>