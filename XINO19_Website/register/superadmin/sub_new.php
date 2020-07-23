<?php
require_once('../dbconnect.php');

function gen_code($s) {
	$s = strtoupper($s);
	$words = explode(" ", $s);
	$acronym = "";
	
	foreach ($words as $w) {
	  $acronym .= $w[0];
	}
	
	$numb = rand(100000,999999);
	
	$code = $acronym . $numb;
	return $code;
}

if (isset($_POST['submit'])) {
	$school = $_POST['school'];
	$school_email = $_POST['school_email'];
	$invite_code = gen_code($school);
	$query = "INSERT INTO invite (school, school_email, invite_code) VALUES ('$school','$school_email','$invite_code')";
	$result = mysqli_query($con, $query);
	if ($result) {
		header("Location: add_new.php?msg=1");
	}
	else {
		echo "Error: " . mysqli_error($con);
	}
}


?>