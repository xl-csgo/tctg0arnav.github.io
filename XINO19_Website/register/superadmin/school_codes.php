<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<br>
<h1>Admin Panel</h1>
<a href="add_new.php">Add New School</a><br><br>
<a href="view_schools.php">View Schools</a><br><br>
<a href="logout.php">Logout</a>
<br><br>
<h2>Registered Schools</h2>
<table border="1" cellpadding="20" cellspacing="0">
	<tr>
		<th>S. No.</th>
		<th>School Name</th>
		<th>School Code</th>
	</tr>
<?php
require_once('../dbconnect.php');
$query = "SELECT * FROM schools";
$result = mysqli_query($con,$query);
$code="A";
$i=1;
while ($row = mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$school_name = $row['school_name'];
	echo "<tr>
		 <td>{$i}</td>
		 <td>{$school_name}</td>
		 <td>{$code}</td>
		  <tr>";
$i++;
$code++;
}

?>
</table>
</center>
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="space-large"></div>
</body>
</html>