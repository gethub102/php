<?php
	// 1. create a database connection
	$dbhost = "localhost";
	$dbuser = "wenbin";
	$dbpass = "wen";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. test if connection occurred.
	if (mysqli_connect_errno()) { // Returns an error code value. Zero if no error occurred
		die("Database connection failed: " .
			mysqli_connect_error() . 
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>

<?php
	// 2. Perform database query
	$query = "SELECT * ";
	$query .= "FROM subjects ";       // care the white space at last.
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC ";

	$result = mysqli_query($connection, $query);  // collection
	// Test if there is query error
	if (!$result) {
		die("Database query failed.");
	}

?>

<!DOCTYPE html>
<html lan="en">
<head>
	<title>Database</title>
</head>
<body>
<?php
	// 3. use returned data (if any)
	// $row = mysqli_fetch_row($result)
while ($row = mysqli_fetch_assoc($result)) {
	// output data from each row
	//var_dump($row); 
	echo $row["id"] . "<br />";
	echo $row["menu_name"] . "<br />";
	echo $row["position"] . "<br />";
	echo $row["visible"] . "<br />";
	echo "<hr />";
}
?>

<?php
	// 4. release returned data -- resoource collection
	mysqli_free_result($result);
?>

</body>
</html>

<?php
	// 5. close database connection
	mysqli_close($connection);
?>