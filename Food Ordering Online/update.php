<?php 
//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 1) {
require 'includes/functions/connect.php';
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>

    <title>Update Products</title>
</head>
<body>
    <div class="container-xl">
        <?php include "includes/template/nav.php";?>

        <div class="content-main">
        <table class = "table table-bordered">
					<form action = "" method = "GET">
					<tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "id" placeholder = "" value="<?php echo "$id" ?>"></td>
					</tr>
					<tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "name" placeholder = "" value="<?php echo "$name" ?>"></td>
					</tr>
					<tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "price" placeholder = "" value="<?php echo "$price" ?>"></td>
					</tr>
					<tr>
						<td class="pt-5 pb-5"><input type = "submit" class="form-control" name = "edit" value="Edit"></td>
					</tr>
					</form>
				</table>
        </div>
        <?php include "includes/template/footer.php";?>
    </div>
</body>
</html>
<?php	
	}
	else {
		header("Location: home.php");
	}
}
else {
	header("Location: login.php");
}
if(isset ($_GET['edit'])) {
	$id = $_GET['id'];
	$name = $_GET['name'];
	$price = $_GET['price'];
	require 'includes/functions/connect.php';
	$query1 = mysqli_query($connect, "UPDATE products
							SET id='$id', name='$name',price='$price' WHERE id='$id';");
}
?>