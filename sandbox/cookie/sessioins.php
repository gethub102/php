<?php
	session_start();
?>

<!DOCTYPE html>
<html lan="en">
<head>
	<title>Sessions</title>
</head>
<body>
	<?php  
		$_SESSION['first_name'] = "Kevin";
		$name = $_SESSION['first_name'];
		echo $name;  // in the same request-response cycle, session file opened and retrived.
	?>
</body>
</html>