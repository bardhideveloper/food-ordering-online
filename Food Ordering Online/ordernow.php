<?php
//start the session
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 2) {
//this view is displayed for all non-admin users (when they are logged in)
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

    <title>Order Now</title>
</head>
<body>
    <div class="container-xl">
        <?php include "includes/template/nav.php";?>
		
		<!--banner of ordernow-->
        <h3 class="text-center pe-5 pt-5">Order Now</h3>
		
		<!--connect  with the orderProducts script-->
        <?php
			$error = $errorUsername = $errorAddress = $errorPhN = $errorQuantity = $errorProducts = "";
			$products= $uname = $address =  $phonenumber = $quantity ="";
			$products = "Select Product";	
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				include 'simpleuser/orderProducts.php';
			}
		?>

		<!--Table and form-->
        <table class="ms-auto me-auto">
            <form action="" method="POST">

				<!--Username-->
                <tr>
                    <td class="pe-5 pt-5"><input type="text" class="form-control" name="uname" placeholder = "Username" value="<?php if($errorUsername == "");?>"></td>
                </tr>

				<!--errors-->
                <tr>
					<td>
						<?php
						echo "<span class=''>$errorUsername<span>";
						?>
					</td>
				</tr>

				<!--Address-->
                <tr>
                    <td class="pe-5 pt-5"><input type="text" class="form-control" name="address" placeholder = "Address" value="<?php if($errorAddress == "");?>"></td>
                </tr>

				<!--errors-->
                <tr>
					<td>
						<?php
						echo "<span class=''>$errorAddress<span>";
						?>
					</td>
				</tr>

				<!--Quantity-->
                <tr>
                    <td class="pe-5 pt-5"><input type="text" class="form-control" name="quantity" placeholder = "Quantity" value="<?php if($errorQuantity == "");?>"></td>
                </tr>

				<!--errors-->
                <tr>
					<td>
						<?php
						echo "<span class=''>$errorQuantity<span>";
						?>
					</td>
				</tr>
				
				<!--Select Products-->
                <tr>
                    <td class="pe-5 pt-5"><select name="products" class="form-select form-select-lg">
                        <option value = "<?php echo $products;?>"><?php echo $products;?></option>
                        <?php include "includes/functions/selectProducts.php";?>
                    </select></td>
                </tr>

				<!--errors-->
                <tr>
					<td colspan = "2">
						<?php
						echo "<span class=''>$errorProducts<span>";
						?>
					</td>
				</tr>

				<!--Phone Number-->
                <tr>
                    <td class="pe-5 pt-5"><input type="text" class="form-control" name="pnumber" placeholder = "Phone Number" value="<?php if($errorPhN == "");?>"></td>
                </tr>

				<!--errors-->
                <tr>
					<td>
						<?php
						echo "<span class=''>$errorPhN<span>";
						?>
					</td>
				</tr>

				<!--General error-->
				<tr>
					<td>
					    <?php
						echo "<span class=''>$error<span>";
						?>
					</td>
				</tr>

				<!--Order Now button-->
                <tr>
                <td class="pe-5 pt-5"><input type = "submit" class="form-control btn btn-success" name = "order" value="Order Now"></td>
                </tr>

        </table>

        <?php include "includes/template/aside.php";?>
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
?>