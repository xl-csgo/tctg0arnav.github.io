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
	<title></title>
</head>
<body>
<center>
<br>
<h1>Admin Panel</h1>
<br><br>
<h2>Schools registerations</h2>
<table border="1" cellpadding="20" cellspacing="0">
	<tr>
		<th>S. No.</th>
		<th>School Name</th>
		<th>Quiz</th>
		<th>Crossword</th>
		<th>Hackathon</th>
		<th>Surprise</th>
		<th>GD</th>
		<th>Photography</th>
	</tr>
<?php
require_once('../dbconnect.php');
$query = "SELECT * FROM schools";
$result = mysqli_query($con,$query);
$i=1;
while ($row = mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$school_name = $row['school_name'];
	$quiz = (!empty($row['quiz'])?'Y':'N');
	$cross = (!empty($row['crossword'])?'Y':'N');
	$hack = (!empty($row['hackathon'])?'Y':'N');
	$surp = (!empty($row['surprise'])?'Y':'N');
	$gd = (!empty($row['gd'])?'Y':'N');
	$photo = (!empty($row['photography'])?'Y':'N');
	
	echo "<tr>
		  <td>{$i}</td>
		  <td>{$school_name}</td>
		  <td>{$quiz}</td>
		  <td>{$cross}</td>
		  <td>{$hack}</td>
		  <td>{$surp}</td>
		  <td>{$gd}</td>
		  <td>{$photo}</td>
		  <tr>";
$i++;
}

?>
</table>
</center>
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="space-large"></div>
</body>
</html>