<!DOCTYPE html>
<html lan="en">
<head>
	<title>Validations</title>
</head>
<body>
	<?php
	// * presence
	$value = trim("0"); // 0 is kind of empty
	if (!isset($value) || empty($value) && !is_numeric($value)) {
		echo "Validation failed. <br />";
	}
	if (!isset($value) || $value === "") { // avoid '0' empty
		echo "Validation failed. <br />";
	}

	// * string length
	$min = 3;
	$value = "";
	if (strlen($value) < $min) {
		echo "string length no less than {$min}. <br />";
	}
	// max length
	$max = 6;
	if (strlen($value) > $max) {
		echo "string length no more than {$max}. <br />";
	}

	// * type
	$value = 8;
	if (!is_string($value)) {
		echo "value should be string. <br />";
	}

	// * inclusion in a set
	$value = "7";
	$set = array("1", "2", "3", "4", "5");
	if (!in_array($value, $set)) {
		echo "value should in the set. <br />";
	}

	// * uniqueness
	// use database check 

	// * format
	// use a regex on a stirg
	// preg_match($regex, $subject)
	if (preg_match("/^PHP/", "PHP is fun")) {
		echo "Match is found. <br />";
	} else {
		echo "Match is not found. <br />";
	}

	$value = "nobody@nowhere.com";
	if (!preg_match("/@/", $value)) {
		echo "Validation failed match. <br />";
	}

	if (strpos($value, "@") === false) { // "==" could lead 0 equals false;
		echo "validation failed match. <br />";
	}
	?>

</body>
</html>