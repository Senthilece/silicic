<?php
session_start();

//create connection
$con= mysql_connect("localhost","root","") or die("could not connect server");
mysql_select_db("login4",$con) or die("could not select database");

if(!isset($sesion['user_id']) && empty($session['user_id']))
{
	header("location:index.php");
}

?>