<?php

//connect to db
require 'includes/functions/connect.php';

//query to select the products
$query = mysqli_query($connect, "SELECT name FROM products");

while($row = mysqli_fetch_assoc($query)) {
	$products = $row['name'];
	echo "<option value='$products'>$products</option>";
}

?>