<?php
$name = $_POST['name'];
$visitorEmail = $_POST['visitorEmail'];
$message = $_POST['message'];

$emailFrom = 'info@adrianarosani.co.zw';

$emailSubject = 'New Interior Decor Comment Submission';

$emailBody = "User Name: $name.\n";
				"User Email: $visitorEmail.\n";
				"User Subject: New Interior Decor Comment Submission.\n";
				"User Message: $message.\n";

$to = 'adrianazanga@gmail.com';

$headers = "From: $emailFrom \r\n";

$headers .= "Reply-To: $visitorEmail";

mail($to, $emailSubject, $emailBody, $headers);

header("Location: intdecor.html")
?>