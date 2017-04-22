<!DOCTYPE html>
<html lan="en">
<head>
	<title>Associative Arrays</title>
</head>
<body>
	<?php $assoc = array("first_name" => "Kevin", "last_name" => "L"); ?>
	<?php echo $assoc["first_name"]; ?> <br />
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?> <br />

	<?php
		$assoc["first_name"] = "Larry";
	?>
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?> <br />
	<?php // echo $assoc[0]; ?><br />

	<?php $nums = array(4, 5, 6, 7, 9);?> <br/>
	<?php $nums = array(0 => 4, 1 => 5, 2 => 6, 3 => 7, 4 => 9);?> <br/>
	<?php echo $nums[0]; ?><br />
</body>
</html>