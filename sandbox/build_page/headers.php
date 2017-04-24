<?php // for header: should have space and white line
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered-By: Webin's PHP");
?>
<!DOCTYPE html>
<html lan="en">
<head>
	<title>Headers</title>
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