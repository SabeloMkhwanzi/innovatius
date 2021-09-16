<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'sabelogmkhwanazi05@gmail.com';
$subject = 'Mail From Innovatius';
$txt =
    'Name = ' . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers =
    'From: noreply@https://innovatius.netlify.app/' .
    "\r\n" .
    'CC: sabelo.mailme@gmail.com';
if ($email != null) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header('Location:thankyou.html');
?>
