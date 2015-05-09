<?php 

require("connect.php");

$email = $_POST["email"];
$password = $_POST["password"];
$password = md5($password);

$query = "SELECT * FROM MsUser WHERE Email = '$email' AND Password = '$password'";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
if($row==null||$row=="")
{
	header("location:../index.php?e=1","_self");
}
else
{
	session_start();
	$_SESSION["fullname"]=$row[3];
	header("location:../index.php","_self");
}

?>