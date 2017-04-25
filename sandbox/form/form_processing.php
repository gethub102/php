<!DOCTYPE html>
<html lan="en">
<head>
	<title>Form Processing</title>
</head>
<body>
	<pre>
		<?php
			print_r($_POST);
		?>
	</pre>
	<br />

	<?php
		// set default value
		if (isset($_POST['username'])) {
			$username = $_POST['username'];	
		} else {
			$username = "";
		}
		if (isset($_POST['password'])) {
			$password = $_POST['password'];	
		} else {
			$password = "";
		}
	?>

	<?php
		$username = isset($_POST['username']) ? $username : "";
		$password = isset($_POST['password']) ? $password : "";
	?>

	<?php
		// detect form submition
		if (isset($_POST['submit'])) { // this is post request
			echo "This form is submitted. <br />";
			if (isset($_POST['username'])) {
				$username = $_POST['username'];	
			} else {
				$username = "";
			}
			if (isset($_POST['password'])) {
				$password = $_POST['password'];	
			} else {
				$password = "";
			}
		} else { // this is get request
			$username = "";
			$password = "";
		}
	?>

	<?php
		echo "{$username}: {$password}";
	?>

</body>
</html>