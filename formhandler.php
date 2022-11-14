<?php
$name = $_POST['name'];
$visitorEmail = $_POST['visitorEmail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailFrom = 'info@adrianarosani.co.zw';

$emailSubject = 'New Email from Potential Client!';

$emailBody = "Client Name: $name.\n
				Client Email: $visitorEmail.\n
				Subject: $subject.\n
				Client Message: $message.\n";

$to = 'adrianazanga@gmail.com';

$headers = "From: $emailFrom \r\n";

$headers .= "Reply-To: $visitorEmail";

mail($to, $emailSubject, $emailBody, $headers);

header("Location: contact.html")
?>
