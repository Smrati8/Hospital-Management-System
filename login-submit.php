<?php 
ob_start();
//error_reporting(E_ALL);
//ini_set("error_reporting", E_ALL);

include_once 'includes/config.php';
require 'mailer/PHPMailerAutoload.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$resUser = mysqli_query($conn, "select * from tbluser where email = '$email' and password = '$password'");
$count = mysqli_num_rows($resUser);


if($count == 0) 
{
	$userData = mysqli_fetch_assoc($resUser);
	$_SESSION['userid'] = $userData['id'];
	$msg = 'fail';
	echo json_encode(array("msg" => $msg));
	exit();
}
else
{
	$userData = mysqli_fetch_assoc($resUser);
	$_SESSION['userid'] = $userData['id'];
	$msg = 'success';
	echo json_encode(array("msg" => $msg));
	exit();
}
?>