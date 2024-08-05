<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Activation</title>


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
      <h1>Product Activation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Product Activation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Activation</h5>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $allprodut_rs = Database::search("SELECT * FROM `product`");
                  $allproduct_num = $allprodut_rs->num_rows;

                  for ($x = 0; $x < $allproduct_num; $x++) {
                    $allproduct_data = $allprodut_rs->fetch_assoc();
                  ?>
                    <tr>
                      <td>1</td>
                      <td><?php echo $allproduct_data["name"] ?></td>
                      <td><?php echo $allproduct_data["description"] ?></td>
                      <td><?php echo $allproduct_data["price"] ?></td>
                      <td>
                        <div class="form-check form-switch">

                          <input class="form-check-input" type="checkbox" role="switch" id="fd<?php echo $allproduct_data["id"]; ?>" <?php if ($allproduct_data["status"] == 1) { ?>checked<?php } ?> onclick="changeStatus(<?php echo $allproduct_data['id']; ?>);" />

                          <label class="form-check-label fw-bold text-success" for="fd<?php echo $allproduct_data["id"]; ?>">
                            <?php if ($allproduct_data["status"] == 1) { ?>
                              Make Your Product Active
                            <?php } else { ?>
                              Make Your Product Deactive
                            <?php
                            }
                            ?>

                          </label>
                        </div>
                      </td>
                    </tr>

                  <?php
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


  </main><!-- End #main -->

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
  <script src="assets/js/script.js"></script>

</body>

</html>