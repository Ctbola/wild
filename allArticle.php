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

    <?php require "header.php" ?>

    <!-- Article Start -->
    <div class="container-xxl wow fadeInUp blog-section" data-wow-delay="0.1s">
        <div class="container py-2 py-md-5 setion-content blog">
            <h1 class="text-center blog-h2 wow fadeInUp" data-wow-delay="0.1s ">Articles</h1>
            <div class="article-cards">

                <?php

                $article = Database::search("SELECT * FROM `articles` WHERE `status`='1' ORDER BY `date`");
                $articler = $article->num_rows;

                for ($x = 0; $x < $articler; $x++) {
                    $article_data = $article->fetch_assoc();
                    $article_id = $article_data["id"];
                    ?>

                    <div class="card-article">
                        <div class="img-section d-flex justify-content-center">
                            <img src="<?php echo ($article_data["img"]) ?>" class="article-img w-auto" />
                        </div>
                        <div class="article">
                            <h4>
                                <?php echo ($article_data["title"]) ?>
                            </h4>
                            <p class="article-p">
                                <?php echo ($article_data["para1"]) ?>
                            </p>
                        </div>
                        <div class="blog-view">
                            <button class="btn button article-a" onclick="loadarticle(<?php echo $article_id ?>);">
                                Read More
                            </button>
                        </div>
                        <div class="posted-date">
                            <p class="posted-date-p">
                                <?php echo ($article_data["date"]) ?>
                            </p>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Article End -->


    <?php require "footer.php" ?>

    <script>
        function loadarticle(id) {
            window.location = "article.php?id=" + id;
        }
    </script>

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