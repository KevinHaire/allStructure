<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'startersitebackups@gmail.com';     // SMTP username
$mail->Password = 'pwmgocpuqxmavyeo';                 // SMTP password
$mail->Port = 587;
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'robot@startersitebackups.com';
$mail->FromName = 'AllStructureGroup.ca';
$mail->addAddress('kevhaire@gmail.com');    // Name is optional
$mail->addReplyTo('info@allstructuregroup.ca', 'Information');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact form from allstructuregroup.ca';
$mail->Body    = 'Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Phone Number: '.$_POST['phone'].'<br>Message: '.$_POST['content'];
								  

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

?>