<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['comments'];

/* set to and from variables */
$to = "";
$from = "";
$headers = "From:" . $from ."\r\n";

$subject = "Contact from C360 website";
$message = "Name: $name \n Phone : $phone \n Email : $email \n  \n \n Comments \n $comments \n";

mail($to, $subject, $message, $headers);
?>