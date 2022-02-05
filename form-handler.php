<?php
$name = $_POST['name'];
$visiter_email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from='uom.edu.pk.clone.com';
$email_subject='New form submission';
$email_body = "User name: $name.\n".
                "User email : $visiter_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";

$to='mmusakhanse@gmail.com';

$headers = "From :email_from \r\n";
$headers = "Reply-to : $visiter_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>