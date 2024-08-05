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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php require "header.php" ?>

    <!-- Article Start -->
    <div class="container-fluid p-4">

        <?php

        $aid = $_GET["id"];

        $article = Database::search("SELECT * FROM `articles` WHERE `id`='" . $aid . "'");
        $articler = $article->num_rows;

        for ($x = 0; $x < $articler; $x++) {
            $article_data = $article->fetch_assoc();
            ?>

            <div class="d-flex flex-column justify-content-center align-items-center py-lg-2 px-4 px-lg-5">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h3 class="w-100">
                            <?php echo ($article_data["title"]) ?>
                        </h3>
                        <p class="w-100 h-100 text-end">
                            <?php echo ($article_data["date"]) ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center ">
                <div class="col-12 col-md-10 col-lg-8">

                    <div class="row justify-content-center align-items-center article-img-400 mb-4">
                        <img class="article-img-400" src="<?php echo ($article_data["img"]) ?>" alt="" srcset="">
                    </div>

                    <p class="mb3">
                        <?php echo ($article_data["para1"]) ?>
                    </p>
                    <div class="mb3">
                        <?php echo ($article_data["para"]) ?>
                    </div>
                </div>
            </div>


            <?php
        }
        ?>
    </div>
    <!-- Article End -->


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