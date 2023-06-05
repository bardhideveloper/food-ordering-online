<?php
//start the session
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 1) {
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

    <title>Admin-Panel/Users</title>
</head>
<body>
    <div class="container-xl">

        <?php include "includes/template/nav.php";?>

        <div class="content-main">
            
            <?php include 'includes/functions/selectUsers.php'?>

        </div>

        <?php include "Includes/template/footer.php";?>
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