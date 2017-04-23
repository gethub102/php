<!DOCTYPE html>
<html lan="en">
<head>
	<title>First Page</title>
</head>
<body>
	<?php
		$link_name = "Second Page";
	?>
	<?php $id = 5;?>
	<?php $company = "Json & Json"; // should be encode ?> 
	<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $link_name; ?></a>
</body>
</html>