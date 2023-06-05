<?php

// validate connection form data
//connect to db
require "includes/functions/connect.php";

//receiving form data via POST method
$username =  $_POST['usernameLogin'];
$password = $_POST['passLogin'];

$login = true;

//validation of input data
//if none of the fields are filled
if(empty($username) && empty($password)) {
	$error = "All fields must be completed!";
	$login = false;
}

//if at least one of the fields has a value, then validate that value
else{
    //validate username
    //if username is empty
    if(empty($username)) {
		$errorUsername = "Username field must be filled!";
		$login = false;
	}

    //if username has a value, validate it
    else {
		//if the user does not exist
		$query1 = mysqli_query($connect, "SELECT username FROM users WHERE username='$username';");
		$count1 = mysqli_num_rows($query1);
		
		//if no rows result => user does not exist
		if($count1 == 0) {
			$errorUsername = "This user does not exist!";
			$login = false;
		}
	}

    //password validation
    //if password is empty
    if(empty($password)) {
		$errorPassword = "The password field must be filled!";
		$login = false;
	}

    //if the password has a value, validate it
    else {
		//if the password for this user is not correct
		$query2 = mysqli_query($connect, "SELECT password FROM users WHERE username='$username';");
		$queryPass = mysqli_fetch_assoc($query2);
		$passDB = $queryPass['password'];
		
		//if password values do not match
		if(md5($password) != $passDB) {
			$errorPass = "The password is not correct!";
			$login = false;
		}
	}

    //if no error has occurred, then no condition representing an error occurred has ever been fulfilled => the login variable still contains the value true
    if($login) {
		//the user logs into the system, depending on his role
		$query3 = mysqli_query($connect, "SELECT role FROM users WHERE username='$username';");
		$queryRoli = mysqli_fetch_assoc($query3);
		$role = $queryRoli['role'];
		
		$_SESSION['user'] = $username;
		$_SESSION['role'] = $role;
		
		//ridrejtoje ne faqen baze e cila mund te qaset pas kyqjes
		if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
		if($_SESSION['role'] == 2) {
		header("Location: home.php");}}
		
		if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
		if($_SESSION['role'] == 1) {
		header("Location: homeadmin.php");}}
		
	}
}
?>