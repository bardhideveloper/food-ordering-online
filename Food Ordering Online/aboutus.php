<?php
//start the session
session_start();
//this view is displayed for all users (even when they are logged in and when they are not logged in yet)
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
    
    <title>Abous Us</title>
</head>
<body>
    <div class="container-xl">
        <?php include "includes/template/nav.php";?>
        <?php include "includes/template/header.php";?>

        <div class="content-main text-center">

			<!--banner for aboutus-->
			<div class="banner shadow p-3 mb-5 ms-2 me-2" >
            <h1>About US</h1>
            <h3>Some text about who we are and what we do.</h3>
            <h3>Resize the browser window to see that this page is responsive by the way.</h3>
			</div>
			<!--four cards to visible four persons or characteristics-->
            <div class="row">
                <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5 ms-2 me-2">
          			    <h3>Person 1</h3>
          			    <div class="caption text-center">
          			    <p>Facebook: foodks</p>
					    <p>Instagram: foodks</p>
					    <p>Twitter: foodks</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
					    </div>
				    </div>
			    </div>

			    <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5 ms-2 me-2">
          			    <h3>Person 2</h3>
          			    <div class="caption text-center">
          			    <p>Facebook: foodks</p>
					    <p>Instagram: foodks</p>
					    <p>Twitter: foodks</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
					    </div>
				    </div>
			    </div>

			    <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5 ms-2 me-2">
          			    <h3>Person 3</h3>
          			    <div class="caption text-center">
          			    <p>Facebook: foodks</p>
					    <p>Instagram: foodks</p>
					    <p>Twitter: foodks</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
					    </div>
				    </div>
			    </div>

                <div class="col-md-3">
        		    <div class="thumbnail shadow p-3 mb-5 ms-2 me-2">
          			    <h3>Person 4</h3>
          			    <div class="caption text-center">
          			    <p>Facebook: foodks</p>
					    <p>Instagram: foodks</p>
					    <p>Twitter: foodks</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
					    </div>
				    </div>
			    </div>

		    </div>
           
        </div>

        <?php include "includes/template/aside.php";?>
        <?php include "includes/template/footer.php";?>
    </div>
</body>
</html>