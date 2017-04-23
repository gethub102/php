<!DOCTYPE html>
<html lan="en">
<head>
	<title>HTML encoding</title>
</head>
<body>
	<?php
		$linktext = "<script type=\"text/javascript\">alert(\"Go\");</script>";
	?>
	<a href="">
		<?php echo htmlspecialchars($linktext); ?>
	</a>
	<br />

	<?php
		$text = "˙˚˜©ç©∂©˙∆˚¬";
		echo htmlentities($text);
	?>

	
	<br />
	<?php
		$url_page = "php/created/page/url.page";
		$param1 = "This is a string with < >";
		$param2 = "&#?*$[]+ are bad characters";
		$linktext = "<Click> & learn more";

		$url = "http://localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?" . "param1=" . urlencode($param1);
		$url .= "&" . "param2=" . urlencode($param2);
	?>
	<a href="<?php echo htmlspecialchars($url); ?>">
		<?php echo htmlspecialchars($linktext); ?>
	</a>
</body>
</html>