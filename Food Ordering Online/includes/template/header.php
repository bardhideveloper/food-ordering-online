<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>

  <title>Header</title>
</head>
<body>
    <div class="container-xl">
      <div class="text-center pt-5 pb-5 shadow p-3 mb-5 ms-2 me-2">

        <!--banner-->
        <h1>Food made with love....&#x1F496;</h1>
        <p>Order your favorite food online!</p>

        <!--button order now-->
        <form method="get" action="ordernow.php">
          <button type="submit" class="btn btn-success btn-lg shadow ">Order Now</button>
        </form>
      </div>

        <!--four steps in images-->
        <div class="row pt-5">
          <div class="col-md-3">
            <div class="thumbnail shadow p-3 mb-5">
              <a href="#">
              <img src="images/step-1.jpg" alt="Lights" style="width:40%">
              <div class="caption text-center">
              <p>Select your prefered food</p>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="thumbnail shadow p-3 mb-5">
              <a href="#">
              <img src="images/step-2.jpg" alt="Lights" style="width:40%">
              <div class="caption text-center">
              <p>Free and fast delivery</p>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="thumbnail shadow p-3 mb-5">
              <a href="#">
              <img src="images/step-3.jpg" alt="Lights" style="width:40%">
              <div class="caption text-center">
              <p>Simple payment methods</p>
              </div>
              </a>
            </div>
          </div>
 
          <div class="col-md-3">
            <div class="thumbnail shadow p-3 mb-5">
              <a href="#">
              <img src="images/step-4.jpg" alt="Lights" style="width:40%">
              <div class="caption text-center">
              <p>And finally, enjoy your food</p>
              </div>
              </a>
            </div>
          </div>

        </div>
    </div>

</body>
</html>
