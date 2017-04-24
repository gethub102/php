<?php 
	// This is how to redirect to new page/
	function redirect_to($new_location) {
		header("Location: {$new_location}");
		exit;
	}

	$logged_in = $_GET["logged_in"];
	if ($logged_in == "1") {
		redirect_to("second_page.php");
	} else if ($logged_in == "0") {
		redirect_to("first_page.php");
	} else {
		redirect_to("http://www.baidu.com");
	}
?>
<!DOCTYPE html>
<html lan="en">
<head>
	<title>Redirect</title>
</head>
<body>
	<?php
		// This won't work.
		// header("HTTP 1.1/ 404 Not Found");
	?>

	<pre>
		<?php 
		print_r(headers_list());
		print_r($_GET); ?>
	</pre>
</body>
</html>