<!DOCTYPE html>
<html>
<head>
	<title>Registration | XINO AND BIZECO 2019</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
<div class="head">
    <br>
    <div class="left">
        <a href="https://xino.in/"><img src="xino_logo.png" alt="xino_logo" id="xino"></a>
        <a href="#"><img src="bizeco_logo.png" alt="bizeco_logo" id="bizeco"></a>
        <div class="clear"></div>
    </div>
</div>
<br>
<?php

if(isset($_GET['m'])) {

if($_GET['m'] == 1) {

echo "<p class=\"alert\">Invalid Invitation Code!</p>";

}
else if($_GET['m'] == 2) {
echo "<p class=\"alert\">Error</p>";
}

else if($_GET['m'] == 3) {
echo "<p class=\"alert\">You have already registered for XINO AND BIZECO 2019!</p>";
}

else if($_GET['m'] == 4) {
    echo "<p class=\"alert\">Please enter the invitation code!</p>";
    }

}
?>
<form method="post" action="check_school.php">
    <h1>Register</h1>
    <div class="space"></div>
    <p>Invitation Code</p>
	<input class="input" type="text" name="invitation_code" required><br>
	<input class="input-sub" type="submit" value="SUBMIT" name="submit">
</form>
</center>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</body>
</html>