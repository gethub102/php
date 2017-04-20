<!DOCTYPE html>
<html lan="en">
<head>
	<title>String</title>
</head>
<body>
<?php
	echo "Hello World <br />";
	$greeting = "hello";
	$target = "world";
	$phrase = $greeting . " " . $target;
	echo $phrase;
?>
<br />
<?php
	echo "$phrase Again<br />";
	echo '$phrase Again<br />';
	echo "{$phrase} Again<br />"; // best for substitution 
?>
</body>
</html>