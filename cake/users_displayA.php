<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body bgcolor="pink">
	<?php
	include("connection.php");
	$query = "SELECT Username, Password, Role FROM register";
	echo "<b><h2>REGISTERED USERS</h2></b>";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "<table>
			<tr> 
			<th>Username</th>
			<th>Password</th>
			<th>Role</th>
			</tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr> 
			<td>".$row["Username"]."</td>
			<td>".$row["Password"]."</td>
			<td>".$row["Role"]."</td>
			</tr>";
		}
		echo "</table></b>";
	}
	else
		echo "0 results";
?>
	<br><a href="homepage_admin.php">MAIN MENU</a>
</body>
</html>