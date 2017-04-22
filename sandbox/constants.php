<!DOCTYPE html>
<html lan="en">
<head>
	<title>Constants</title>
</head>
<body>
	<?php 
		$max_with = 980;
		define("MAX_WIDTH", 909); // constants define
		echo MAX_WIDTH;
	?>

	<?php // can not be changed the value;
	// MAX_WIDTH = MAX_WIDTH + 1;
	// echo MAX_WIDTH;
	?>

	 <?php // cant not be even redefine
	 	// define("MAX_WIDTH", 991);
	 	// echo MAX_WIDTH;
	 ?>

	 <!-- usually constant vlaue is used to store path of files in disk -->
</body>
</html>