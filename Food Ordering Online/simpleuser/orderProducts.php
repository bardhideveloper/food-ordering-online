<?php


require 'includes/functions/connect.php';

$uname = $_POST['uname'];
$address = $_POST['address'];
$products = $_POST['products'];
$phonenumber = $_POST['pnumber'];
$quantity = $_POST['quantity'];

$order =  true;

if(empty ($uname) && empty($address) && empty($quantity) && empty($phonenumber) && $products=="Select the product") {
    $error = "All fields must be completed!";
    $order = false;
    }

else{
    if(empty($uname)) {
		$errorUsername = "Username field must be filled!";
		$order = false;
	}
    //username has a value, validate it
    else{
        //if username also contains other numbers characters
        if(is_numeric($uname)) {
			$errorUsername = "Username must contain only letters!";
			$order = false;
		}
    }

    if(empty($address)){
		$errorAddress = "You must give us your address!";
		$order = false;
		}

	if($products == "Select the product") {
		$errorProducts = "You must select one of the products";
		$order = false;
	}

    if(empty($quantity)){
		$errorQuantity = "Mark the quantity of products!";
		$order = false;
		}
		else if(!is_numeric($quantity)) {
			$errorQuantity = "The quantity must contain only numbers!";
			$order = false;
		}
		if(empty($phonenumber)){
		$errorPhN = "Enter your phone number!";
		$order = false;
		}
		else if(!is_numeric($phonenumber)) {
			$errorPhN = "The phone number must contain only numbers!";
			$order = false;
		}

        else {
            if($order) {
            $query1 = mysqli_query($connect, "SELECT id FROM products WHERE name='$products';");
            $productid = mysqli_fetch_assoc($query1);
                $idPr = $productid['id'];
                
            $query2 = mysqli_query($connect, "SELECT username FROM users WHERE username='$uname';");
            $userid = mysqli_fetch_assoc($query2);
                $uname = $userid['username'];
                
            $query = mysqli_query($connect , "INSERT INTO orders (address ,quantity,phonenumber,idPr,uname) VALUES ('$address','$quantity','$phonenumber','$idPr','$uname');");
            header("Location:home.php");
            }
            else {
                    $error = "An insertion error occurred";
                    
                }
        }
}



?>