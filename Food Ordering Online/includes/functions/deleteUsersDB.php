<?php

if(isset($_GET['username'])) {
	$username = $_GET['username'];
	require "connect.php";
	mysqli_query($connect, "DELETE FROM users WHERE username='$username';");
	header("Location: ../../users.php");
}

?>