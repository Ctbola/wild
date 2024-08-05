<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Article Update</title>


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    <?php
    session_start();
    if(isset($_SESSION["u"])){
    include("header.php");
    require 'connection.php';
    ?><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <?php
        include("sidepanel.php");
        ?>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Article Update</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Article Update</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Articles</h5>
                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th class='w-75'>Article Title</th>
                                        <!-- <th>Date Posted</th> -->
                                        <!-- <th>Price</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $y = 1 ;
                                    $article_rs = Database::search("SELECT * FROM `articles`");
                                    $article_num = $article_rs->num_rows;
                                    for ($x = 0; $x < $article_num; $x++) {
                                        $article_data = $article_rs->fetch_assoc();
                                        $pid = $article_data["id"];
                                        
                                    ?>

                                        <tr>
                                            <td><?php echo $y?></td>
                                            <td><?php echo $article_data["title"]?></td>
                                            <!-- <td>hdhdhddhdhdhdhdhdh</td> -->
                                            <!-- <td>$10.00</td> -->
                                            <td>
                                            <a href='<?php echo "editarticle1.php?id=" . $pid ?>' class=" rounded-pill col-6 btn btn-success">Edit</a>
                                            </td>
                                        </tr>


                                    <?php
                                    $y++;
                                    }
                                    
                                    ?>

                                    <!-- Add more rows as needed -->
                                </tbody>

                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main --><!-- End #main -->

    <!-- Footer -->
    <?php
    include("footer.php");
}else{
    header("Location:http://localhost/wildlife1/adminpanel/signin.php");
  }
    ?>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>