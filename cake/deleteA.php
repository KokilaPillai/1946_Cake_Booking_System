<?php
include("connection.php");

//delete
if(isset($_POST['delete'])) {
	$delete_key = $_POST['delete_key'];
	$criteria = $_POST['criteria'];

	$query = "DELETE FROM cakes WHERE $criteria LIKE '%$delete_key%'";
	$result = mysqli_query($conn, $query);
	if($result) {		?>
			<script type = "text/javascript"> window.location.href="cake_displayA.php"</script>
			<?php
	}
	else{
		echo "0 results";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN - DELETE PRODUCT</h1>
</head>
<body bgcolor="pink">
	<form method="post">
		<div>Enter the cake to delete <input type="text" name="delete_key"><br><br></div>
		<div>Select criteria: <select name="criteria">
			<option value="ID">ID</option>
			<option value="NAME">Name</option></select><br><br></div>
		<input type="submit" name="delete" value="DELETE">
	</form>
</body>
</html>