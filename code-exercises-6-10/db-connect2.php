<?php
//production login
//if($_SERVER['HTTP_HOST'] == "daanlerner.com")
//{
$server = "localhost";
$user = "daniell9_testing";
$pw = "DBA2019";
$db = "daniell9_testing";
//}
//else
//{
//local login variables
//$server = "localhost";
//$user = "wbip";
//$pw = "wbip123";
//$db = "test";
//}
//----connect to the databse
$connect=mysqli_connect($server, $user, $pw, $db);

//test to see if we can connect to the db
if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
