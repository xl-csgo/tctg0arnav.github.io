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
<h1>Schools</h1>
<br><br>
<table border="1" cellpadding="20" cellspacing="0">
	<tr>
		<th>S. No.</th>
		<th>School Name</th>
		<th>School Email</th>
        <th>Invitation Code</th>
        <th>Status</th>
	</tr>
<?php
require_once('../dbconnect.php');
$query = "SELECT * FROM invite WHERE reg_status=0";
$result = mysqli_query($con,$query);
$i=1;
while ($row = mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$school = $row['school'];
	$school_email = $row['school_email'];
	$invite_code = $row['invite_code'];
    
    $sql = "SELECT * FROM schools WHERE school_name='$school'";
    $res = mysqli_query($con, $sql);
    $row2 = mysqli_fetch_assoc($res);
    $ctr = mysqli_num_rows($res);
    if ($ctr == 1) {
        $xino = $row2['xino_status'];
        $bizeco = $row2['bizeco_status'];
        if ($xino == 1 && $bizeco == 0) {
            $status="Not Registered for Bizeco";
        }
        else if ($xino == 0 && $bizeco == 1) {
            $status="Not Registered for XINO";
        }
    }
    
    else{
        $status = "Not Registered";
    }
    
$searchString = ',';

// if(strpos($school_email, $searchString) !== false) {
// $ids = explode(',',$school_email);

// foreach($ids as $id) {    
// 	echo "<tr>
// 		  <td>{$i}</td> 
// 		  <td>{$school}</td>
// 		  <td>{$id}</td>
//           <td>{$invite_code}</td>
//           <td>{$status}</td>
// 		  <tr>";
// }

// }
// else {
   	echo "<tr>
		  <td>{$i}</td> 
		  <td>{$school}</td>
		  <td>{$school_email}</td>
          <td>{$invite_code}</td>
          <td>{$status}</td>
		  <tr>";
// }

$i++;
}

?>
</table>
<br><br>
<a href="index.php">&larr; Go Back</a>
</center>
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="space-large"></div>
</body>
</html>