<!DOCTYPE html>
<html lan="en">
<head>
	<title>Second Page</title>
</head>
<body>
	<pre>
		<?php
			// print_r($_GET);
			$id = $_GET['id']; // use 
			echo $id;

			$company = $_GET['company'];
			echo "<br />";
			echo $company;
		?>
	</pre>	
</body>
</html>