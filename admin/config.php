<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "kgu_map";

	// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($conn, 'UTF8');
@mysqli_query("SET NAMES 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');
	// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	//echo "Connected successfully";
?>