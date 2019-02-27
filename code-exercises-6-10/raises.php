<!DOCTYPE html>
<!--	Author: Daniel Lerner
		Date:	2/20/19
		File:	raises.php
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
$userQuery = "SELECT empID FROM personnel WHERE hourlyWage < 10"; // ADD THE QUERY

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
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");

	// ADD CODE HERE
    while ($row = mysqli_fetch_assoc($result))
    {
      print("<p>Employee ".$row['empID']." needs a raise!!</p>");
    }
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
