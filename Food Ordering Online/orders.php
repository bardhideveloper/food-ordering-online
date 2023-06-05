<?php
//startimi i sesionit
session_start();
//nese perdoruesi eshte kyq ne sistem dhe eshte admin, atehere paraqitja kete pamje te web faqes
if(isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel/Orders</title>
</head>
<body>
    <div class="container-xl">

        <?php include "includes/template/nav.php";?>

        <div class="content-main">
    
        <?php include 'includes/functions/selectOrders.php'?>

        </div>

        <?php include "Includes/template/footer.php";?>
    </div>
</body>
</html>

<?php
}
//nese nuk eshte kyq, atehere ridrejtoje ne faqen baze para kyqjes
else {
	header("Location:login.php");
}
?>