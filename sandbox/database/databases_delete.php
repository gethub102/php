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
	// Often these are form values in $_POST
	$id = 4;
	

	// 2. Perform database query
	$query = "DELETE FROM subjects WHERE id = {$id}
			  LIMIT 1";

	$result = mysqli_query($connection, $query);  // collection
	// Test if there is query error
	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success";
	} else {
		// Failure
		// $message = "Subject creation failed.";
		die("Database query failed. " . mysqli_error($connection));
	}

?>

<!DOCTYPE html>
<html lan="en">
<head>
	<title>Database</title>
</head>
<body>
	


</body>
</html>

<?php
	// 5. close database connection
	mysqli_close($connection);
?>