<!DOCTYPE html>
<html lan="en">
<head>
	<title>Array Functions</title>
</head>
<body>
	<?php $nums = [3, 5, 6, 7, 2, 4, 7]; ?>

	Count: <?php echo count($nums); ?><br />
	Max:   <?php echo max($nums); ?><br />
	Min:   <?php echo min($nums); ?><br />

	<br />
	<pre>
	Sort: 			<?php sort($nums); print_r($nums); ?><br />
	Reverse sort: 	<?php rsort($nums); print_r($nums); ?><br />
	</pre>

	Implode: <?php echo $num_string = implode(" * ", $nums); ?> <br />
	<pre>Explode: <?php print_r(explode(" * ", $num_string)); ?> <br /></pre>

	<br />
	15 in array?: <?php echo in_array(15, $nums); // return T/F ?><br />
	07 in array?: <?php echo in_array(07, $nums); // return T/F ?><br />
	<!-- http://php.net.manual/en/ref.array.php -->
</body>
</html>