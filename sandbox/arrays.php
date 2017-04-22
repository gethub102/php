<!DOCTYPE html>
<html lan="en">
<head>
	<title>Arrays</title>
</head>
<body>
	<?php 
		$numbers = array(4, 8, 16, 23, 46);
		echo $numbers[1];
		echo "<br />";
		echo $numbers[0];
	?>
	<?php
		$mixed = array(6, "fox", "dog", array("x", "y", "z"));
	?>
	<?php echo $mixed[2]; ?><br />
	<?php echo $mixed[3]; ?><br />
	<?php echo $mixed; ?><br />

	<pre>
	<?php print_r($mixed); // print readable ?><br />
	</pre>

	<?php echo $mixed[3][1]; // print nested element ?><br />

	<?php $mixed[2] = "cat"; ?>
	<?php $mixed[4] = "mouse"; ?>
	<?php $mixed[] = "house"; // empty means put elemmet at the end ?>

	<pre>
	<?php print_r($mixed); // print readable ?><br />
	</pre>

	<?php  
		// PHP 5.4 added the short array syntax.
		$array = [1, 2, "dog"];
		print_r($array);
	?>
</body>
</html>