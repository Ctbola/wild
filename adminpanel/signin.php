<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HusmaBreath - Admin Sign in</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/mystyle.css" rel="stylesheet" />
</head>

<body class="sign-in">

    <!-- signin start -->
    <div class="row g-5 h-100">
        <div class="d-none col-lg-6 h-100 wow fadeInUp d-lg-flex justify-content-end" data-wow-delay="0.5s">
            <img class="sign-in-img" src="../img/slider-15.jpg" alt="">
        </div>

        <div class="col-12 col-lg-6 wow fadeInUp d-flex flex-column justify-content-center justify-content-lg-end p-3"
            data-wow-delay="0.1s">
            <img style="width: fit-content;" src="../img/images/logo1.png" alt="Icon" />
            <h1 class="display-5 mb-4">Admin Sign In</h1>

            <!-- <form action="" method="POST" style="width: 100%;"> -->
            <div class="row">
                <div class="col-12 mb-1">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-0" name="email" id="uemail" placeholder="Email" />
                        <label for="subject">Email</label>
                    </div>
                </div>
                <div class="col-12 mb-1">
                    <div class="form-floating">
                        <input type="password" class="form-control bg-light border-0" id="upassword" name="upassword"
                            placeholder="Password" />
                        <label for="subject">Password</label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <button class="btn btn-primary w-100 py-3" onclick="signin();">
                    Sign In
                </button>
            </div>

            <!-- </form> -->

        </div>
    </div>
    <!-- signin End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
    <script src="js/myscript.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>