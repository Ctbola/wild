<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HusmaBreath - Products</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'> -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'> -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/mystyle.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/shop.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php require "header.php" ?>

    <section class="section-products">
        <div class="container">
            <div class="row">


                <?php

                // $product = Database::search("SELECT * FROM `image` INNER JOIN `product`.`product`=``.`` WHERE `status`='1' ORDER BY `date`");
                $product = Database::search("SELECT * FROM `image` INNER JOIN `product` ON `image`.`product_id`=`product`.`id` WHERE `status`='1' ORDER BY `date`;");
                $productr = $product->num_rows;

                for ($x = 0; $x < $productr; $x++) {
                    $product_data = $product->fetch_assoc();

                    ?>

                    <div class="col-md-6 col-lg-4 col-xl-3 ">
                        <div id="" class="single-product box-shadow-all border border-1 rounded rounded-1 p-2">
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
                            <!-- <button type="button" class="btn btn-success pb-0">BUY NOW</button> -->
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