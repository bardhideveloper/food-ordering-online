<?php
//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['roli'])) {
	if($_SESSION['roli'] == 1) {
//kjo pamje paraqitet per perdoruesit qe jane admin
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

    <title>Admin-Panel/Edit Products</title>
</head>
<body>
    <div class="container-xl">
    <?php include "includes/template/nav.php";?>
        <div class="content-main">
        <?php
					require "includes/functions/connect.php";
					$query1 = mysqli_query($connect, "SELECT * FROM products;");
					echo "<table class='table table-bordered'>
					<tr class=''>
					<th>id</th>
					<th>name</th>
					<th>price</th>
					<th></th>
					</tr>";

					while($row1 = mysqli_fetch_assoc($query1)) {
					$id = $row1['id'];
					$name = $row1['name'];
					$price = $row1['price'];

	
					echo "<tr class=''>
					<td class='pt-5'>$id</td>
					<td class='pt-5'>$name</td>
					<td class='pt-5'>$price</td>
					<td class='pt-5'><a href='update.php?id=$row1[id]&name=$row1[name]&price=$row1[price]' class='btn btn-danger'>Edit</a></td>
					</tr>";
					}

					echo "</table>";
					?>  
        </div>

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