<?php 

$username="root";
$password = "";
$host="localhost";

$sql = mysql_connect($host,$username,$password);
if(!$sql)
{
	die("cant connect");
}
else
	mysql_select_db("SE",$sql);

?>