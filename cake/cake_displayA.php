<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body bgcolor="pink">
	<?php
	include("connection.php");
	$query = "SELECT * FROM cakes";
	echo "<b><h1>ADMIN - DISLAY CAKES</h1></b>";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Image</th>
			<th>Type</th>
			<th>Quantity (in kg)</th>
			<th>Price</th>
			</tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "
			<tr> 
			<td>".$row["id"]."</td>
			<td>".$row["name"]."</td>
			<td><img src='".$row["image"]."' style='width:70px; height=70px;'</td>
			<td>".$row["type"]."</td>
			<td>".$row["quantity"]."</td>
			<td>".$row["price"]."</td>
			</tr>";
		}
		echo "</table>";
	}
	else
		echo "0 results";
?>
	<br><a href="homepage_admin.php">MAIN MENU</a>
</body>
</html>