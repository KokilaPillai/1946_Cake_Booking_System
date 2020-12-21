<?php
include("connection.php");

//insert
if(isset($_POST['insert'])) {
	$id = $_POST['id'];
	$cname = $_POST['cname'];
	$file = $_FILES['image']['name'];
	$type = $_POST['type'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];

	
	$query = "INSERT INTO cakes VALUES('$id', '$cname', '$file', '$type', '$quantity', '$price')";
	$result = mysqli_query($conn, $query);
	if($result){
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
		?>
		<script type = "text/javascript"> window.location.href="cake_displayA.php"</script>
		<?php
	}
	else
		echo "Error: ".$conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<h1>ADMIN - INSERT NEW PRODUCT</h1>
</head>
<body bgcolor="pink">
	<div>
		<form method="post" enctype="multipart/form-data">
			<div>Cake ID: <input type="text" name="id" required><br><br></div>
			<div>Cake Name: <input type="text" name="cname" required><br><br></div>
			<div>Select Image file: <input type="file" name="image" required><br><br></div>
			<div>Type: <input type="text" name="type" required><br><br></div>
			<div>Quantity(in kg): <input type="text" name="quantity" required><br><br></div>
			<div>Price: <input type="text" name="price" required><br><br></div>
			<div><input type="submit" name="insert" value="INSERT"></div>
		</form>
	</div>
</body>
</html>