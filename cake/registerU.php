<?php
include("connection.php");

if(isset($_POST['register'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];

	$sql = "INSERT INTO register(username, password, role) values('$user', '$pass', '$role')";
	if($conn->query($sql)) {
		?>
		<script type = "text/javascript"> window.location.href="login.php"</script>
		<?php
	}
	else {
		echo "Error: ".$sql . "<br>". $conn->error;
	}
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
	<h1>REGISTRATION FORM</h1>
</head>
<body bgcolor="pink">
	<form method="post">
		<div>Username: <input type="text" name="user" required><br><br></div>
		<div>Password: <input type="password" name="pass" required><br><br></div>
		<div>Select Role: <select name="role">
			<option value="user">User</option>
		</select><br><br></div>
		<div><input type="submit" name="register" value="REGISTER"></div>
	</form>
</body>