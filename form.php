<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='file:///C:/Users/MCS/Desktop/project/contact.html?';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n";
"User Email:$email.\n".
"User Subject:$subject.\n".
"User Message:$message.\n";
$to='sairajpatel8@gmail.com';
$headers="From:$email_form \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html");

?>