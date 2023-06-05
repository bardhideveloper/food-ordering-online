<?php
//start the session
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 2) {
//this view is displayed for users who are logged in
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

    <title>My Orders</title>
</head>
<body>
    <div class="container-xl">

        <?php include "includes/template/nav.php";?>
        <?php include "includes/template/header.php";?>

        <div class="content-main">

			<!--banner of myorders-->
            <h3 class="text-center pe-5 pt-5">My Orders</h3>

			 <!--connect  with the selectMyOrders script-->
            	<?php 
				$error = "";
				$user = "";
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'includes/functions/selectMyOrders.php';
					}
				?>

			<!--Table and form-->
            <table class = "ms-auto me-auto">
			    <form action = "" method = "POST">

					 <!--Username-->
					<tr>
						<td><input type = "text" class="form-control" name = "user" placeholder = "Username" value="<?php if($error == "");?>"></td>
					</tr>

					<!--General Error-->
					<tr>
						<td>
							<?php
							echo "<span class=''>$error<span>";
							?>
						</td>
					</tr>

					<!--My Orders Button-->
					<tr>
						<td class="pt-5"><input type = "submit"  name = "submit" class="form-control btn btn-primary" value="Continue"></td>
					</tr>

				</form>
			</table>
        </div>

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