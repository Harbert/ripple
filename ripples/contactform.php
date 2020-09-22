<?php
$client = $_POST['client'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

mail("ripplesfoundation2020@gmail.com","Contact from ripplesfoundation.org",$message,"From: $email\r\n");


echo "Thank you for contacting us, we promise to get back to you soon!"

header("location: test\index.php");

die();
 ?>
