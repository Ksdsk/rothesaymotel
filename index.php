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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
      include("_includes/mainheader.php");
    ?>
    <!-- Three sets of quick image links -->
    <div class="container my-4">
      <div class="row text-center pt-4">
        <div data-aos="zoom-in" data-aos-duration="300" class="col-lg-4" onclick="window.location.href='gallery'">
          <div id="gallery" class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white">
            <h2 class="">Gallery</h2>
          </div>
        </div>
        <div data-aos="zoom-in" data-aos-duration="600" class="col-lg-4" onclick="window.location.href='attractions'">
          <div id="attractions" class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white">
            <h2 class="">Attractions</h2>
          </div>
        </div>
        <div data-aos="zoom-in" data-aos-duration="900" class="col-lg-4" onclick="window.location.href='our-rooms'">
          <div id="rooms" class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white">
            <h2 class="">Rooms</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- History text -->
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-6">
          <div data-aos="fade-right" data-aos-duration="3000">
            <h2>Our Little (Big) History</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div data-aos="fade-zoom-in" data-aos-duration="3000">
            <p class="lh-lg"><span class="font-italic">Rothesay Motel</span> formerly Ye Comfy Cabins, began in 1920 with the construction of the cabins by the Breen family who ran the business until 1971. At the time, 
              the Hampton Highway was the main road to Moncton. It was taken over by the Gordon family, who relocated from Saint John, until 1996 when Bob and Erin Black became 
              the owners of Ye Comfy Cabins until 2004. The McGuires ran the cabins for six years and then demolished all but three to build the nine unit motel. The property 
              reserved two cabins and the two-unit old barn which serve as a reminder of the business's rich history.  Current owners, Kevin (K.K.) Kang and Sunmi Jung took the 
              motel and revolutionized the idea of a motel. The rooms were reformed to give a taste of modernness and comfort while preserving its past exterior.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Guest Reviews -->
    <div class="container py-4">
      <h1 class="text-center pb-4">See what our guests are saying!</h1>
      <div class="row">
        <div class="col-lg-4 pb-4">
          <img class="mx-auto d-block img-fluid p-4" src="img/expedia.png" alt="Expedia">
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Lovely Location</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Verified traveller</h6>
              <p class="card-text">Room was neat and very clean. Nice location and quiet. Located back from the main road, trees on either side. Friendly reception Would definitely stay here again.</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">5/5 Excellent</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Verified traveller</h6>
              <p class="card-text">Stayed for quick access to airport was very pleased with the accommodation.</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">A Week in Rothesay</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Scott</h6>
              <p class="card-text">The room was very nice. It was very clean, quiet, comfortable, and spacious. The location was perfect right on a main thorough fare with shopping not far down the street. The parking was convenient and safe.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 pb-4">
          <img class="mx-auto d-block img-fluid p-4" src="img/bookingdotcom.png" alt="Expedia">
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Exceptional</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Kendrick</h6>
              <p class="card-text">Courteous, helpful staff, clean, comfortable rooms with great amenities, and situated close to shops and restaurants. We very much enjoyed our stay.</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Perfect spot for the night</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Gillian</h6>
              <p class="card-text">The manager could not have been more kind and helpful. The room was large, bed comfortable, bathroom clean and well appointed. What more culd be asked of a motel for the night?</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Cozy cottage</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Darren</h6>
              <p class="card-text">Very friendly staff, room was spotless. The cottage had a lot of charm, would stay there again.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 pb-4 mb-3">
          <img class="mx-auto d-block img-fluid p-4" src="img/google.png" alt="Expedia">
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Had an amazing wedding!</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Bethany W.</h6>
              <p class="card-text">We recently stayed at the Rothesay Motel while in town for a wedding, and we thoroughly enjoyed our stay. The small cabin was quaint with its 100 year old charm, exceptionally clean and the bed was very comfortable. Kevin provided top notch hospitality and was pleasant to deal with throughout our stay. We hope to be back again some day!</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Bravo!</h5>
              <h6 class="card-subtitle mb-2 text-muted">Robert B.</h6>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <p class="card-text">Nice and compact all new look and clean. Bravo!</p>
            </div>
          </div>
          <div class="card mb-4" data-aos="flip-left" data-aos-duration="1000">
            <div class="card-body">
              <h5 class="card-title">Very comfortable every time</h5>
              <div class="d-flex justify-content-start pb-2">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
                <img width="16px" height="16px" src="img/star.svg" alt="">
              </div>
              <h6 class="card-subtitle mb-2 text-muted">Isaac W.</h6>
              <p class="card-text">Very comfortable and the owners are kind and enjoyable. I stay here everytime I'm in town.</p>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="mx-auto d-block btn btn-outline-primary">Request Your Stay Now</button>
    </div>
    <!-- Map and Small Carousel of Images -->
    <div class="container py-4">
      <h1 class="text-center pb-4">Ready to learn more?</h1>
      <div class="row">
        <div class="col-lg-6 py-4">
          <p class="text-center">Our address: 80 Hampton Road, Rothesay, NB E2E 2P5</p>
          <div class="" style="min-height: 500px">
            <iframe width="100%" height="500"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA8vAWIh2O9750G1Yehy6mN_d2PQEh8kjg&&q=Rothesay+Motel,Rothesay+Canada" allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="col-lg-6 py-4">
          <p class="text-center">See our <a href="gallery">gallery</a>/<a href="our-rooms">our rooms</a></p>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/outside/KakaoTalk_20210823_215348910_02.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_03.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_04.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_05.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_06.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_07.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_08.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_09.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_10.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_11.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_12.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>              
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_13.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_14.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/outside/KakaoTalk_20210823_215348910_15.jpg" class="w-100 img-fluid shadow-1-strong rounded mb-4" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
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
</html>