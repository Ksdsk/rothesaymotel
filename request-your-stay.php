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
    <link rel="stylesheet" href="css/request-your-stay.css">
</head>
<?php
    include("_includes/header.php");
?>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 pb-5">
                <h2 class="pb-5">Requesting your stay</h2>
                <p>Please contact us by filling out the boxes below. We will contact you via email to go over your reservation as quick as possible.</p>
                <br>
                <p>Location: 80 Hampton Road, Rothesay, New Brunswick, E2E 2P5</p>
                <p>Phone: +1 (506) 721-7970</p>
                <br>
                <p>Make sure you have read our <a href="policy">polices</a> before reserving.</p>
                <br>
                <p>Our check-in time is 3:00PM - 8:00PM Local Time in Rothesay. Our check-out time is 11:00 AM Local Time in Rothesay.</p>
                <br>
                <em>Note: <strong>This does not guarantee your reservation.</strong></em>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
                <?php
                  if(isset($_GET['success'])) {
                    echo '
                      <div class="bg-success text-white p-4 rounded mb-3">
                        <h2 class="text-center">We have received your message.</h2>
                        <p class="text-center">Please wait for our response in your email!</p>
                      </div>
                    ';
                  } elseif (isset($_GET['failure'])) {
                    echo '
                      <div class="bg-danger text-white p-4 rounded mb-3">
                        <h2 class="text-center">There was an error sending your message.</h2>
                        <p class="text-center">Please try again or manually email us instead at rothesaymotel@gmail.com</p>
                      </div>
                    ';
                  }
                ?>
                  <form action="_includes/send_email.php" method="post">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="fname" class="form-label required">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="lname" class="form-label required">Last Name</label>
                            <input type="lname" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label required">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label required">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="arr" class="form-label required">Check-In Date</label>
                            <input type="date" class="form-control" name="arr" id="arr" required>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="dep" class="form-label required">Check-Out Date</label>
                            <input type="date" class="form-control" name="dep" id="dep" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="guests" class="form-label">Number of Guests</label>
                            <select class="form-select" name="guests" aria-label="Default select example">
                                <option selected>-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                                <option value="3">6+</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="room-type" class="form-label">Preferred Room</label>
                            <select class="form-select" name="room-type" aria-label="Default select example">
                                <option selected>-</option>
                                <option value="Historic Cabin">Historic Cabin</option>
                                <option value="Motel Unit">Motel Unit</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Cottage">Cottage</option>
                                <option value="Family House">Family House</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inquiry" class="form-label">Inquiry</label>
                        <textarea class="form-control" name="inquiry" id="inquiry" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
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