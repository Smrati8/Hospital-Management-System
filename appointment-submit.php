<?php 
ob_start();
//error_reporting(E_ALL);
//ini_set("error_reporting", E_ALL);

include_once 'includes/config.php';
require 'mailer/PHPMailerAutoload.php';

$doctor = $_POST['doctor'];
$patient_name = $_POST['patient_name'];
$patient_email = $_POST['patient_email'];
$patient_phone = $_POST['patient_phone'];
$datepicker = $_POST['datepicker'];

$created_date = date("Y-m-d h:i:s");

$resDoc = mysqli_query($conn, "select name from tbldoctor where id = $doctor");
$docData = mysqli_fetch_assoc($resDoc);
$docName = $docData['name'];

// insert the records

$res = mysqli_query($conn, "select * from tbluser where email = '$patient_email'");
$count = mysqli_num_rows($res);

if($count == 0) 
{

	function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	/*------------------------------------mail--------------------------------------------*/

	$subject = "KK Memorial Hospital Appointment Request Details";

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

	$password = generateRandomString();

	$subjectLogin = "KK Memorial Hospital Login Details";

	$body1 = "Login: ".$patient_email."<br />";
	$body1 .= "Password: ".$password;

	$touser = $patient_email;

	$mail = new PHPMailer;

	$mail->setFrom($fromuser);
	$mail->addAddress($touser);
	$mail->Subject = $subjectLogin;
	$mail->msgHTML($body1);
	$mail->send();

	$sql = "INSERT INTO tbluser(name, phone, email, password, created_date, modify_date) VALUES ('$patient_name', '$patient_phone', '$patient_email','$password', '$created_date', '$created_date')";
	$q = $conn->query($sql);

	$lastID = $conn->insert_id;

	$sqlAppt = "INSERT INTO tblappointment(doctor_id, user_id, appointment_date, appointment_status, created_date, modify_date) VALUES ($doctor, $lastID, '$datepicker', 0, '$created_date', '$created_date')";
	$q = $conn->query($sqlAppt);
}
else
{

	/*------------------------------------mail--------------------------------------------*/

	$subject = "KK Memorial Hospital Appointment Request Details";

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

	$data = mysqli_fetch_assoc($res);
	$patient_id = $data['id'];

	$sqlAppt = "INSERT INTO tblappointment(doctor_id, user_id, appointment_date, appointment_status, created_date, modify_date) VALUES ($doctor, $patient_id, '$datepicker', 0, '$created_date', '$created_date')";
	$q = $conn->query($sqlAppt);
}
?>