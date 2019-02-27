<!DOCTYPE html>
<!--	Author: Daniel Lerner
		Date:	2/20/19
		File:	name-change.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include('db-connect2.php');
}

$userQuery = "UPDATE personnel SET lastName='Jackson', jobTitle='Manager' WHERE empID=12353"; // ADD QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>UPDATE</h1>");
	print ("<p>The employee update has been completed.</p>");
}


mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
