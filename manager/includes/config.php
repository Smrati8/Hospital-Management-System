<?php  

error_reporting(0);
ini_set("error_reporting", 0);

	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','hospital');
	
	// Create connection
	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	session_start();
?>