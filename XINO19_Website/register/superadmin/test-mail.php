<?php
// 			$to = "sayamkanwar616@gmail.com";
// 			$subject = "Test Mail | XINO 2019";
// 			$message = "<html>
// 			<body style=\"font-family:'Open Sans',sans-serif;\">
// 			<center>
// 			<br><br><br>
// 				<img src=\"https://xino.in/LogoFull.png\" width=\"200\">
// 				<h2 style=\"font-size:30px; color:#2c3e50; font-weight:300;\">Hi, Thank you for registering!</h2>
// 				<br><br>
// 				<a style=\"text-decoration:none;font-size:20px;color:#fff;background:#2c3e50;border:none;outline:none;font-family:'Open Sans',sans-serif;text-transform:uppercase;padding:20px;padding-right:40px;padding-left:40px;border-radius:5px;cursor:pointer;box-shadow:0 5px #1f2c38;margin-top:40px;\" href=\"https://xino.in/\">Yay</a>
// 			<br><br><br><br><br>
// 			</center>
// 			</body>
// 			</html>";
// 			$headers = "From: XINO <mail@xino.in>"; // Put hosting email here
// 			$headers .= "MIME-Version: 1.0";
// 			$headers .= "Content-Type: text/html; charset=ISO-8859-1";
// 			$check = mail($to,$subject,$message,$headers);
// 			if (!$check) {
// 				echo "Mail not sent! :/";
// 			}

$mail_to_send_to = "sayamkanwar616@gmail.com";
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
				<br><br>
				<a style=\"text-decoration:none;font-size:16px;color:#34D0B3;border:none;outline:none;font-family:'Open Sans',sans-serif;text-transform:uppercase;padding:20px;padding-right:40px;padding-left:40px;border-radius:5px;cursor:pointer;box-shadow:0 5px #239b83;margin:20px;\" href=\"https://xino.in/\">XINO</a>
				<a style=\"text-decoration:none;font-size:16px;color:#07a0e1;border:none;outline:none;font-family:'Open Sans',sans-serif;text-transform:uppercase;padding:20px;padding-right:40px;padding-left:40px;border-radius:5px;cursor:pointer;box-shadow:0 5px #0b8abc;margin:20px;\" href=\"http://bizeco.in/\">BIZECO</a>
			<br><br><br><br><br>
			</center>
			</body>
			</html>";
                $headers .= "From: $from_email" . "\r\n" . "Reply-To: $reply_email" . "\r\n" ;
                $a = mail( $mail_to_send_to, "Confirmation Mail | XINO AND BIZECO 2019", $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
?>