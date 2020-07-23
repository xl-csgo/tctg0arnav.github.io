<?php
session_start(); 
require_once('dbconnect.php');

if (isset($_POST['submit'])) {
    $event_name = $_POST['event_name'];
	$school_name = $_SESSION['school'];
	$query = "SELECT * FROM invite WHERE school=\"".$school_name."\"";
	$result = mysqli_query($con,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		$school_email = $row['school_email'];
	}

	function trimStr($con, $string) {
		return mysqli_real_escape_string($con, $string);
	}
	
    $sql = "SELECT * FROM schools WHERE school_name='$school_name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($event_name == "xino") {
        $accomp_teach_name = trimStr($con,$_POST['accomp_teach_name']);
        $accomp_teach_phone = trimStr($con,$_POST['accomp_teach_phone']);
    	$x_teachin_name = trimStr($con,$_POST['x_teachin_name']);
    	$x_teachin_mail = trimStr($con,$_POST['x_teachin_mail']);
    	$x_teachin_phone = trimStr($con,$_POST['x_teachin_phone']);
    	$x_studin_name = trimStr($con,$_POST['x_studin_name']);
    	$x_studin_mail = trimStr($con,$_POST['x_studin_mail']);
    	$x_studin_phone = trimStr($con,$_POST['x_studin_phone']);
    	$quiz1 = $_POST['quiz1'];
    	$quiz2 = $_POST['quiz2'];
    	$quiz = [$quiz1,$quiz2];
    	$quiz = json_encode($quiz);
    	$cross1 = $_POST['cross1'];
    	$cross2 = $_POST['cross2'];
    	$crossword = [$cross1,$cross2];
    	$crossword = json_encode($crossword);
    	$hack1 = $_POST['hack1'];
    	$hack2 = $_POST['hack2'];
    	$hack3 = $_POST['hack3'];
    	$hack4 = $_POST['hack4'];
    	$hackathon = [$hack1,$hack2,$hack3,$hack4];
    	$hackathon = json_encode($hackathon);
    	$surp1 = $_POST['surp1'];
    	$surp2 = $_POST['surp2'];
    	$surprise = [$surp1,$surp2];
    	$surprise = json_encode($surprise);
    	$gd = $_POST['gd'];
    	$group_discussion = [$gd];
    	$group_discussion = json_encode($group_discussion);
    	$photo = $_POST['photo'];
    	$photography = [$photo];
    	$photography = json_encode($photography);
        if ($count == 0) {
        	mysqli_query($con, "INSERT INTO schools (school_name,school_email,accomp_teach_name,accomp_teach_phone,x_teachin_name,x_teachin_email,x_teachin_phone,x_studin_name,x_studin_email,x_studin_phone,quiz,crossword,hackathon,surprise,gd,photography,xino_status) VALUES ('$school_name', '$school_email', '$accomp_teach_name', '$accomp_teach_phone', '$x_teachin_name', '$x_teachin_mail', '$x_teachin_phone', '$x_studin_name', '$x_studin_mail', '$x_studin_phone', '$quiz', '$crossword', '$hackathon', '$surprise', '$group_discussion', '$photography','1')");
        }
        else {
            mysqli_query($con, "UPDATE schools SET school_name='$school_name',school_email='$school_email',accomp_teach_name='$accomp_teach_name',accomp_teach_phone='$accomp_teach_phone',x_teachin_name='$x_teachin_name',x_teachin_email='$x_teachin_mail',x_teachin_phone='$x_teachin_phone',x_studin_name='$x_studin_name',x_studin_email='$x_studin_mail',x_studin_phone='$x_studin_phone',quiz='$quiz',crossword='$crossword',hackathon='$hackathon',surprise='$surprise',gd='$group_discussion',photography='$photography',xino_status='1' WHERE school_name='$school_name'");
        	$sql = "UPDATE invite SET reg_status=1 WHERE school='".$_SESSION['school']."'";
        	mysqli_query($con, $sql);    
        }
    }
    else if($event_name == "bizeco") {
        $accomp_teach_name = trimStr($con,$_POST['accomp_teach_name']);
        $accomp_teach_phone = trimStr($con,$_POST['accomp_teach_phone']);
    	$b_teachin_name = trimStr($con,$_POST['b_teachin_name']);
    	$b_teachin_mail = trimStr($con,$_POST['b_teachin_mail']);
    	$b_teachin_phone = trimStr($con,$_POST['b_teachin_phone']);
    	$b_studin_name = trimStr($con,$_POST['b_studin_name']);
    	$b_studin_mail = trimStr($con,$_POST['b_studin_mail']);
    	$b_studin_phone = trimStr($con,$_POST['b_studin_phone']);
    	$insolvent1 = $_POST['insolvent1'];
    	$insolvent2 = $_POST['insolvent2'];
    	$insolvent = [$insolvent1,$insolvent2];
    	$insolvent = json_encode($insolvent);
    	$outcry1 = $_POST['outcry1'];
    	$outcry2 = $_POST['outcry2'];
    	$outcry = [$outcry1,$outcry2];
    	$outcry = json_encode($outcry);
    	$turnaround1 = $_POST['turnaround1'];
    	$turnaround2 = $_POST['turnaround2'];
    	$turnaround = [$turnaround1,$turnaround2];
    	$turnaround = json_encode($turnaround);
    	$bse1 = $_POST['bse1'];
    	$bse2 = $_POST['bse2'];
    	$bse = [$bse1,$bse2];
    	$bse = json_encode($bse);
    	$realtor1 = $_POST['realtor1'];
    	$realtor2 = $_POST['realtor2'];
    	$realtor = [$realtor1,$realtor2];
    	$realtor = json_encode($realtor);
        if ($count == 0) {
        	mysqli_query($con, "INSERT INTO schools (school_name,school_email,accomp_teach_name,accomp_teach_phone,b_teachin_name,b_teachin_email,b_teachin_phone,b_studin_name,b_studin_email,b_studin_phone,insolvent,outcry,turnaround,bse,realtor,bizeco_status) VALUES ('$school_name', '$school_email', '$accomp_teach_name', '$accomp_teach_phone', '$b_teachin_name', '$b_teachin_mail', '$b_teachin_phone', '$b_studin_name', '$b_studin_mail', '$b_studin_phone', '$insolvent', '$outcry', '$turnaround', '$bse', '$realtor','1')");
        }
        else {
            mysqli_query($con, "UPDATE schools SET school_name='$school_name',school_email='$school_email',accomp_teach_name='$accomp_teach_name',accomp_teach_phone='$accomp_teach_phone',b_teachin_name='$b_teachin_name',b_teachin_email='$b_teachin_mail',b_teachin_phone='$b_teachin_phone',b_studin_name='$b_studin_name',b_studin_email='$b_studin_mail',b_studin_phone='$b_studin_phone',insolvent='$insolvent',outcry='$outcry',turnaround='$turnaround',bse='$bse',realtor='$realtor',bizeco_status='1' WHERE school_name='$school_name'");
        	$sql = "UPDATE invite SET reg_status=1 WHERE school='".$_SESSION['school']."'";
        	mysqli_query($con, $sql);
        }
    }
    else if ($event_name == "both") {
        $accomp_teach_name = trimStr($con,$_POST['accomp_teach_name']);
        $accomp_teach_phone = trimStr($con,$_POST['accomp_teach_phone']);
    	$x_teachin_name = trimStr($con,$_POST['x_teachin_name']);
    	$x_teachin_mail = trimStr($con,$_POST['x_teachin_mail']);
    	$x_teachin_phone = trimStr($con,$_POST['x_teachin_phone']);
    	$x_studin_name = trimStr($con,$_POST['x_studin_name']);
    	$x_studin_mail = trimStr($con,$_POST['x_studin_mail']);
    	$x_studin_phone = trimStr($con,$_POST['x_studin_phone']);
    	$quiz1 = $_POST['quiz1'];
    	$quiz2 = $_POST['quiz2'];
    	$quiz = [$quiz1,$quiz2];
    	$quiz = json_encode($quiz);
    	$cross1 = $_POST['cross1'];
    	$cross2 = $_POST['cross2'];
    	$crossword = [$cross1,$cross2];
    	$crossword = json_encode($crossword);
    	$hack1 = $_POST['hack1'];
    	$hack2 = $_POST['hack2'];
    	$hack3 = $_POST['hack3'];
    	$hack4 = $_POST['hack4'];
    	$hackathon = [$hack1,$hack2,$hack3,$hack4];
    	$hackathon = json_encode($hackathon);
    	$surp1 = $_POST['surp1'];
    	$surp2 = $_POST['surp2'];
    	$surprise = [$surp1,$surp2];
    	$surprise = json_encode($surprise);
    	$gd = $_POST['gd'];
    	$group_discussion = [$gd];
    	$group_discussion = json_encode($group_discussion);
    	$photo = $_POST['photo'];
    	$photography = [$photo];
    	$photography = json_encode($photography);
    	$b_teachin_name = trimStr($con,$_POST['b_teachin_name']);
    	$b_teachin_mail = trimStr($con,$_POST['b_teachin_mail']);
    	$b_teachin_phone = trimStr($con,$_POST['b_teachin_phone']);
    	$b_studin_name = trimStr($con,$_POST['b_studin_name']);
    	$b_studin_mail = trimStr($con,$_POST['b_studin_mail']);
    	$b_studin_phone = trimStr($con,$_POST['b_studin_phone']);
    	$insolvent1 = $_POST['insolvent1'];
    	$insolvent2 = $_POST['insolvent2'];
    	$insolvent = [$insolvent1,$insolvent2];
    	$insolvent = json_encode($insolvent);
    	$outcry1 = $_POST['outcry1'];
    	$outcry2 = $_POST['outcry2'];
    	$outcry = [$outcry1,$outcry2];
    	$outcry = json_encode($outcry);
    	$turnaround1 = $_POST['turnaround1'];
    	$turnaround2 = $_POST['turnaround2'];
    	$turnaround = [$turnaround1,$turnaround2];
    	$turnaround = json_encode($turnaround);
    	$bse1 = $_POST['bse1'];
    	$bse2 = $_POST['bse2'];
    	$bse = [$bse1,$bse2];
    	$bse = json_encode($bse);
    	$realtor1 = $_POST['realtor1'];
    	$realtor2 = $_POST['realtor2'];
    	$realtor = [$realtor1,$realtor2];
    	$realtor = json_encode($realtor);
    	mysqli_query($con, "INSERT INTO schools (school_name,school_email,accomp_teach_name,accomp_teach_phone,x_teachin_name,x_teachin_email,x_teachin_phone,x_studin_name,x_studin_email,x_studin_phone,quiz,crossword,hackathon,surprise,gd,photography,b_teachin_name,b_teachin_email,b_teachin_phone,b_studin_name,b_studin_email,b_studin_phone,insolvent,outcry,turnaround,bse,realtor) VALUES ('$school_name', '$school_email', '$accomp_teach_name', '$accomp_teach_phone', '$x_teachin_name', '$x_teachin_mail', '$x_teachin_phone', '$x_studin_name', '$x_studin_mail', '$x_studin_phone', '$quiz', '$crossword', '$hackathon', '$surprise', '$group_discussion', '$photography', '$b_teachin_name', '$b_teachin_mail', '$b_teachin_phone', '$b_studin_name', '$b_studin_mail', '$b_studin_phone', '$insolvent', '$outcry', '$turnaround', '$bse', '$realtor')");
    	$sql = "UPDATE invite SET reg_status=1 WHERE school='".$_SESSION['school']."'";
    	mysqli_query($con, $sql);
    }
    

	
// 	mysqli_query($con, "INSERT INTO schools (school_name,school_email,accomp_teach_name,accomp_teach_phone,x_teachin_name,x_teachin_email,x_teachin_phone,x_studin_name,x_studin_email,x_studin_phone,quiz,crossword,hackathon,surprise,gd,photography,b_teachin_name,b_teachin_email,b_teachin_phone,b_studin_name,b_studin_email,b_studin_phone,insolvent,outcry,turnaround,bse,realtor) VALUES ('$school_name', '$school_email', '$accomp_teach_name', '$accomp_teach_phone', '$x_teachin_name', '$x_teachin_mail', '$x_teachin_phone', '$x_studin_name', '$x_studin_mail', '$x_studin_phone', '$quiz', '$crossword', '$hackathon', '$surprise', '$group_discussion', '$photography', '$b_teachin_name', '$b_teachin_mail', '$b_teachin_phone', '$b_studin_name', '$b_studin_mail', '$b_studin_phone', '$insolvent', '$outcry', '$turnaround', '$bse', '$realtor')");
// 	$sql = "UPDATE invite SET reg_status=1 WHERE school='".$_SESSION['school']."'";
// 	mysqli_query($con, $sql);
//participant mail
$mail_to_send_to = $x_teachin_mail . "," . $x_studin_mail . "," . $b_teachin_mail . "," . $b_studin_mail;
$from_email = "XINO AND BIZECO 2019 <mail@xino.in>";
$reply_email = "XINO <xino@dpsrohini.com>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = "<html>
			<body style=\"font-family:'Open Sans',sans-serif;\">
			<center>
			<br><br><br>
			    <img src=\"https://i.imgur.com/EAHXbWf.png\" />
				<h2 style=\"font-size:30px; color:#2c3e50; font-weight:300;\">Your school has been successfully registered! :D</h2>
			<br><br><br><br><br>
			</center>
			</body>
			</html>";
                $headers .= "From: $from_email" . "\r\n" . "Reply-To: $reply_email" . "\r\n" ;
                $a = mail( $mail_to_send_to, "Confirmation Mail | XINO AND BIZECO 2019", $message, $headers );
//admin notification mail

$mail_to_send_to = "sayamkanwar616@gmail.com";
$from_email = "XINO AND BIZECO 2019 <mail@xino.in>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = "<html>
			<body style=\"font-family:'Open Sans',sans-serif;\">
			<center>
			<br><br><br>
			    <img src=\"https://i.imgur.com/EAHXbWf.png\" />
				<h2 style=\"font-size:30px; color:#2c3e50; font-weight:300;\">{$school_name} has registered for {$event_name}, please check the admin panel for more details!</h2>
			<br><br><br><br><br>
			</center>
			</body>
			</html>";
                $headers .= "From: $from_email" . "\r\n";
                $a = mail( $mail_to_send_to, "Registration Notification | XINO AND BIZECO 2019", $message, $headers );
		session_destroy();
		header("location:success.php?event=".$event_name);
		//echo "success";
		
		
// 	else {
// 		echo "Error: " . mysqli_error($con);
// 		//header("location: register.php?m=2");
// 	}
	
}

?>