<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN PANEL</h1>
</head>
<body bgcolor="pink">
	<div>
		<ul>
			<a href="insertA.php"><input type="submit" value="INSERT NEW CAKE"></a><br><br>
			<a href="deleteA.php"><input type="submit" value="DELETE CAKE"></a><br><br>
			<a href="searchA.php"><input type="submit" value="SEARCH CAKE"></a><br><br>
			
			<a href="cake_displayA.php"><input type="submit" value="DISPLAY ALL CAKES"></a><br><br>
			<a href="users_displayA.php"><input type="submit" value="DISPLAY USERS"></a><br><br>
		</ul>
	</div>
</body>
</html>