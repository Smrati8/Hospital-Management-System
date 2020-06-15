<?php 
ob_start();

require 'mailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email_address = $_POST['email_address'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


/*------------------------------------mail--------------------------------------------*/

$subject = "Contact Form Enquiry";

$body = "Doctor: ".$docName."<br />";
$body .= "Name: ".$patient_name."<br />";
$body .= "Phone: ".$patient_phone."<br />";
$body .= "Email: ".$patient_email."<br />";
$body .= "Date: ".$datepicker."<br />";

$fromuser = "info@kkmemorialh.com";
$touser = $patient_email;

$mail = new PHPMailer;

$mail->setFrom($fromuser);
$mail->addAddress($touser);
$mail->Subject = $subject;
$mail->msgHTML($body);
$mail->send();
?>