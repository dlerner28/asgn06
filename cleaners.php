<!DOCTYPE html>
<!--	Author: Daniel Lerner 
		Date:	2/9/19
		File:	cleaners.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include('db-connect.php');
if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$userQuery = "SELECT MIN(hourlyWage) FROM personnel WHERE jobTitle = 'cleaner'";  // QUERY NEEDED

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>CLEANING STAFF</h1>");
    $row=mysqli_fetch_assoc($result);
  
	$lowestWage = $row['MIN(hourlyWage)'];
	
	print ("<p>The lowest hourly wage of cleaning staff is $".
				number_format($lowestWage, 2)."</p>");
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
