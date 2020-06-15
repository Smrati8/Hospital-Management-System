<?php

include_once 'includes/config.php';
require '../mailer/PHPMailerAutoload.php';

$id = $_POST['id'];
$email = $_POST['email'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$appointment_status = $_POST['appointment_status'];

if($appointment_status == 0)
{
	$status = 'Not Confirmed';
}
else
{
	$status = 'Confirmed';
}

$sql = "update tblappointment set appointment_date = '$appointment_date', appointment_time = '$appointment_time', appointment_status = $appointment_status where id = $id";

$q = $conn->query($sql);


if($appointment_status == 1)
{

	$subject = "KK Prashar Hospital Appointment";

	$body = "Appointment Date: ".$appointment_date."<br />";
	$body .= "Appointment Time: ".$appointment_time."<br />";
	$body .= "Status: ".$status;

	$fromuser = "info@kkprashar.com";
	$touser = $email;

	$mail = new PHPMailer;

	$mail->setFrom($fromuser);
	$mail->addAddress($touser);
	$mail->Subject = $subject;
	$mail->msgHTML($body);
	$mail->send();

	header("Location: appointments.php?msg=1");
}
else
{
	header("Location: appointments.php?msg=1");
}

?>