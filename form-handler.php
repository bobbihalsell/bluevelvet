<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'bluevelvetcateringnyc@gmail.com';
$email_subject = 'MESSAGE VIA FORM';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Message: $message.\n";

$to = 'bobbi.halsell00@gmail.com';

$header = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $headers);

header("Location: contact.html");

?>