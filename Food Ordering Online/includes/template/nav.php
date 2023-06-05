<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
	
    <title>Nav</title>

</head>
<body>

   <div class="container-xl">   
        <div class="navbar navbar-expand-lg fixed-top justify-content-center shadow p-3 mb-5 ms-2 me-2">
           <div class="container-fluid">
           <?php

	            //if the user is not logged in to the system
	            if(!isset($_SESSION['user'])) {	
		            echo'<a href="index.php" class="btn navbar-brand border-bottom">Home</a>';
		            echo'<a href="aboutus.php" class="btn navbar-brand border-bottom">About Us</a>';
		            echo '<a href="gallery.php" class="btn navbar-brand border-bottom">Gallery</a>';
		            echo '<a href="register.php" class="btn navbar-brand border-bottom">Register</a>';
		            echo '<a href="login.php" class="btn navbar-brand border-bottom">Login</a>';

					//search button
					echo'<form class="d-flex" role="search">';
					echo'<input class="form-control me-2 shadow-sm" type="search" placeholder="Search" aria-label="Search">';
					echo'<button class="btn shadow-sm" type="submit">Search</button>';
			   		echo'</form>';

	            }
				
	            //if the user is logged in to the system
	            else {
		            if(isset($_SESSION['role'])) {
			        //admin
			        if($_SESSION['role'] == 1) {
				        echo '<a href="homeadmin.php" class="btn navbar-brand border-bottom">Admin Panel</a>';
				        //echo '<a href="registerproducts.php" class="btn navbar-brand border-bottom" >Register Products</a>';
				        //echo '<a href="editdeleteProducts.php" class="btn navbar-brand border-bottom">Edit/Delete Products</a>';
				        //echo '<a href="orders.php" class="btn navbar-brand border-bottom">Orders</a>';
				        //echo '<a href="users.php" class="btn navbar-brand border-bottom">Users</a>';
				        echo '<a href ="includes/validate/logout.php" class=" btn navbar-brand border-bottom">Logout</a>';
						echo '</nav>';
			        }
			
			    //registred user
			        else if($_SESSION['role'] == 2) {
				        echo'<a href="home.php" class="btn navbar-brand border-bottom">Home</a>';
				        echo'<a href="aboutus.php" class="btn navbar-brand border-bottom">About Us</a>';
				        echo'<a href="gallery.php" class="btn navbar-brand border-bottom">Gallery</a>';
				        echo'<a href="ordernow.php" class="btn navbar-brand border-bottom">Order</a>';
				        echo'<a href="myorders.php" class="btn navbar-brand border-bottom">My Orders</a>';
				        echo'<a href ="includes/validate/logout.php" class="btn navbar-brand border-bottom">Logout</a>';

						//search button
						echo'<form class="d-flex" role="search">';
						echo'<input class="form-control me-2 shadow-sm" type="search" placeholder="Search" aria-label="Search">';
						echo'<button class="btn shadow-sm" type="submit">Search</button>';
			   			echo'</form>';
			        }
		        }

	            }
				


	        ?>  
	
           </div>
        </div>
    </div>
</body>
</html>
