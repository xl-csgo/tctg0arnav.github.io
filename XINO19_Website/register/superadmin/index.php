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
<a href="add_new.php">Add New School</a><br><br>
<a href="view_schools.php">View Schools</a><br><br>
<a href="logout.php">Logout</a>
<br><br>
<h2>Registered Schools</h2>
<table border="1" cellpadding="20" cellspacing="0">
	<tr>
		<th>S. No.</th>
		<th>School Name</th>
		<th>Details</th>
		<th>Status</th>
	</tr>
<?php
require_once('../dbconnect.php');
$query = "SELECT * FROM schools";
$result = mysqli_query($con,$query);
$i=1;
while ($row = mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$school_name = $row['school_name'];
	$display="";
	$xino_status = $row['xino_status'];
	$bizeco_status = $row['bizeco_status'];
    if ($xino_status == 1 && $bizeco_status == 1) {
        $display = "both";
    }
    else if ($xino_status == 1 && $bizeco_status == 0) {
        $display = "xino";
    }
    else if ($xino_status == 0 && $bizeco_status == 1) {
        $display = "bizeco";
    }
	echo "<tr>
		  <td>{$i}</td>
		  <td>{$school_name}</td>
		  <td><a href='details.php?id={$id}'>View</a></td>
		  <td>Registered for {$display}</td>
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