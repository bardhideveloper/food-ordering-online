<?php
//start the session
session_start();
//if the user is not logged in, then display this view of this web page
if(!isset($_SESSION['user'])) {
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

    <title>Register</title>
</head>
<body>
     <div class="container-xl">
        <?php include "includes/template/nav.php";?>

        <div class="content-main shadow ms-2 me-2 p-3 mb-5 pb-5">

            <!--banner of registernow-->
            <h3 class="text-center pe-5 pt-5">Register Now</h3>

            <!--connect  with the registervalidate script-->
            <?php
				$error = $errorFullname = $errorBirthdate = $errorUsername = $errorPassword = $errorPassTooltip = "";
				$fullname = $username = $birthdate = "";
					
				if($_SERVER["REQUEST_METHOD"] == "POST") {
					include 'includes/validate/registerValidate.php';
				}	
			?>

            <!--table and form-->
            <table class="ms-auto me-auto">
                <form action="" method="POST">

                    <!--Fullname-->
                    <tr> 
                        <td class="pe-5 pt-5"><input type="text" class="form-control shadow" name="fname" placeholder = "Name and Surname" value="<?php if($errorFullname == "") echo $fullname;?>"></td>
                            <!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='text-danger'>$errorFullname<span>";
									?>
								</td>
							</tr>
                    </tr>

                    <!--Birthday-->
                    <tr>
                        <td class="pe-5 pt-5"><input type="birthdate" class="form-control shadow" name="bdate" placeholder = "Birthday" value="<?php if($errorBirthdate == "") echo $birthdate;?>"></td>
                            <!--errors-->
                            <tr>
								<td>
									<?php
									echo "<span class='text-danger'>$errorBirthdate<span>";
									?>
								</td>
							</tr>
                    </tr>

                    <!--Username-->
                    <tr>
                        <td class="pe-5 pt-5"><input type="text" class="form-control shadow" name="username" placeholder = "Username" value="<?php if($errorUsername == "") echo $username;?>"></td>
                        <!--errors-->
                            <tr>
								<td>
									<?php
									echo "<span class='text-danger'>$errorUsername<span>";
									?>
								</td>
							</tr>
                    </tr>

                    <!--Password-->
                    <tr>
                        <td class="pe-5 pt-5"><input type="password" class="form-control shadow" name="password" placeholder = "Password"></td>
                        <!--errors-->
                        <tr>
							<td>
								<?php
								echo "<span class='text-danger' title='$errorPassTooltip'>$errorPassword<span>";
								?>
							</td>
						</tr>

                    <!--General Error-->
                        <tr>
							<td>
								<?php
								echo "<span class='text-danger'>$error<span>";
								?>
							</td>
							<td></td>
						</tr>
                    </tr>

                    <!--Register Button-->
                    <tr>
                        <td class="pe-5 pt-5"><input type="submit" class="form-control btn btn-primary shadow" name="register" value="Register"></td>
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
//if the user is logged in, then redirect to the home page after logging in
else {
	header("Location:home.php");
}
?>