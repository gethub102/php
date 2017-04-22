<!DOCTYPE html>
<html lan="en">
<head>
	<title>Debugging</title>
</head>
<body>
	<?php
		$number = 99;
		$string = "bug";
		$array = array(1 => "Homepage", 2 => "About Us", 
			3 => "Services");
		var_dump($number); // shot type and value

		var_dump($string);
		var_dump($array);
	?>


	<br />
	<pre>
	<?php
		print_r(get_defined_vars());
	?>
	</pre>

	<br />
	<?php
		// var_dump(debug_backtrace());
		function say_hello_to($name) {
			echo "Hello " . $name . "! <br />";
			var_dump(debug_backtrace());
		}
		say_hello_to("erveryone");
	?>

	<?php
		/*
			usefull tools for php debug
			Xdebug
			DBG
			FirePHP
		*/
	?>
</body>
</html>