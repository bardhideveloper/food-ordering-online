<?php

//connection to db - necessary to continue manipulating data in db
require "includes/functions/connect.php";

//receiving form data with POST
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$register = true;
if(empty($id)	&& empty($name)&& empty($price)) {
	$error = "All data must be filled in!";
	$register = false;
}
else {
	//if the id field is empty
	if(empty($id)) {
		$errorID = "The ID field must be filled!;";
		$register = false;
	}
	if(empty($name)) {
		$errorName = "The name field must be filled!";
		$register = false;
	}
	else {
		//if id also contains other non-numeric characters
		if(!is_numeric($id)) {
			$errorID = "ID must contain only number!";
			$register = false;
		}
	}
	if($register == true) {

//insert into db
//now we are ready to insert the new user into the db
//in our case we will do a double insertion in two different tables
		$query1 = mysqli_query($connect,"INSERT INTO products (id,name,price) VALUES ('$id', '$name','$price');");
		if(mysqli_multi_query($connect, $query1)) {
		}
	}
	else {
		echo "An insertion error occurred!!!";
	}
}
?>