<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "cake";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn)
	die("Connection failed because ".mysqli_connect_error());

?>