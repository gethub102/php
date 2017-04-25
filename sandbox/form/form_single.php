<?php
	require_once("included_formfunctions.php");

	if (isset($_POST['submit'])) {
		// form was submitted
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		if ($username == "kevin" && $password == "1") {
			// success login
			redirect_to("../sample.html");
		} else {
			$username = $_POST['username'];
			$message = "There are some errors.";
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
	<?php
		echo $message;
	?> <br />
	<form action="form_single.php" method="post">
		Username: <input type="text" name="username" value="<?php 
		echo htmlspecialchars($username); ?>" /><br />
		PassWord: <input type="password" name="password" value="" /><br />
		<br />
		<input type="submit" name="submit" value="Submit" /><br />
	</form>

</body>
</html>