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
    <link rel="stylesheet" href="css/our-rooms.css">
</head>
<?php
    include("_includes/header.php");
?>
<body>
  <div class="container">
      
    <div class="location py-5">
      <div class="row py-5 ">
        <h2 class="col-lg-6">Historic Cabin</h2>
        <div class="col-lg-6">
            <p>
                The historic cabins feature an all-new renovated interior, while keeping the historic feel outside. 
                <br><br>
                With a double-bed installed in the rooms, the historic cabin is great for short stays in the heart of Rothesay.
                <ul>
                    <li>Room 1-2: One double bed.</li>
                </ul>
                <br>
                <strong>1-2 guests</strong>
                <br>
                <strong>79CAD - 89CAD, only available during summer season.</strong>
                <br><br>
                <ul>
                    <li>Fully equipped for your daily needs</li>
                    <li>High-definition TV and fast Wi-Fi access</li>
                    <li>Comfortable Double bed</li>
                </ul>
                <hr>
            </p>

            <!-- Historic Cabin Modal -->
            <div class="modal fade" id="historicCabinModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-lg-down modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Historic Cabin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="controlHistoricCabin" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active fullview">
                                        <img src="img/cabin/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cabin/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#controlHistoricCabin" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#controlHistoricCabin" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="historicCabin" class="carousel slide" data-bs-ride="carousel" data-bs-toggle="modal" data-bs-target="#historicCabinModal">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-preview" >
                        <img src="img/cabin/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cabin/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                </div>
            </div>
            <em>Click on the images to see them bigger!</em>
        </div>
    </div>
    <div class="row py-5 ">
        <h2 class="col-lg-6">Motel Units</h2>
        <div class="col-lg-6">
            <p>
                The classic motel units are well furnished and perfect for any visitors expecting a great quality room at a great price.
                <br><br>
                Comes with an option of two double beds or one king bed.
                <ul>
                    <li>Room 3-4: One King bed.</li>
                    <li>Room 5-7: Two Double beds.</li>
                </ul>
                <br>
                <strong>2-4 guests</strong>
                <br>
                <strong>89CAD - 128CAD, prices alter depending on season.</strong>
                <br><br>
                <ul>
                    <li>Clean, hotel-inspired rooms.</li>
                    <li>Bigger and complete bathroom.</li>
                    <li>Includes a small fridge and a microwave.</li>
                </ul>
                <hr>
            </p>
            <!-- Unit Modal -->
            <div class="modal fade" id="unitModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-lg-down modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Motel Units</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="controlUnit" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active fullview">
                                        <img src="img/king/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/king/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/twodouble/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#controlUnit" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#controlUnit" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="unit" class="carousel slide" data-bs-ride="carousel" data-bs-toggle="modal" data-bs-target="#unitModal">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-preview" >
                        <img src="img/king/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/king/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview" >
                        <img src="img/twodouble/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/twodouble/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                </div>
            </div>
            <em>Click on the images to see them bigger!</em>
        </div>
    </div>
    <div class="row py-5 ">
        <h2 class="col-lg-6">Apartments</h2>
            <div class="col-lg-6">
                <p>
                    Our bigger rooms for families or teams. Every apartment-suite includes two bedrooms and a kitchenette so you truly feet comfortable and at-home during your stay.
                    <br><br>
                    Comes with a various bed options:
                    <ul>
                        <li>Room 8: Double bed in each room.</li>
                        <li>Room 9: One Queen bed in a room, and two Single beds in the other room.</li>
                        <li>Room 10: One Queen bed in the room, and one Double bed in the other room.</li>
                        <li>Room 11: Queen bed in each room.</li>
                    </ul>
                    <br>
                    <strong>2-4 guests</strong>
                    <br>
                    <strong>109CAD - 179CAD, prices alter depending on season.</strong>
                    <br><br>
                    <ul>
                        <li>Includes a kitchenette with a stovetop or a full-sized oven.</li>
                        <li>Featuring ouble bedrooms with comfortable beds.</li>
                        <li>Features a small dedicated living area.</li>
                    </ul>
                    <hr>
                </p>

                <!-- Apartment Modal -->
                <div class="modal fade" id="apartmentModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-lg-down modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Apartments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="controlApartment" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active fullview" >
                                            <img src="img/apartment/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                        <div class="carousel-item fullview">
                                            <img src="img/apartment/21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#controlApartment" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#controlApartment" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="apartment" class="carousel slide" data-bs-ride="carousel" data-bs-toggle="modal" data-bs-target="#apartmentModal">
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-preview" >
                            <img src="img/apartment/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                        <div class="carousel-item carousel-preview">
                            <img src="img/apartment/21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                        </div>
                    </div>
                </div>
                <em>Click on the images to see them bigger!</em>
            </div>
        </div>
    </div>
    <div class="row py-5 ">
        <h2 class="col-lg-6">Cottage</h2>
        <div class="col-lg-6">
            <p>
                Our Cottage is our newest renovation and addition to our list. A two-story unit with features a full modern kitchen, furnitures, and more.
                <br><br>
                Comes with an option of two double beds or one king bed.
                <ul>
                    <li>Room 3-4: One King bed.</li>
                    <li>Room 5-7: Two Double beds.</li>
                </ul>
                <br>
                <strong> 2-4 guests </strong>
                <br>
                <strong>155CAD - 199CAD, only available during summer season. </strong>
                <br><br>
                <ul>
                    <li>Clean, hotel-inspired rooms.</li>
                    <li>Bigger and complete bathroom.</li>
                    <li>Includes a small fridge and a microwave.</li>
                </ul>
                <hr>
            </p>
            <!-- Cottage Modal -->
            <div class="modal fade" id="cottageModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-lg-down modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Cottage</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="controlCottage" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active fullview">
                                        <img src="img/cottage/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/cottage/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#controlCottage" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#controlCottage" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cottage" class="carousel slide" data-bs-ride="carousel" data-bs-toggle="modal" data-bs-target="#cottageModal">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-preview" >
                        <img src="img/cottage/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/cottage/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                </div>
            </div>
            <em>Click on the images to see them bigger!</em>
        </div>
    </div>
    <div class="row py-5 ">
        <h2 class="col-lg-6">Deluxe Family House</h2>
        <div class="col-lg-6">
            <p>
                Fully furnished for your long-term stays, the 2000+ sqft. two-story deluxe family house offers you and the guests the most comfortable experience.
                <br>
                <ul>
                    <li>Family House: One Queen bed installed in each of the three rooms, plus a Single bed in the den.</li>
                </ul>
                <br>
                <strong>4-6 guests</strong>
                <br>
                <strong>279CAD / night (with a minimum stay of three nights)</strong>
                <br><br>
                <ul>
                    <li>Clean, hotel-inspired rooms.</li>
                    <li>Bigger and complete bathroom.</li>
                    <li>Includes a small fridge and a microwave.</li>
                </ul>
                <hr>
            </p>

            <!-- House Modal -->
            <div class="modal fade" id="houseModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-lg-down modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Family House</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="controlHouse" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active fullview" >
                                        <img src="img/singlefamilyhouse/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/22.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/23.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/24.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/25.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/26.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/27.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/28.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/29.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                    <div class="carousel-item fullview">
                                        <img src="img/singlefamilyhouse/30.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#controlHouse" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#controlHouse" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="singlefamilyhouse" class="carousel slide" data-bs-ride="carousel" data-bs-toggle="modal" data-bs-target="#houseModal">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-preview" >
                        <img src="img/singlefamilyhouse/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" >
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/22.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/23.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/24.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/25.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/26.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/27.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/28.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/29.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                    <div class="carousel-item carousel-preview">
                        <img src="img/singlefamilyhouse/30.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="">
                    </div>
                </div>
            </div>
            <em>Click on the images to see them bigger!</em>
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