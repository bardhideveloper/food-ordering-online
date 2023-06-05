<?php
//start the session
session_start();
//if the user is logged into the system and is an admin, then this view of the web page will be displayed
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
		if($_SESSION['role'] == 1) {
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

    <title>Admin Home</title>
</head>
<body>
    <div class="container-xl">

        <?php include "includes/template/nav.php";?>

        <div class="content-main text-center">
            <h1 class="pt-5">Admin Panel</h1>
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="img-fluid d-block mx-auto pt-5" width="150">

            <div class="row pt-5">
                <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5">
          			    <h3>Register Products</h3>
          			    <div class="caption text-center">
                        <a href="registerProducts.php" class="btn btn-success">GO</a>
					    </div>
				    </div>
			    </div>

			    <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5">
          			    <h3>Edit/Delete Products</h3>
          			    <div class="caption text-center">
                        <a href="editdeleteProducts.php" class="btn btn-success">GO</a>
					    </div>
				    </div>
			    </div>

			    <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5">
          			    <h3>Orders</h3>
          			    <div class="caption text-center">
                        <a href="orders.php" class="btn btn-success">GO</a>
					    </div>
				    </div>
			    </div>

                <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5">
          			    <h3>Users</h3>
          			    <div class="caption text-center">
                        <a href="users.php" class="btn btn-success">GO</a>
					    </div>
				    </div>

			</div>
        </div>
        
        <?php include "includes/template/footer.php";?>
    </div>
</body>
</html>

<?php
}}
//if not logged in , then redirect to the base page before loggin
else {
	header("Location: login.php");
}
?>