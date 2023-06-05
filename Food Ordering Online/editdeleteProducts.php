
<?php
//start the session
session_start();

//if the user is not logged in, then display this view of this web page
if(isset($_SESSION['user'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel/Edit and Delete Products</title>
</head>
<body>
    <div class="container-xl">
        <?php include "includes/template/nav.php";?>
        <div class="content-main">
            <?php
				include "includes/functions/selectDeleteProducts.php";
			?>
        </div>

        <?php include "includes/template/footer.php";?>
    </div>
</body>
</html>

<?php
}
//if not logged in, then redirect to the base page before logging
else {
	header("Location:login.php");
}
?>