<?php
require('connection.php'); ?>

<!-- Topbar Start -->
<div class="container-fluid bg-white p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex justify-content-between">
        <div class="col-lg px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>077 3793 491</small>
            </div>
        </div>
        <div class="col-lg px-5 text-center">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4 text-black">
                <!-- <h5>Husma<span style="color: #2eb887;">Breath.lk</span></h5> -->
                <!-- <a href="./" class="navbar-brand p-0 w-auto text-black">හුස්ම<span style="color:#2eb872;">Breath.lk</span> -->
                <img class="img-fluid" src="img/images/logo1.png" alt="Icon" />
            </div>
        </div>
        <div class="col-lg px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1"
                    href="https://www.facebook.com/profile.php?id=100093070144976&mibextid=ZbWKwL"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1"
                    href="https://youtube.com/@lovingelephant?si=lNEShrccu8JF6fbd"><i class="fab fa-youtube"></i></a>
                <!-- <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a> -->
                <!-- <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a> -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <!-- <a href="./" class="navbar-brand p-0 w-auto husma-header-logo">හුස්ම<span style="color:#2eb872;">Breath.lk</span> -->
    <img class="img-fluid me-3 w-auto" src="img/images/logo1.png" alt="Icon" />
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto" id="nav-btns">
            <a href="./" class="nav-item nav-link nav-items-1">Home</a>
            <a href="./about.php" class="nav-item nav-link nav-items-2">About</a>
            <a href="./product.php" class="nav-item nav-link nav-items-3">Products</a>
            <a href="./contact.php" class="nav-item nav-link nav-items-4">Contact</a>
            <a href="#" class="nav-item nav-link d-block d-md-none btn-green-nav text-white">Donate</a>
        </div>
        <a href="#" class="btn-green-nav d-none d-md-block">Donate</a>
    </div>
</nav>
<!-- Navbar End -->