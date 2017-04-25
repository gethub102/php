<?php
	require_once("included_formfunctions.php");
	require_once("validations_function.php");
	$errors = array();
	$message = "";
	if (isset($_POST['submit'])) {
		// form was submitted
		$username =  trim($_POST['username']);
		$password =  trim($_POST['password']);
		
		// validation
		$field_required = array("username", "password");
		foreach($field_required as $field) {
			$value = trim($_POST[$field]);
			if (!has_presence($value)) {
				$errors[$field] = ucfirst($field) . " should not be blank.";
			}
		}
		// using assoc array
		$fields_with_max_lengths = array("username" => 30, "password" => 8);
		validate_max_lengths($fields_with_max_lengths);

		if (empty($errors)) {
			// try to login
			if ($username == "kevin" && $password == "1") {
				// success login
				redirect_to("../sample.html");
			} else {
				$username = $_POST['username'];
				$message = "Username and password do not match.";
			}
		}

		
	} else {
		$username = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html>
<html lan="en">
<head>
	<title>Form</title>
</head>
<body>
	<?php echo $message; ?> <br />
	<?php echo form_errors($errors); ?>
	<form action="form_with_validation.php" method="post">
		Username: <input type="text" name="username" value="<?php 
		echo htmlspecialchars($username); ?>" /><br />
		PassWord: <input type="password" name="password" value="" /><br />
		<br />
		<input type="submit" name="submit" value="Submit" /><br />
	</form>

</body>
</html>