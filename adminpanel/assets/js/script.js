function signin() {
  var email = document.getElementById("uemail");
  var password = document.getElementById("upassword");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      if (t == "success") {
        window.location = "index.php";
      }
    }
  };

  r.open("POST", "signinprocess.php", true);
  r.send(f);
}

function addNewProduct() {
  var title = document.getElementById("productTitle");
  var description = document.getElementById("productDescription");
  var Price = document.getElementById("productPrice");
  var image = document.getElementById("imageuploader");

  var f = new FormData();

  f.append("title", title.value);
  f.append("description", description.value);
  f.append("Price", Price.value);
  f.append("image" + x, image.files[x]);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    f.append("image" + x, image.files[x]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "prouduct save successfull") {
        alert("Product Add Succuessful");
        window.location = "productadd.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addProductProcess.php", true);
  r.send(f);
}

function changeProductImage() {
  var image = document.getElementById("imageuploader");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 3) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please select 3 or less than 3 images.");
    }
  };
}

function updateProduct(id) {
  var title = document.getElementById("productTitle").value;
  var description = document.getElementById("productDescription").value;
  var Price = document.getElementById("productPrice").value;

  // var f = new FormData();
  // f.append("title", title.value);
  // f.append("description", description.value);
  // f.append("Price", Price.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        alert("Product Update Succuessful");
        window.location = "product_update.php";
      } else {
        alert(t);
      }
    }
  };

  r.open(
    "GET",
    "updateProductProcess.php?id=" +
    id +
    "&title=" +
    title +
    "&desc=" +
    description +
    "&price=" +
    Price,
    true
  );
  r.send();
}

function changeStatus(id) {
  var product_id = id;

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;

      if (t == "deactivated") {
        alert("Product Deactivated");
        window.location.reload();
      } else if (t == "activated") {
        alert("Product Activated");
        window.location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "changeStatusProcess.php?p=" + product_id, true);
  r.send();
}

function articledelete(id) {
  //alert(id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        alert("Articel Delete Succuessful");
        window.location = "articledelete.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "articledeleteprocess.php?id=" + id, true);
  r.send();
}

function signout() {

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {

        // window.location = "home.php";
        window.location.reload();

      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "signoutProcess.php", true);
  r.send();

}

function changepassword() {

  var np = document.getElementById("newPassword");
  var rnp = document.getElementById("renewPassword");
  var curentp = document.getElementById("currentPassword");

  var f = new FormData();

  f.append("n", np.value);
  f.append("r", rnp.value);
  f.append("v", curentp.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        alert("Password reset success");
      } else {
        alert(t);
      }

    }
  };

  r.open("POST", "resetPassword.php", true);
  r.send(f);

}


function addNewArticle2() {
  var artTitle = document.getElementById("articleTitle");
  var artpara1 = document.getElementById("para1");
  var image = document.getElementById("imageuploader");

  var f = new FormData();

  f.append("artTitle", artTitle.value);
  f.append("artpara1", artpara1.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    f.append("image" + x, image.files[x]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "prouduct save successfull") {
        alert("Article Intro Upload Succuessful");
        window.location = "articleadd1.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addarticleprocess1.php", true);
  r.send(f);
}

function updatearticle1() {
  var aid = document.getElementById("aidu").value;
  var artTitle = document.getElementById("articleTitleu").value;
  var artpara1 = document.getElementById("para1u").value;
  // var image = document.getElementById("imageuploaderu");

  var f = new FormData();

  f.append("aid", aid);
  f.append("artTitle", artTitle);
  f.append("artpara1", artpara1);

  // var file_count = image.files.length;

  // for (var x = 0; x < file_count; x++) {
  //   f.append("image" + x, image.files[x]);
  // }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        location.reload();
      }
    }
  };

  r.open("POST", "updatearticleintro.php", true);
  r.send(f);
}