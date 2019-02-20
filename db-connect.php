<?php

//local login
//variables
//$server = "localhost";
//$user = "wbip";
//$pw = "wbip123";
//$db = "test";

//production login
$server = "localhost";
$user = "daniell9_newtest";
$pw = "Abtech";
$db = "daniell9_newtest";

//define('SERVER', 'localhost');
//define('USER', 'wbip');
//define('PW', 'wbip123');
//define('DB', 'test');

//----connect to the databse

//$connect=mysqli_connect(SERVER, USER, PW, DB);

$connect=mysqli_connect($server, $user, $pw, $db);



//test to see if we can connect to the db
if(!$connect)
{
 die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")"); 
}
