<?php
include("connection.php");

if(isset($_POST['login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$usertype = $_POST['usertype'];

	$query = "SELECT * FROM register WHERE username='".$user."' AND password='".$pass."' AND role='".$usertype."'";
	$result = mysqli_query($conn, $query);
	if($result) {
		while ($row = mysqli_fetch_array($result)) 
			
		
		//Incorrect Username or Password
		if (mysqli_num_rows($result)==0){
			?>
			<script type = "text/javascript"> window.location.href="login.php"</script>
			<?php
		}

		//admin login
		else if ($user == 'kokip' && $pass == 'koki123') {
			?>
			<script type = "text/javascript"> window.location.href="homepage_admin.php"</script>
			<?php
		}
		
		//user login
		else{
			?>
			<script type = "text/javascript"> window.location.href="homepage_user.php"</script>
			<?php
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<h1>LOGIN FORM</h1>
</head>
<body bgcolor="pink">
	<form method="post">
		<div>Username: <input type="text" name="user" required><br><br></div>
		<div>Password: <input type="text" name="pass" required><br><br></div>
		<div>Select Role: <select name="usertype">
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select><br><br></div>
		<div>NEW USER? <a href="registerU.php">REGISTER HERE</a><br><br></div>
		<div><input type="submit" name="login" value="Login"></div>
	</form>
</body>
</html>