<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Update</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <link href="assets/css/bootstrap.css" rel="stylesheet">


</head>

<body>

  <!-- Header -->
  <?php
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
      <h1>Product Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Product Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="col-1">Id</th>
                    <th class="col-3">Product Name</th>
                    <th class="col-4">Description</th>
                    <th class="col-2">Price</th>
                    <th class="col-2">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $rs = Database::search("SELECT * FROM `Product`");
                  $n = $rs->num_rows;

                  $y = 1;
                  for ($x = 0; $x < $n; $x++) {
                    $d = $rs->fetch_assoc();

                    $pid = $d["id"];

                    ?>

                    <tr>
                      <td class="col-1">
                        <?php echo $y ?>
                      </td>
                      <td class="col-3">
                        <?php echo $d["name"]; ?>
                      </td>
                      <td class="col-4">
                        <?php echo $d["description"]; ?>
                      </td>
                      <td class="col-2">
                        <?php echo $d["price"]; ?>
                      </td>
                      <td class="col-2">

                        <a href='<?php echo "updateProductPage.php?id=" . $pid ?>'
                          class=" rounded-pill col-6 btn btn-success">Edit</a>
                      </td>
                    </tr>

                    <!-- modal -->

                    <div class="modal" tabindex="-1" id="productUpdateModal<?php echo $pid; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Product Update</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <section class="section">
                            <div class="row">
                              <div class="col-lg-12">

                                <div class="card align-center">
                                  <div class="card-body">
                                    <h5 class="card-title">Update Product</h5>
                                    <?php
                                    $Update_rs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $d["id"] . "'");
                                    $Update_data = $Update_rs->fetch_assoc();


                                    ?>
                                    <!-- General Form Elements -->
                                    <form>
                                      <!-- <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">Product Title</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="productTitle" value="<?php echo $Update_data["name"]; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Product Description</label>
                                        <div class="col-sm-9">
                                          <input class="form-control" style="height: 100px" id="productDescription" value="<?php echo $Update_data["description"]; ?>">
                                        </div>
                                      </div> -->
                                      <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Product Price</label>
                                        <div class="col-sm-9">
                                          <input type="price" class="form-control" id="productPrice">
                                        </div>
                                      </div>





                                    </form><!-- End General Form Elements -->

                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <div class="modal-footer">
                            <button type="button" class="col-12 btn btn-success rounded-pill"
                              onclick='updateProduct(<?php echo $d["id"]; ?>);'>Update Product</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- modal -->

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

          <!-- modal -->
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Footer -->
  <?php
  include("footer.php");
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
  <script src="assets/js/bootstrap.js"></script>

</body>

</html>