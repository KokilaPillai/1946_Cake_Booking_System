<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
	<h1>USER - SEARCH PRODUCT</h1>
</head>
<body bgcolor="pink">
	<div>
		<form method="post">
			<div>Enter search key: <input type="text" name="search_key" required><br><br></div>
			<div>Search criteria: <select name="column">
				<option value="id">ID</option>
				<option value="name">Name</option>
				<option value="type">Type</option>
				<option value="price">Price</option>
			</select><br><br>
		</div>
			<input type="submit" name="search" value="SEARCH">
		</form>
	</div>
	<?php
include("connection.php");

//search
if(isset($_POST['search'])) {
	$key = $_POST['search_key'];
	$column = $_POST['column'];

	$query = "SELECT * FROM cakes WHERE $column LIKE '%$key%'";
	$result = $conn->query($query);
	if($result->num_rows > 0){
		echo "<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Quantity (in kg)</th>
			<th>Price</th>
			</tr>";
		while ($row=$result->fetch_assoc()) {
			echo "<br><tr>
			<td>".$row['id']."</td>
			<td><img src='".$row["image"]."' style='width:70px; height=70px;'</td>
			<td>".$row['name']."</td>
			<td>".$row['type']."</td>
			<td>".$row['quantity']."</td>
			<td>".$row['price']."</td>
			</tr>";
		}
		echo "</table>";
	}
	else
		echo "0 results";
}
?>
	<br><a href="homepage_user.php">MAIN MENU</a>
</body>
</html>