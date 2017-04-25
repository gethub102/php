<?php
// * presence
// use trim 
// empty() consider 0
// use === to avoid false positives
// 0 is kind of empty

function has_presence($value) {
	return (isset($value) && $value != "");
}



// * string length
function has_max_length($value, $max) {
	return strlen($value) <= $max;
}

function validate_max_lengths($fields_with_max_lengths) {
	global $errors; // use the var in form_with_validation.php
	foreach($fields_with_max_lengths as $field => $max) {
		$value = trim($_POST[$field]);
		if (!has_max_length($value, $max)) {
			$errors[$field] = $field . " over the max length.";
		}
	}	
}

// * inclusion in a set
function has_inclusion_in($value, $set) {
	return in_array($value, $set);
}

function form_errors($errors = array()) {
	$output = "";
	if (!empty($errors)) {
		$output = "<div class=\"error\">";
		$output .= "please fix the following errors:";
		$output .= "<ul>";
		foreach($errors as $key => $error) {
			$output .= "<li>{$error}</li>";
		}
		$output .= "</ul>";
		$output .= "</div>";
	}
	return $output;
}

?>