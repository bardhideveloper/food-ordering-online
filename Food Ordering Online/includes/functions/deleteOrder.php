<?php

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	require "connect.php";
	mysqli_query($connect, "DELETE FROM orders WHERE id='$id';");
	header("Location: ../../orders.php");
}

?>