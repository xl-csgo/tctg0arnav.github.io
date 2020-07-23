<?php
session_start();
require_once('dbconnect.php'); 
if(isset($_SESSION['school'])) {
$school_name = $_SESSION['school'];
}
else {
	header("Location: index.php?m=4");
}
$event_name = $_POST['event_name'];
$sql = "SELECT * FROM schools WHERE school_name='$school_name'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$atn = $row['accomp_teach_name'];
$atp = $row['accomp_teach_phone'];
if ($event_name == "xino") {
    $xino_status = $row['xino_status'];
    echo $xino_status;
    if ($xino_status == 1) {
        header("location: choice.php?m=5");
    }
}
else if($event_name == "bizeco") {
    $bizeco_status = $row['bizeco_status'];
    if ($bizeco_status == 1) {
        header("location: choice.php?m=5");
    }
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
echo "<p class=\"alert\">You have already registered for XINO 2018!</p>";
}

}
?>
<form method="post" action="submit.php">
	<h1>Welcome, <?php echo $school_name ?>!</h1>
	<p>Basic Information</p>
	<br><br>
	<div class="upper-form">
	<?php
	if ($atn=="" && $atp=="") {
	echo '
	<input class="input" type="text" name="accomp_teach_name" placeholder="Name of the Accompanying Teacher" required>
	<input class="input" type="tel" maxlength="11" name="accomp_teach_phone" placeholder="Phone No. of the Accompanying Teacher" required>	
	';
	}
	else {
	echo '
	<input class="input" type="text" name="accomp_teach_name" placeholder="Name of the Accompanying Teacher" value='.$atn.' required>
	<input class="input" type="tel" maxlength="11" name="accomp_teach_phone" placeholder="Phone No. of the Accompanying Teacher" value='.$atp.' required>	
	';
	}
	?>
	</div>
<?php
if ($event_name == "xino") {
    echo '
	<h2 class="event-head xino">XINO 2019</h2>
    <div class="upper-form">
	<input class="input" type="text" name="x_teachin_name" placeholder="Name of the Teacher Incharge" required>
    <input class="input" type="email" name="x_teachin_mail" placeholder="Email ID of the Teacher Incharge" required>
	<input class="input" type="tel" maxlength="11" name="x_teachin_phone" placeholder="Phone No. of the Teacher Incharge" required>	
	<input class="input" type="text" name="x_studin_name" placeholder="Name of the Student Incharge" required>
    <input class="input" type="text" name="x_studin_mail" placeholder="Email ID of the Student Incharge" required>	
	<input class="input" type="tel" maxlength="11" name="x_studin_phone" placeholder="Phone No. of the Student Incharge" required>	
    </div>
	<p>Quiz</p>
	<input class="input" type="text" name="quiz1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="quiz1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="quiz2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="quiz2[]" placeholder="Participant 2 Email"><br>
	
	<p>Crossword</p>
	<input class="input" type="text" name="cross1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="cross1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="cross2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="cross2[]" placeholder="Participant 2 Email"><br>
	
	<p>Hackathon</p>
	<input class="input" type="text" name="hack1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="hack1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="hack2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="hack2[]" placeholder="Participant 2 Email"><br>
	<input class="input" type="text" name="hack3[]" placeholder="Participant 3 Name">
	<input class="input" type="email" name="hack3[]" placeholder="Participant 3 Email"><br>
	<input class="input" type="text" name="hack4[]" placeholder="Participant 4 Name">
	<input class="input" type="email" name="hack4[]" placeholder="Participant 4 Email"><br>

	
	<p>Surprise</p>
	<input class="input" type="text" name="surp1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="surp1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="surp2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="surp2[]" placeholder="Participant 2 Email"><br>


	<p>Group Discussion</p>
	<input class="input" type="text" name="gd[]" placeholder="Participant Name">
	<input class="input" type="email" name="gd[]" placeholder="Participant Email"><br>

	<p>Photography (Online)</p>
	<input class="input" type="text" name="photo[]" placeholder="Participant Name">
	<input class="input" type="email" name="photo[]" placeholder="Participant Email"><br>
	';
}

else if($event_name == "bizeco") {
    echo '
	<h2 class="event-head bizeco">BIZECO 2019</h2>
	<div class="upper-form">
	<input class="input" type="text" name="b_teachin_name" placeholder="Name of the Teacher Incharge" required>
    <input class="input" type="email" name="b_teachin_mail" placeholder="Email ID of the Teacher Incharge" required>
	<input class="input" type="tel" maxlength="11" name="b_teachin_phone" placeholder="Phone No. of the Teacher Incharge" required>	
	<input class="input" type="text" name="b_studin_name" placeholder="Name of the Student Incharge" required>
    <input class="input" type="text" name="b_studin_mail" placeholder="Email ID of the Student Incharge" required>	
	<input class="input" type="tel" maxlength="11" name="b_studin_phone" placeholder="Phone No. of the Student Incharge" required>	
    </div>
	<p>The Insolvent</p>
	<input class="input" type="text" name="insolvent1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="insolvent1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="insolvent2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="insolvent2[]" placeholder="Participant 2 Email"><br>
	
	<p>The Outcry</p>
	<input class="input" type="text" name="outcry1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="outcry1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="outcry2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="outcry2[]" placeholder="Participant 2 Email"><br>
	
	<p>The Turnaround</p>
	<input class="input" type="text" name="turnaround1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="turnaround1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="turnaround2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="turnaround2[]" placeholder="Participant 2 Email"><br>

	
	<p>Bizeco Stock Exchange</p>
	<input class="input" type="text" name="bse1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="bse1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="bse2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="bse2[]" placeholder="Participant 2 Email"><br>


	<p>The Realtor</p>
	<input class="input" type="text" name="realtor1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="realtor1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="realtor2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="realtor2[]" placeholder="Participant 2 Email"><br>
    ';
}
else if($event_name == "both") {
    echo '
	<h2 class="event-head xino">XINO 2019</h2>
    <div class="upper-form">
	<input class="input" type="text" name="x_teachin_name" placeholder="Name of the Teacher Incharge" required>
    <input class="input" type="email" name="x_teachin_mail" placeholder="Email ID of the Teacher Incharge" required>
	<input class="input" type="tel" maxlength="11" name="x_teachin_phone" placeholder="Phone No. of the Teacher Incharge" required>	
	<input class="input" type="text" name="x_studin_name" placeholder="Name of the Student Incharge" required>
    <input class="input" type="text" name="x_studin_mail" placeholder="Email ID of the Student Incharge" required>	
	<input class="input" type="tel" maxlength="11" name="x_studin_phone" placeholder="Phone No. of the Student Incharge" required>	
    </div>
	<p>Quiz</p>
	<input class="input" type="text" name="quiz1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="quiz1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="quiz2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="quiz2[]" placeholder="Participant 2 Email"><br>
	
	<p>Crossword</p>
	<input class="input" type="text" name="cross1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="cross1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="cross2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="cross2[]" placeholder="Participant 2 Email"><br>
	
	<p>Hackathon</p>
	<input class="input" type="text" name="hack1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="hack1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="hack2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="hack2[]" placeholder="Participant 2 Email"><br>
	<input class="input" type="text" name="hack3[]" placeholder="Participant 3 Name">
	<input class="input" type="email" name="hack3[]" placeholder="Participant 3 Email"><br>
	<input class="input" type="text" name="hack4[]" placeholder="Participant 4 Name">
	<input class="input" type="email" name="hack4[]" placeholder="Participant 4 Email"><br>

	
	<p>Surprise</p>
	<input class="input" type="text" name="surp1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="surp1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="surp2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="surp2[]" placeholder="Participant 2 Email"><br>


	<p>Group Discussion</p>
	<input class="input" type="text" name="gd[]" placeholder="Participant Name">
	<input class="input" type="email" name="gd[]" placeholder="Participant Email"><br>

	<p>Photography (Online)</p>
	<input class="input" type="text" name="photo[]" placeholder="Participant Name">
	<input class="input" type="email" name="photo[]" placeholder="Participant Email"><br>
	
	<br><br>
	<h2 class="event-head bizeco">BIZECO 2019</h2>
	<div class="upper-form">
	<input class="input" type="text" name="b_teachin_name" placeholder="Name of the Teacher Incharge" required>
    <input class="input" type="email" name="b_teachin_mail" placeholder="Email ID of the Teacher Incharge" required>
	<input class="input" type="tel" maxlength="11" name="b_teachin_phone" placeholder="Phone No. of the Teacher Incharge" required>	
	<input class="input" type="text" name="b_studin_name" placeholder="Name of the Student Incharge" required>
    <input class="input" type="text" name="b_studin_mail" placeholder="Email ID of the Student Incharge" required>	
	<input class="input" type="tel" maxlength="11" name="b_studin_phone" placeholder="Phone No. of the Student Incharge" required>	
    </div>
	<p>The Insolvent</p>
	<input class="input" type="text" name="insolvent1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="insolvent1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="insolvent2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="insolvent2[]" placeholder="Participant 2 Email"><br>
	
	<p>The Outcry</p>
	<input class="input" type="text" name="outcry1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="outcry1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="outcry2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="outcry2[]" placeholder="Participant 2 Email"><br>
	
	<p>The Turnaround</p>
	<input class="input" type="text" name="turnaround1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="turnaround1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="turnaround2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="turnaround2[]" placeholder="Participant 2 Email"><br>

	
	<p>Bizeco Stock Exchange</p>
	<input class="input" type="text" name="bse1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="bse1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="bse2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="bse2[]" placeholder="Participant 2 Email"><br>


	<p>The Realtor</p>
	<input class="input" type="text" name="realtor1[]" placeholder="Participant 1 Name">
	<input class="input" type="email" name="realtor1[]" placeholder="Participant 1 Email"><br>
	<input class="input" type="text" name="realtor2[]" placeholder="Participant 2 Name">
	<input class="input" type="email" name="realtor2[]" placeholder="Participant 2 Email"><br>
	';
    
}
    ?>
    <input type="hidden" value="<?php echo $event_name ?>" name="event_name">
    <br><br>
	<div class="box">
		<h3>NOTE</h3>
		<p class="note">To be eligible for the XINO 2019 and BIZECO 2019 overall trophies, the school must participate in at least four on-site events respectively.</span>
		<p class="note note-header">XINO 2019</p>
		<ul>
			<li>Participants of Open Source Marathon need to register separately at <a href="https://xino.in/osmarathon">https://xino.in/osmarathon</a>.</li>
			<li>Participants of Programming event need to register separately at <a href="https://xino.in/programming">https://xino.in/programming</a>.</li>
		</ul>
		<p class="note note-header">BIZECO 2019</p>
		<ul>
			<li>Participants of The Endgame Pvt. Ltd. need to register separately at <a href="http://bit.ly/endgame-register">http://bit.ly/endgame-register</a>.</li>
			<li>Participants of Bizeco Premier League need to register separately at <a href="http://bit.ly/football-register">http://bit.ly/football-register</a>.</li>
		</ul>
	</div>
	<input class="input-sub" type="submit" value="SUBMIT" name="submit">
</form>
<footer>
	<br>
	<p>XINO AND BIZECO 2019</p>
</footer>
</center>
<link rel="stylesheet" type="text/css" href="style.css">
</body>
</html>