<?php
session_start();
require_once('dbconnect.php');
if (isset($_POST['submit'])) {

function trimStr($con, $string) {
	return mysqli_real_escape_string($con, $string);
}

$invite_code = trimStr($con, $_POST['invitation_code']);

$invite = array();

$sql = "SELECT * FROM invite";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	array_push($invite, $row['invite_code']);
}

if (in_array($invite_code, $invite)) {

	$sql = "SELECT * FROM invite WHERE invite_code=\"$invite_code\"";
	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
        $regStat = $row['reg_status'];
        $school_name = $row['school'];
	}

	if ($regStat == 0) {
	    $_SESSION['invitation_code'] = $invite_code;
        $_SESSION['school'] = $school_name;
        header("Location: choice.php");
    }
    else {
        header("Location: index.php?m=3");
    }
}

else if($invite_code=="xinoxbizeco2019") {
    $_SESSION['admin']=1;
    header("Location: superadmin/index.php");
}

else {
    header("Location: index.php?m=1");
    // echo mysqli_error($con);
}


}



?>