<?php

// This is the script for sending email.


// change the email address below to your own email address.
$mailTo = 'myemail@email.com';


$name = htmlspecialchars($_POST['Name']);
$mailFrom = htmlspecialchars($_POST['Email']);
$subject =  'Message - '.htmlspecialchars($_POST['Subject']);
$message_text = htmlspecialchars($_POST['Message']);

$headers  = "From: $name <$mailFrom>\n";
$headers .= "Reply-To: $name <$mailFrom>\n";

$message = $message_text;

mail($mailTo, $subject, $message, $headers );

?>