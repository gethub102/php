<!DOCTYPE html>
<html lan="en">
<head>
	<title>Urlencode</title>
</head>
<body>
	<?php
		$page = "William Shakespeare"; // file system would find this path which used rawurlencode
		$quote = "To be or not to be"; // query would like to use urlencode
		$link = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
		echo $link . "<br />";
	?>

</body>
</html>