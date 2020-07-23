<?php 
session_start();
require_once('dbconnect.php'); 
if(isset($_SESSION['school'])) {
$school_name = $_SESSION['school'];
}
else {
	header("Location: index.php?m=4");
}
?>
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
else if($_GET['m'] == 5) {
    echo "<p class=\"alert\">You have been already registered for the selected event!</p>";
}

}

?>
<form method="post" action="register.php">
    <h1>Register</h1>
    <div class="space"></div>
    <p>Please select the event for which you want to register</p>
    <i>Registration for XINO 2019 has been closed.</i><br><br>
<?php
$school = $_SESSION['school'];

$sql = "SELECT * FROM schools WHERE school_name='$school'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$xino_status = $row['xino_status'];
$bizeco_status = $row['bizeco_status'];

if ($xino_status == 0 && $bizeco_status == 0) {
    echo '
    <div class="pretty p-default p-round p-smooth">
        <input type="radio" name="event_name" value="bizeco" />
        <div class="state p-primary">
            <label>BIZECO 2019</label>
        </div>
    </div>';
}
else if($xino_status == 1 && $bizeco_status == 0) {
    echo '
    <div class="pretty p-default p-round p-smooth">
        <input type="radio" name="event_name" value="bizeco" required />
        <div class="state p-primary">
            <label>BIZECO 2019</label>
        </div>
    </div>';
}
else if($xino_status == 0 && $bizeco_status == 1) {
    echo '
    <div class="pretty p-default p-round p-smooth">
        <input type="radio" name="event_name" value="bizeco" disabled />
        <div class="state p-primary">
            <label disabled>BIZECO 2019</label>
        </div>
    </div>';
}

?>
    <br>
	<input class="input-sub" type="submit" value="SUBMIT" name="submit">
</form>
</center>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
</body>
</html>