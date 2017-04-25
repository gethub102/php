<!DOCTYPE html>
<html lan="en">
<head>
	<title>Validations Error</title>
</head>
<body>
	<?php
	require_once('validations_function.php');
	$errors = array();
	// $username = trim($_POST['username']);
	$username = trim("");
	if (!has_presence($username)) {
		$errors['username'] = "Username can't be blank.";
	}
	?>

	<?php
		// if (!empty($errors)) {
		// 	// redirect_to("frst_page.php?error=");
		// 	include("form.php");
		// } else {
		// 	include("success.php");
		// }
	?>

	<?php echo form_errors($errors); ?>

</body>
</html>