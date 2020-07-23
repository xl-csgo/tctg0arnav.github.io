<?php
if(isset($_GET['event'])) {
$event = $_GET['event'];
$xino=0;
$bizeco=0;
$both=0;
if($event == "xino") 
$xino=1;
else if($event == "bizeco")
$bizeco=1;
else if($event == "both")
$both=1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration | XINO 2018</title>
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
<div class="space-large"></div>
<?php
if ($xino == 1) {
    echo '
    <h1>Thanks for registering for <span class="xino">XINO</span> 2019!</h1>
    ';
}
else if ($bizeco == 1) {
    echo '
    <h1>Thanks for registering for <span class="bizeco">BIZECO</span> 2019!</h1>
    ';
}
else if ($both == 1) {
    echo '
    <h1>Thanks for registering for  <span class="xino">XINO</span> AND <span class="bizeco">BIZECO</span>2019!</h1>
    ';
}
?>
<p class="success-p">A confirmation mail has been sent to the student in-charge and the teacher in-charge.</p>
<br>
<p class="success-p">Please check your email's spam folder if you didn't receive an email.</p>
</center>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</body>
</html>