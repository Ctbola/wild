<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Add</title>


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


</head>

<body>

  <!-- Header -->
  <?php
    include("header.php");
    ?><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <?php
      include("sidepanel.php");
      ?>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Product Add</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card align-center">
              <div class="card-body">
                <h5 class="card-title">Add New Product</h5>

                <!-- General Form Elements -->
                <form>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Product Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="productTitle">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Product Description</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" style="height: 100px" id="productDescription"></textarea>
                    </div>
                  </div>
                  <!-- <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-3 col-form-label">Product Image URL</label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control">
                  </div>
                </div> -->
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Product Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="productPrice">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12">
                        <label class="col-sm-3 col-form-label">Image Upload</label>
                      </div>
                      <div class="offset-lg-3 col-12 col-lg-8">
                        <div class="row gap-3">
                          <div class="col-3 border border-primary rounded">
                            <img src="resource/addproductimg.svg" class="img-fluid" style="height: 180px;" id="i0" />
                          </div>
                          <div class="col-3 border border-primary rounded">
                            <img src="resource/addproductimg.svg" class="img-fluid" style="height: 180px;" id="i1" />
                          </div>
                          <div class="col-3 border border-primary rounded">
                            <img src="resource/addproductimg.svg" class="img-fluid" style="height: 180px;" id="i2" />
                          </div>
                        </div>
                      </div>

                      <div class="offset-lg-3 col-12 col-lg-2 d-grid mt-3">
                        <input type="file" class="d-none" id="imageuploader" multiple />
                        <label for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload
                          Images</label>
                      </div>

                    </div>
                  </div>
                  <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Image Upload</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div> -->


                  <div class="row mb-4">
                    <div class="col-sm-12 text-center">
                      <button type="button" class="btn btn-success rounded-pill" onclick="addNewProduct();">Add
                        Product</button>
                    </div>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>
          </div>
        </div>
      </section>

    </main><!-- End #main -->

    <!-- Footer -->
    <?php
    include("footer.php");
  // } else {
  //   header("Location:http://localhost/wildlife1/adminpanel/signin.php");
  // }
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