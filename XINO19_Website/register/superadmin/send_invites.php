<?php
require_once('../dbconnect.php');
// require 'sendgrid-php/sendgrid-php.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("../sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$query = "SELECT * FROM invite";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result)) {
    $school_name = $row['school'];
    $school_email = $row['school_email'];
    $invite_code = $row['invite_code'];
    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom("mail@xino.in", "XINO");
    $email->addTo(
        $school_email, 
        $school_name,
        [ 
            "-invite_code-" => $invite_code
        ],
        0
    );
    $email->addBcc("xino@dpsrohini.com");
    $email->addBcc("bizecodpsr@gmail.com");
    $file_name = "Invite.pdf";
    $file_encoded = base64_encode(file_get_contents($file_name));
    $email->addAttachment(
        $file_encoded,
        "application/pdf",
        $file_name,
        "attachment"
    );
    $email->setTemplateId("f93961a3-3c01-4ec5-b2e0-2fd02b0f606f");
    $sendgrid = new \SendGrid("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");
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '.  $e->getMessage(). "\n";
    }
}


?>

