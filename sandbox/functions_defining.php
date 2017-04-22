<!DOCTYPE html>
<html lan="en">
<head>
	<title>Functions</title>
</head>
<body>

	<!-- Defining -->
	<?php // case insencitive
		function say_hello() {
			echo "Hello World! <br />";
		}

		say_hello();

		function say_hello_to($name) {
			echo "Hello {$name}! <br />";
		}
		say_hello_to("Wenbin");

		say_hello_loudly(); // php 4 has defined first and then use
		function say_hello_loudly() {
			echo "HELLO WORLD!";
		}
	?>

	<br />
	<!-- Arguments -->
	<?php
		function better_hello($greeting, $target, $punct) {
			echo $greeting . " " . $target . $punct . "<br />";
		}
		$name = "Wenbin";
		better_hello("Greeting", $name, "!");
	?>

	<br />
	<!-- return values -->
	<?php
		function add($val1, $val2) {
			$sum = $val1 + $val2;
			return $sum;
		}
		echo add(1, 2);
	?>

	<br />
	<?php
		echo add(3, 6);
	?>

	<!-- multiple returns -->
	<br />
	<?php
		function add_subt($val1, $val2) {
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			return array($add, $subt);
		}

		$result_array = add_subt(5, 3);
		echo "Add: " . $result_array[0] . "<br />";
		echo "Subt: " . $result_array[1] . "<br /><br />";

		list($add_ret, $subt_ret) = add_subt(20, 7);
		echo "Add: " . $add_ret . "<br />";
		echo "Subt: " . $subt_ret . "<br />";
	?>

	<!-- scope -->
	<br />
	<?php
		$bar = "outside"; // global

		function foo() {
			global $bar;
			if (isset($bar)) {
				echo "foo: " . $bar . "<br />";
			}
			$bar = "inside"; // local
		}

		echo "1: " . $bar . "<br />";
		foo();
		echo "2: " . $bar . "<br />";
	?>

	<!-- default arguments -->
	<br />
	<?php
		function paint($room="office", $color="red") {
			return "color of {$room} is {$color}. <br />";
		}
		echo paint("wall", "blue");
		echo paint("bedroom", null);
		echo paint("bedroom", "white");
		echo paint();
	?>
</body>
</html>