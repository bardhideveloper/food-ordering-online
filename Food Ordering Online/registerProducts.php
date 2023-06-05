<?php
//start the session
session_start();
//if the user is logged into the system and is an admin, then this view of the web page will be displayed
if(isset($_SESSION['user'])) {
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
    
    <title>Admin-Panel/Register Products</title>
</head>
<body>
    <div class="container-xl">
        <?php include "includes/template/nav.php";?>

        <div class="content-main">


            <h3 class="text-center pt-5">New Product</h3>
            <?php
			    $error = $errorID = $errorName = $errorPrice = "";
				$id= $emri = $cmimi = "";
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'includes/functions/insertProducts.php';
					}	
			?>

            <table class="ms-auto me-auto">
                <form action = "" method = "POST">

                    <!--ID-->
                    <tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "id" placeholder = "ID of new Product" value="<?php if($errorID == "") ?>"></td>		
					</tr>

                    <!--error ID-->
					<tr>
						<td>
							<?php
							echo "<span class=''>$errorID<span>";
							?>
							</td>
					</tr>

                    <!--Name-->
					<tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "name" placeholder = "Name of new Product" value="<?php if($errorName == "") ?>"></td>
					</tr>
                    
                    <!--error name-->
                    <tr>
						<td>
							<?php
							echo "<span class=''>$errorName<span>";
							?>
						</td>
					</tr>
					
                    <!--Price-->
                    <tr>
						<td class="pt-5"><input type = "text" class="form-control" name = "price" placeholder = "Price of new Product" value="<?php if($errorPrice == "") ?>"></td>
					</tr>

                    <!--error price-->
					<tr>
                        <td>
                            <?php
                            echo "<span class='error'>$errorPrice<span>";
                            ?>
                        </td>
                    </tr>
                    
                    <!--General Error-->
                    <tr>
                        <td>
                            <?php
                            echo "<span class='error'>$error<span>";
                            ?>
                        </td>
                    <td></td>
                    </tr>

                    <tr>
                        <td class="pt-5 pb-5"><input type = "submit" class="form-control btn btn-success" name = "register" value="Register Product"></td>
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
//if there is no link, then redirect to the base page before the link
else {
	header("Location:login.php");
}
?>