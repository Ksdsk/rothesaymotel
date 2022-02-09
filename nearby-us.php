<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rothesay Motel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/nearby-us.css">
</head>
<?php
    include("_includes/header.php");
?>
<body>
  <div class="container">
      
    <div class="location py-5">
      <div class="row py-5 ">
        <h2 class="col-lg-6">Restaurants</h2>
        <div class="col-lg-6">
            <p>
                Many delightful restaurants can be found in the Hampton Road.
                <br>
                See the list under the interactive map for more details.
            </p>
        </div>
      </div>
      <div class="row py-5">
        <h2 class="col-lg-6">Laundry</h2>
        <div class="col-lg-6">
            <p>
                Coin laundry is available across the streein in the Fairvale Mall
            </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="" style="min-height: 500px">
            <iframe width="100%" height="500"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA8vAWIh2O9750G1Yehy6mN_d2PQEh8kjg&&q=Rothesay+Motel,Rothesay+Canada" allowfullscreen>
            </iframe>
    </div>
  </div>



  <?php
    include("_includes/footer.php");
  ?>
    <!-- Import AoS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>