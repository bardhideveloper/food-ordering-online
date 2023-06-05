<?php

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	require "connect.php";
	mysqli_query($connect, "DELETE FROM products WHERE id='$id';");
	header("Location: ../../deleteProducts.php");
}

?>