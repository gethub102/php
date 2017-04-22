<!DOCTYPE html>
<html lan="en">
<head>
	<title>Type Juggling and Type Casting</title>
</head>
<body>
	Type Juggling<br />
	<?php $count = "2 cats"; ?> <!-- if it is "cats 2", will not work -->
	Type: <?php echo gettype($count); ?><br />
	
	<?php $count += 3; ?>
	Type: <?php echo gettype($count); echo "<br />" . $count; ?> <br />

	<br />
	<?php $cats = "I have " . $count . " cats. "; ?>
	Cats: <?php echo gettype($cats); ?><br />

	<br />
	Type Casting<br />
	<?php settype($count, "integer"); ?>
	count: <?php echo gettype($count) ?><br />

	<br />
	<?php $count2 = (string)$count; ?>
	count: <?php echo gettype($count); ?><br />
	count2: <?php echo gettype($count2); ?><br />
	<!-- settype is kind of in place, -->
	<!-- (stirng) is kind of not in place -->
	<br />
	<?php $test1 = 3; ?>
	<?php $test2 = 3; ?>
	<?php settype($test1, "string"); ?>
	<?php (string)$test2; ?>
	test1 : <?php echo gettype($test1); ?><br />
	test2 : <?php echo gettype($test2); ?><br />
</body>
</html>