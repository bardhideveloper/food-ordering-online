<?php

//connection to db - necessary to continue manipulating data in db.
require "includes/functions/connect.php";

//receiving form data with POST
$fullname = $_POST['fname'];
$birthdate = $_POST['bdate'];
$username = $_POST['username'];
$password = $_POST['password'];

//we need this part to validate the id (username) of the user who is trying to register in the system.
//we want to see if there is a user with the id marked in the HTML form.
//we need the $countID variable to validate the value entered in the id field.
$query = mysqli_query($connect, "SELECT username FROM users WHERE username='$username'");
$countUser = mysqli_num_rows($query);

//variable $register indicates whether we can register the student or not, depending on its value since it is boolean
//wherever there are errors, the variable $register takes the value false (that is, the initial value true is overwritten with false)
$register = true;

//in the following we will only look at cases where an error occurred while filling out the form that we are validating (for its current data)
//if none of the form fields are filled

if(empty($fullname) && empty($birthdate) && empty($username) && empty($password)){
    $error = "All fields must be completed!";
    $register = false;
}

//if at least one of the fields contains a corresponding value, we need to validate that value
else{
    //if field fullname is empty
    if(empty($fullname)){
        $errorFullname = "The fullname field must be filled!";
        $register = false;
    }

        //fullname has a value, validate it
        else{
        //if the fullname also contains other non-letter characters
            if(!preg_match("/^([a-zA-Z' ]+)$/", $fullname)) {
                $errorFullname = "The fullname must contain only letters!";
                $register = false;
            }
        }

    //if the birthday field is empty
    if(empty($birthdate)) {
        $errorBirthdate = "Birthday field must be filled!";
        $register = false;
    }
    //birthdate has a value, validate it
        else{
            if(!is_numeric($birthdate)) {
                $errorBirthdate = "Birthdate must contain only numbers!";
                $register = false;
            }
        }

    //if the username field is empty
    if(empty($username)) {
        $errorUsername = "Username field must be filled!";
        $register = false;
    }

    //username has a value, validate it
        else {
		//if id also contains other numbers characters
		    if(is_numeric($username)) {
			    $errorUsername = "User must contain only letters!";
			    $register = false;
		    }
            //if there is a user who has this id (id is the username through which the user will log in to his account in the system)
		    else if($countUser != 0) {
			$errorUsername = "This user exists!";
			$register = false;
		    }
        }

        //if the password field is empty
    if(empty($password)) {
        $errorPassword = "The password field must be filled!";
        $register = false;
    }

    //password has a value, validate it
	else {
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		
		//if the password is weak
        //if none of the following conditions are met, then it is considered that the password is weak
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$errorPassword = "Weak password!";
			$errorPassTooltip = "Password must contain at least 8 characters and must include at least one uppercase, lowercase letter, one number and one special character!";
			$register = false;
		}
	}

    //if no error has occurred (that is, none of the conditions have been fulfilled that represent only the checking of errors that have occurred), then that means that the variable $register has never received the value false, but continues to have the initial value true, which means that the condition will be fulfilled and we will be able to insert the data into the db
    if($register == true) {
    //insert into db
    //now we are ready to insert the new user into the db
    //in our case we will do a double insertion in two different tables

    $query1 = "INSERT INTO users (username,fullname,birthday,password,role) VALUES ('$username', '$fullname','$birthdate',md5('$password'),'2');";
		if(mysqli_multi_query($connect, $query1)) {
			//inserted, redirect to login.php
			header("Location:login.php");
		}
		else {
			$error = "An insertion error occurred";
		}
    }
}

?>