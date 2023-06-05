<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel/Edit and Delete Products</title>
</head>
<body>
    
<?php

require "includes/functions/connect.php";
$query1 = mysqli_query($connect, "SELECT * FROM products;");
echo "<table class='table table-bordered'>
		<tr class=''>
			<th class=''>id</th>
			<th class=''>name</th>
			<th class=''>price</th>
			<th class=''>edit</th>
			<th class=''>delete</th>
		</tr>";

while($row1 = mysqli_fetch_assoc($query1)) {
	$id = $row1['id'];
	$name = $row1['name'];
	$price = $row1['price'];

echo "<tr>
		<td class=''>$id</td>
		<td class=''>$name</td>
		<td class=''>$price</td>
		<td class=''><a href='update.php?id=$row1[id]&name=$row1[name]&price=$row1[price]' class='btn btn-primary'>Edit</a></td>
		<td class=''><a href='includes/functions/deleteProductsDB.php?id=$id' class='btn btn-danger'>Delete</a></td>	
	</tr>";
}
echo "</table>";

?>

</body>
</html>

