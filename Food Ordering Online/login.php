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

    <title>Login</title>
</head>
<body>
     <div class="container-xl">
        <?php include "includes/template/nav.php";?>
        <div class="content-main shadow ms-2 me-2 p-3 mb-5 pb-5">

            <!--banner of login-->
            <h3 class="text-center pt-5">Login</h3>

            <!--connect  with the loginvalidate script-->
                <?php
					$username = "";
					$error = $errorUsername = $errorPassword = "";
					if($_SERVER['REQUEST_METHOD'] == "POST") {
						include "includes/validate/loginValidate.php";
					}
				?>
                
            <!--Table and form-->
            <table class="ms-auto me-auto">
                <form action="" method="POST">

                    <!--Username-->
                    <tr>
                        <td class="pt-5"><input type="text" class="form-control shadow " name="usernameLogin" placeholder = "Username" value = "<?php if($errorUsername == "") echo $username;?>"></td>
                        <!--errors-->
					    <tr>
						    <td>
							    <?php
								echo "<span class=''>$errorUsername<span>";
							    ?>
						    </td>
					    </tr>
                    </tr>
                    
                    <!--Password-->
                    <tr>
                        <td class="pt-5"><input type="password" class="form-control shadow " name="passLogin" placeholder = "Password"></td>
                        <!--errors-->
					    <tr>
						    <td>
							    <?php
								echo "<span class='error'>$errorPassword<span>";
							    ?>
						    </td>
					    </tr>

					    <!--General Error-->
					    <tr>
						    <td>
							    <?php
							    echo "<span class=''>$error<span>";
							    ?>
						    </td>
						    <td></td>
					    </tr>
                    </tr>

                    <!--Login Button-->
                    <tr>
                        <td class="pt-5"><input type="submit" class="form-control btn btn-primary shadow " value="Login"></td>
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
//if the user is logged in
else{
	//then redirect to base page after login
	header("Location: home.php");
}
?>