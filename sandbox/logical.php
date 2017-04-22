<!DOCTYPE html>
<html lan="en">
<head>
	<title>Logical</title>
</head>
<body>
	<?php 
		$new_user = true;
		if ($new_user) {
			echo "<h1>Welecom!</h1>";
			echo "<p>We are glad you decided to join us.</p>";
		}
	?>
	<br />

	<?php
		$a = 3;
		$b = 3;
		if ($a > $b) {
			echo "a is larger than b";
		} elseif ($a < $b) {
			echo "b is larger than a";
		} else {
			echo "a is equal to b";
		}
	?>

	<br />
	<!-- default value -->
	<?php 
		$e = 100;
		if (!isset($e)) {
			$e = 200;
		}
		echo $e;
	?>

	<br />
	<?php
		// don't reject 0 or 0.0 in a form
		$quantity = 0;
		if (empty($quantity) && !is_numeric($quantity)) {
			echo "You must enter a quantity";
		}
	?>

	<?php
		$a = 5;
		switch($a) {
			case 0:
				echo "a equals 0 <br />";
				break;
			case 1:
				echo "a equals 1 <br />";
				break;
			case 2:
				echo "a equals 2 <br />";
				break;
			case 3:
				echo "a equals 3 <br />";
				break;
			default:
				echo "a is other number <br />";
		}
	?>

	<br />
	<?php // case with mutilple values
		$user_type = "customer";
		switch($user_type) {
			case "student":
				echo "Welecome!";
				break;
			case "press":
			case "customer":
			case "admin":
				echo "Hello!";
				break;
			default:
				echo "Greeting!";
		}
	?>
</body>
</html>