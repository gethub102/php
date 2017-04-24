<?php
	include("included_header.php"); // go into another file, php mode would turn off. so in another file, php tag should be turn on.
	include("included_function.php");
	// require(); has smae usage with include();
	// but without file require should output fatal error
	// include_once();
	// require_once();
?>	

The header has been included.
<br />
<?php echo hello("Everyone"); ?>
</body>
</html>