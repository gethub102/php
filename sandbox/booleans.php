<!DOCTYPE html>
<html lan="en">
<head>
	<title>Booleans</title>
</head>
<body>
	<?php
		echo $ret1 = true;
		echo $ret2 = false;
	?>
	<br />
	Result1: <?php echo $ret1; ?><br />
	Result2: <?php echo $ret2; ?><br />

	<br />
	result2 is boolean? <?php echo is_bool($ret2); ?><br />

	<br />
	<?php 
		if (is_float(3.15)) {
			echo "number is float";
		} else {
			echo "it is not a float";
		}
	?>
</body>
</html>