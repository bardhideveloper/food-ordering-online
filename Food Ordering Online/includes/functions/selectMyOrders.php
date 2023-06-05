<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>

    <title>Select My Orders</title>
</head>
<body>
    
<?php 

// validate connection form data
//connect to db
require 'includes/functions/connect.php';

$user = $_POST['user'];
$porositeMia =  true;

	//validation of input data
	//if none of the fields are filled
	if(empty ($user)) {
		$error = "Username field must be filled!!!";
		$myOrders = false;
	}	

	//query to select myorders
	else {
	$query1 = mysqli_query($connect, "SELECT u.username as Username , u.fullname as Client , o.id as NrOrder , pr.name as ProductName, o.quantity as Quantity , o.address as Address , o.phonenumber as PhoneNumber
    FROM orders o , users u , products pr 
    WHERE u.username = o.uname and o.idPr = pr.id AND u.username='$user';");

	//table to view myorders
    echo "<table class='table table-bordered'>";
    echo "<th>Username</th><th>Client</th><th>NrOrder</th>"."<th>ProductName</th>"."<th>Quantity</th>"."<th>Address</th>"."<th>PhoneNumber</th>";	
    while($row = mysqli_fetch_array($query1))
    {
	echo"<tr>";
	echo "<td>";
	echo $row['Username'];
	echo "</td>";
	echo "<td>";
	echo $row['Client'];
	echo "</td>";
	echo "<td>";
	echo $row['NrOrder'];
	echo "</td>";
	echo "<td>";
	echo $row['ProductName'];
	echo "</td>";
	echo "<td>";
	echo $row['Quantity'];
	echo "</td>";
	echo "<td>";
	echo $row['Address'];
	echo "</td>";
	echo "<td>";
	echo $row['PhoneNumber'];
	echo "</td>";
	echo "</td></tr>";
    }
    echo "</table>";
	}	
	
?>
</body>
</html>
