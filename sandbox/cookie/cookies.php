<?php  
// REMEMBER: setting cookies must be before any HTML output 
// unless output buffering is turned on.
	$name = "test";
	$value = "123";
	$expire = time() + (60 * 60 * 24 * 7); // add seconds, => one week
	setcookie($name, $value, $expire);
?>

<!DOCTYPE html>
<html lan="en">
<head>
	<title>Cookies</title>
</head>
<body>
	<pre>
		<?php 
			// print_r($_COOKIE);
		if (isset($_COOKIE['test'])) {
			$test = $_COOKIE['test'];

		} else {
			$test = "";
		}
		echo $test; // cookie hold the previous value.
		// after the value of cookie is update by server's response
		// the value read by user would be updated

		 ?>
	</pre>
</body>
</html>