<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>HusmaBreath</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/images/17.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
    rel="stylesheet" />

  <!-- Google Fonts Link For Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />


  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/mystyle.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/shop.css">
</head>

<body>
  <!-- Spinner Start -->
  <!-- <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
  <!-- Spinner End -->

  <?php require "header.php" ?>

  <!-- Header Start -->
  <div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
      <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
          <h1 class="display-4 text-light mb-5">
            Loving Generation For Human Elephant Breath
          </h1>
          <div class="d-flex align-items-center pt-4 animated slideInDown">
            <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="video/video-1.mp4"
              data-bs-target="#videoModal">
              <span></span>
            </button>
            <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel header-carousel">
          <div class="owl-carousel-item">
            <img class="d-block poster-img w-auto" src="img/carousel1.jpg" alt="" />
          </div>
          <div class="owl-carousel-item">
            <img class="w-100 d-block poster-img" src="img/carousel2.jpg" alt="" />
            <!-- <img class="img-fluid d-block poster-img" src="img/carousel2.jpg" alt="" /> -->
          </div>
          <div class="owl-carousel-item">
            <img class="w-100 d-block poster-img" src="img/carousel3.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Video Modal Start -->
  <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- 16:9 aspect ratio -->
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
              allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <!-- <p><span class="text-primary me-2">#</span>Welcome To HusmaBreath</p> -->
          <h1 class="display-5 mb-4">
            About our Organization -
            <span class="text-primary">HusmaBreath</span>
          </h1>
          <p class="mb-4">
            Breath organization has been dealing with the conservation of wild elephants and elephant-human conflict in
            Sri Lanka for a long time and we are currently actively contributing to the national policy. Currently, we
            are working with the government to bring a permanent solution to the elephant-human conflict, which has
            become a national problem, and it is a matter of happiness that a loving group of people from various fields
            in the field of elephant conservation and environment are joining hands with the organization to work
            positively for the environment.
          </p>

          <!-- <h5 class="mb-3">
            <i class="bi bi-car-front-fill text-primary me-3"></i>Free Car
            Parking
          </h5>
          <h5 class="mb-3">
            <i class="bi bi-tree text-primary me-3"></i>Natural
            Environment
          </h5>
          <h5 class="mb-3">
            <i class="bi bi-shield-check text-primary me-3"></i>Professional
            Guide & Security
          </h5>
          <h5 class="mb-3">
            <i class="fa-solid fa-paw text-primary me-3"></i>World Best
            Animals
          </h5> -->

          <!-- <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Free Car
            Parking
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Natural
            Environment
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Professional
            Guide & Security
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>World Best
            Animals
          </h5> -->
          <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border">
            <img class="img-fluid" src="img/slider-13.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <!-- <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-paw fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Animal</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Daily Vigitors</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Membership</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Save Wild Life</p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Facts End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>National Parks</p>
          <h1 class="display-5 mb-0">
            National Parks In <br />
            <span class="text-primary">Sri Lanka</span>
          </h1>
        </div>
        <div class="col-lg-6">
          <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
            <i class="fa fa-3x fa-mobile-alt text-white"></i>
            <div class="ms-4">
              <p class="text-white mb-0">Call for more info</p>
              <h2 class="text-white mb-0">077 37 93 491</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row gy-5 gx-4">
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3" src="img/np/yala.jpg" alt="Img" />
          <h5 class="mb-3 text-start w-100">Yala National Park</h5>
          <span>97,880.7 hectares<br>
            Established in - 25th Feb 1938</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/WilpattuNationalPark-April2014_%288%29.JPG/280px-WilpattuNationalPark-April2014_%288%29.JPG"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Wilpattu National Park</h5>
          <span>131,667.1 hectares<br>
            Established in - 25th Feb 1938</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/A_Hill_in_Maduru_Oya.jpg/284px-A_Hill_in_Maduru_Oya.jpg"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Maduru Oya National Park</h5>
          <span>58,849.6 hectares<br>
            Established in - 9th Nov 1983</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Somawathiya_National_Park%2C_Sri_Lanka.jpg/280px-Somawathiya_National_Park%2C_Sri_Lanka.jpg"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Somawathiya National Park</h5>
          <span>39,645.5 hectares<br>
            Established in - 2nd Sep 1986</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/WasgamuwaNationalPark-September2014_%281%29.JPG/284px-WasgamuwaNationalPark-September2014_%281%29.JPG"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Wasgamuwa National Park</h5>
          <span>37,062.9 hectares<br>
            Established in - 07th Aug 1984</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Parc_national_de_Uda_Walawa_Sri-Lanka_%284%29.jpg/220px-Parc_national_de_Uda_Walawa_Sri-Lanka_%284%29.jpg"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Udawalawe National Park</h5>
          <span>30,821.0 hectares<br>
            Established in - 30th Jun 1972</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Gal_Oya_National_Park_%28Senanayake_Samudhraya%29.JPG/284px-Gal_Oya_National_Park_%28Senanayake_Samudhraya%29.JPG"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Gal Oya National Park</h5>
          <span>25,900.0 hectares<br>
            Established in - 12th Feb 1954</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp d-flex flex-column" data-wow-delay="0.1s">
          <img class="img-fluid np-img mb-3"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Landscape_with_elephant_at_Lunugamvehera_National_Park.JPG/284px-Landscape_with_elephant_at_Lunugamvehera_National_Park.JPG"
            alt="Img" />
          <h5 class="mb-3 text-start w-100">Lunugamvehera National Park</h5>
          <span>23,498.8 hectares<br>
            Established in - 8th Dec 1995</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Slider Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container container-slider ">
      <div class="slider-wrapper">
        <button class="slide-button material-symbols-rounded" id="prev-slide">chevron_left</button>
        <div class="imge-list">
          <img src="img/slider-1.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-2.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-3.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-4.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-5.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-6.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-7.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-8.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-9.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-10.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-11.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-12.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-13.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-14.jpg" alt="img-1" class="image-item" />
          <img src="img/slider-15.jpg" alt="img-1" class="image-item" />
        </div>
        <button class="slide-button material-symbols-rounded" id="next-slide">chevron_right</button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider End -->

  <!-- Article Start -->
  <?php include 'articles.php'; ?>
  <!-- Article End -->

  <!-- text Start -->
  <div class="container-xxl bg-primary my-5 py-5 wow fadeInUp text-facts" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="text-h1"><i class="bi bi-quote icon-text"></i>Elephants are majestic creatures known for their
        intelligence, empathy, and remarkable memory, making them one of the most fascinating species on Earth.</h1>
    </div>
  </div>
  <!-- Text End -->

  <!-- Membership Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <h1 class="display-5 mb-0">
            You Can Buy Proud Of
            <span class="text-primary">HusmaBreath</span>
          </h1>
        </div>
        <div class="col-lg-6 text-lg-end">
          <a class="btn btn-primary py-3 px-5" href="./product.php">Buy Now</a>
        </div>
      </div>

      <!-- <div class="g-4 gallery">

        <div class="col-lg-3 col-md-6 wow fadeInUp item-div " data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="product-img" src="img/product-1.jpg" alt="" />
            <div class="d-flex flex-column w-auto">
              <h3 class="text-1">T-shirt</h3>
              <p class="product-p">Lorem ipsum dolor, sit amet consectetur adipisicing eli.</p>
              <ul class="product-ul">
                <li class="product-li"><i class="bi bi-star-fill product-i checked"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
              </ul>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp item-div " data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="product-img" src="img/product-1.jpg" alt="" />
            <div class="d-flex flex-column w-100">
              <h3 class="text-1">T-shirt</h3>
              <p class="product-p">Lorem ipsum dolor, sit amet consectetur adipisicing eli.</p>
              <ul class="product-ul">
                <li class="product-li"><i class="bi bi-star-fill product-i checked"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
              </ul>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp item-div" data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="product-img" src="img/product-1.jpg" alt="" />
            <div class="d-flex flex-column w-100">
              <h3 class="text-1">T-shirt</h3>
              <p class="product-p">Lorem ipsum dolor, sit amet consectetur adipisicing eli.</p>
              <ul class="product-ul">
                <li class="product-li"><i class="bi bi-star-fill product-i checked"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
                <li class="product-li"><i class="bi bi-star-fill product-i"></i></li>
              </ul>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </div>

      </div> -->

    </div>
  </div>
  <section class="section-products">
    <div class="container">
      <div class="row">
        <!-- Single Product -->

        <?php
        $product = Database::search("SELECT * FROM `image` INNER JOIN `product` ON `image`.`product_id`=`product`.`id` WHERE `status`='1' ORDER BY `date`;");
        // $product = Database::search("SELECT * FROM `product` WHERE `status`='1' ORDER BY `date` LIMIT 3");
        $productr = $product->num_rows;

        for ($x = 0; $x < $productr; $x++) {
          $product_data = $product->fetch_assoc();
          ?>

          <div class="col-md-6 col-lg-4 col-xl-3 ">
            <div id="product-1" class="single-product box-shadow-all border border-1 rounded rounded-1 p-2">
              <img style="width: 100%;height: 100%;" src="<?php echo ($product_data["code"]) ?>" alt="" srcset="">

              <div class="part-2">
                <h3 class="product-title">
                  <?php echo ($product_data["name"]) ?>
                </h3>
                <h4 class="product-price">
                  Rs.
                  <?php echo ($product_data["price"]) ?>
                </h4>
              </div>
              <a href="https://api.whatsapp.com/send/?phone=%2B940773793491&text&type=phone_number&app_absent=0"
                                class="btn btn-success pb-0">BUY NOW</a>
            </div>
          </div>

          <?php
        }
        ?>

      </div>
    </div>
  </section>
  <!-- Membership End -->

  <!-- Testimonial Start -->
  <!-- <div class="container-xxl py-1 py-md-5 d-none d-md-flex ">
    <div class="container">
      <h1 class="text-center wow fadeInUp" data-wow-delay="0.1s">
        Our Clients Say!
      </h1>

      <div class="reviw-container wow fadeInUp " data-wow-delay="0.1s">

        <div class="slide-container active">
          <div class="review-slide">
            <i class="bi bi-quote review-icon"></i>
            <div class="user-review">
              <img src="img/testimonial-1.jpg " class="testimonial-img" alt="" />
              <div class="user-info">
                <h3 class="review-text"> John deo</h3>
                <div class="starts-icon">
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                </div>
              </div>
            </div>
            <p class="review-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum recusandae
              dignissimos magnam consequuntur ex provident, commodi inventore ut ratione architecto necessitatibus
              mollitia minima molestiae! Itaque, veniam? Quibusdam, nisi tempora!</p>
          </div>
        </div>

        <div class="slide-container">
          <div class="review-slide">
            <i class="bi bi-quote review-icon"></i>
            <div class="user-review">
              <img src="img/testimonial-2.jpg " class="testimonial-img" alt="" />
              <div class="user-info">
                <h3 class="review-text"> John deo</h3>
                <div class="starts-icon">
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                </div>
              </div>
            </div>
            <p class="review-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum recusandae
              dignissimos magnam consequuntur ex provident, commodi inventore ut ratione architecto necessitatibus
              mollitia minima molestiae! Itaque, veniam? Quibusdam, nisi tempora!</p>
          </div>
        </div>

        <div class="slide-container">
          <div class="review-slide">
            <i class="bi bi-quote review-icon"></i>
            <div class="user-review">
              <img src="img/testimonial-3.jpg " class="testimonial-img" alt="" />
              <div class="user-info">
                <h3 class="review-text"> John deo</h3>
                <div class="starts-icon">
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                  <i class="bi bi-star review-star"></i>
                </div>
              </div>
            </div>
            <p class="review-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum recusandae
              dignissimos magnam consequuntur ex provident, commodi inventore ut ratione architecto necessitatibus
              mollitia minima molestiae! Itaque, veniam? Quibusdam, nisi tempora!</p>
          </div>
        </div>

        <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
        <div id="next" class="fas fa-chevron-right" onclick="next()"></div>

      </div>
    </div>
  </div> -->
  <!-- Testimonial End -->

  <?php require "footer.php" ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script src="js/myscript.js" defer></script>
</body>

</html>