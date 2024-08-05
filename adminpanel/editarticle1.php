<?php
require 'connection.php';
$pid = $_GET["id"];
$Update_rs = Database::search("SELECT * FROM `articles` WHERE `id` = '" . $pid . "'");
$Update_data = $Update_rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Article</title>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script src="tinymce/tinymce.min.js"></script>
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
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Header -->
  <?php
  session_start();
  if (isset($_SESSION["u"])) {
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
        <h1>Article Update</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Article Update</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $Update_data["title"] ?>
                </h5>
                <div class="col-12 col-md-10 col-lg-8">

                  <!-- General Form Elements -->
                  <form>
                    <div class="form-group">

                      <div class="d-flex flex-column mb-1">
                        <input id="aidu" type="hidden" value="<?php echo $Update_data["id"] ?>" class="w-100 p-2">

                        <label>Article Title</label>
                        <input id="articleTitleu" type="text" class="w-100 p-2">
                      </div>

                      <label for="updateArticleDescription" class="d-flex flex-column mb-2">Article Description</label>
                      <label>Paragraph 1:</label>
                      <input type="text" id="para1u" style="width: 633px; height: 100px;">

                    </div>
                    <!-- <div class="col-12">
                      <div class="row">
                        <div class="col-12">
                          <label class="col-sm-3 col-form-label">Image Upload</label>
                        </div>

                        <div class="offset-lg-3 col-12 col-lg-8">
                          <div class="row gap-3">
                            <div class="col-3 border border-primary rounded">
                              <img src="resource/addproductimg.svg" class="img-fluid" style="height: 180px;" id="i0" />
                            </div>
                          </div>
                        </div>

                        <div class="offset-lg-3 col-12 col-lg-2 d-grid">
                          <input type="file" class="d-none" id="imageuploaderu" />
                          <label for="imageuploaderu" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload
                            Images</label>
                        </div>

                      </div>
                    </div> -->

                    <button onclick="updatearticle1();" type="button" class="btn btn-success rounded-pill mt-2">Upload
                      Article Intro</button>

                    <div class="d-flex flex-column mt-2 mb-2">
                      <label>Type Article</label>

                      <!-- Quill.js Editor -->
                      <div id="editor">

                      </div>
                    </div>

                    <button id="submitBtn1" type="button" class="btn btn-success rounded-pill">Upload
                      Article</button>

                  </form>
                  <!-- End General Form Elements -->

                </div>
              </div>

            </div>
          </div>
      </section>

    </main><!-- End #main -->


    <!-- Footer -->
    <?php
    include("footer.php");
  } else {
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="tinymce/tinymce.min.js"></script>

  <!-- Include Quill.js and jQuery -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });

    var aid = document.getElementById("aidu").value;

    function sendDataToPHP1() {
      var content = quill.root.innerHTML; // Get the HTML content from the Quill editor
      // alert(content);

      // AJAX request to send data to PHP
      $.ajax({
        url: 'updatearticlefull.php',
        type: 'POST',
        data: {
          content: content,
          aid:aid
        },
        success: function (response) {
          // Handle the response here if needed
          // console.log(response);
          alert("Article Fully Updated");
        },
        error: function (xhr, status, error) {
          // Handle errors here
          console.error(status + ": " + error);
        }
      });
    }

    // Event listener for the submit button
    $('#submitBtn1').on('click', function () {
      sendDataToPHP1();
    });
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="../js/myscript.js"></script>
</body>

</html>