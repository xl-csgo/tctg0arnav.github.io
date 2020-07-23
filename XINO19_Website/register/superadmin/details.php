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
<title>Details</title>
</head>
<body>
<center>

<?php 
require_once('../dbconnect.php');

$get_id = $_GET['id'];

$query = "SELECT * FROM schools WHERE id={$get_id}";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result)) {
	$school_name = $row['school_name'];
	$school_email = $row['school_email'];
	$accomp_teach_name = $row['accomp_teach_name'];
	$accomp_teach_phone = $row['accomp_teach_phone'];
	$x_teachin_name = $row['x_teachin_name'];
	$x_teachin_email = $row['x_teachin_email'];
	$x_teachin_phone = $row['x_teachin_phone'];
	$x_studin_name = $row['x_studin_name'];
	$x_studin_phone = $row['x_studin_phone'];
	$x_studin_email = $row['x_studin_email'];
	$quiz = json_decode($row['quiz']);
	$crossword = json_decode($row['crossword']);
	$hackathon = json_decode($row['hackathon']);
	$surprise = json_decode($row['surprise']);
	$gd = json_decode($row['gd']);
	$photography = json_decode($row['photography']);
	$b_teachin_name = $row['b_teachin_name'];
	$b_teachin_email = $row['b_teachin_email'];
	$b_teachin_phone = $row['b_teachin_phone'];
	$b_studin_name = $row['b_studin_name'];
	$b_studin_phone = $row['b_studin_phone'];
	$b_studin_email = $row['b_studin_email'];
	$insolvent = json_decode($row['insolvent']);
	$outcry = json_decode($row['outcry']);
	$turnaround = json_decode($row['turnaround']);
	$bse = json_decode($row['bse']);
	$realtor = json_decode($row['realtor']);
	echo "<div style='padding:50px;'></div>";
	echo "<center>";
	echo "<h1>School Name: {$school_name}</h1>";
	echo "School Email: " . $school_email . "<br><br>";
	echo "Accompanying Teacher Name: " . $accomp_teach_name . "<br><br>";
	echo "Accompanying Teacher Phone: " . $accomp_teach_phone . "<br><br>";

	
	echo "<h3 class='event-head'>XINO 2019</h3>" . "<br>";
	echo "Teacher In Charge Name: " . $x_teachin_name . "<br><br>";
	echo "Teacher In Charge Email: " . $x_teachin_email . "<br><br>";
	echo "Teacher In Charge Phone: " . $x_teachin_phone . "<br><br>";
	echo "Student In Charge Name: " . $x_studin_name . "<br><br>";
	echo "Student In Charge Email: " . $x_studin_email . "<br><br>";
	echo "Student In Charge Phone: " . $x_studin_phone . "<br><br>";
	echo "<br><br>";
	echo "<b>Quiz</b>" . "<br><br>";
	//table start
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($quiz); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($quiz[$n]); $m++) { 
			echo "<td>";
			print_r($quiz[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Crossword</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($crossword); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($crossword[$n]); $m++) { 
			echo "<td>";
			print_r($crossword[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Hackathon</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($hackathon); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($hackathon[$n]); $m++) { 
			echo "<td>";
			print_r($hackathon[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Surprise</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($surprise); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($surprise[$n]); $m++) { 
			echo "<td>";
			print_r($surprise[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Group Discussion</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($gd); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($gd[$n]); $m++) { 
			echo "<td>";
			print_r($gd[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Photography</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($photography); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($photography[$n]); $m++) { 
			echo "<td>";
			print_r($photography[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>" . "<br><br>";
	//table end
	echo "<h3 class='event-head'>BIZECO 2019</h3>" . "<br>";
	echo "Teacher In Charge Name: " . $b_teachin_name . "<br><br>";
	echo "Teacher In Charge Email: " . $b_teachin_email . "<br><br>";
	echo "Teacher In Charge Phone: " . $b_teachin_phone . "<br><br>";
	echo "Student In Charge Name: " . $b_studin_name . "<br><br>";
	echo "Student In Charge Email: " . $b_studin_email . "<br><br>";
	echo "Student In Charge Phone: " . $b_studin_phone . "<br><br>";
	echo "<br><br>";
	//table start
	echo "<b>The Insolvent</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($insolvent); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($insolvent[$n]); $m++) { 
			echo "<td>";
			print_r($insolvent[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>The Outcry</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($outcry); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($outcry[$n]); $m++) { 
			echo "<td>";
			print_r($outcry[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>The Turnaround</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($turnaround); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($turnaround[$n]); $m++) { 
			echo "<td>";
			print_r($turnaround[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>Bizeco Stock Exchange</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($bse); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($bse[$n]); $m++) { 
			echo "<td>";
			print_r($bse[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "<br><br>";
	//table start
	echo "<b>The Realtor</b>" . "<br><br>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th>Participant Name</th>";
	echo "<th>Participant Email</th>";
	echo "</tr>";
	for ($n=0; $n < count($realtor); $n++) { 
		echo "<tr>";
		for ($m=0; $m < count($realtor[$n]); $m++) { 
			echo "<td>";
			print_r($realtor[$n][$m]);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	//table end
	echo "</center>";
}


?>

<br> <br>

<a href="index.php">&larr; Go Back</a>
</center>
<br><br>
<link rel="stylesheet" type="text/css" href="../style.css">
</body>
</html>