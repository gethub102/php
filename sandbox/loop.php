<!DOCTYPE html>
<html lan="en">
<head>
	<title>Loop</title>
</head>
<body>
	<?php
		$count = 0;
		while ($count < 10) {
			$count++;
			echo "{$count} <br />";
		}
		echo "final is {$count} <br />";
	?>

	<?php
		for ($i = 0; $i < 10; $i++) {
			echo $i . ", ";
		}
	?>

	<br />
	<?php
		$ages = [1, 2, 3,4 ,5 ,6 ,9];
		foreach($ages as $age) {
			echo "Age: {$age}<br />";
		}
	?>

	<br />
	<?php // foreach using assoc. array
		$person = array(
			"first_name" => "Kevin",
			"last_name" => "L",
			"address" => "CA",
			);
		foreach($person as $attribute => $data) {
			$attr_nice = ucwords(str_replace("_", " ", $attribute));
			echo "{$attr_nice}: {$data} <br />";
		}
	?>

	<br />
	<?php // continue usage with increament with while loop
		// diff with for loop
		$count = 0;
		while ($count < 10) {
			if ($count == 5) {
				$count++; // should be noticed
				continue;
			}
			echo $count . ", ";
			$count++;
		}
	?>


	<br />
	<?php
		for ($i = 0; $i < 6; $i++) {
			if ($i % 2 == 0) {
				continue(1);
			}
			for ($j = 0; $j < 6; $j++) {
				if ($j == 3) continue(2); //continue outer loop
				echo $i . " - " . $j . "<br/>";
				// break(2);
			}
		}
	?>

	<br />
	<?php
		// while loop that moves the array pointer
		// similar to foreach
		reset($ages);
		while ($age = current($ages)) {
			echo $age . ", ";
			next($ages);
		}
	?>
</body>
</html>