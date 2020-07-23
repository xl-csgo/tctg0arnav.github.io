<?php
session_start();
if(isset($_SESSION['admin'])) {
	if($_SESSION['admin']!=1) {
		header("Location: ../index.php");
	}
}
else {
	header("Location: ../index.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New School</title>
</head>
<body>
<center>
<div class="space-large"></div>
<h1>Add New School</h1>
<form method="post" action="sub_new.php">
        <input type="text" class="input" name="school" placeholder="School"><br>
		<input type="email" class="input" name="school_email" placeholder="School Email ID"><br>
	<input type="submit" class="input-sub" value="SUBMIT" name="submit">	
</form>
<br><br>
<a href="index.php">&larr; Go Back</a>
<?php

if(isset($_GET['msg'])) {
if ($_GET['msg'] == 1) {
  echo "<center><p class='success'>Success!</p></center>";
}
}

?>
</center>
<link rel="stylesheet" type="text/css" href="../style.css">
</body>
</html>