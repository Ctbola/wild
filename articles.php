<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <!-- Article Start -->
  <div class="container-xxl wow fadeInUp blog-section" data-wow-delay="0.1s">
    <div class="container py-2 py-md-5 setion-content blog">
      <h1 class="text-center blog-h2 wow fadeInUp" data-wow-delay="0.1s ">Articles</h1>
      <div class="article-cards">

        <?php

        $article = Database::search("SELECT * FROM `articles` WHERE `status`='1' ORDER BY `date` LIMIT 3");
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

  <div class="d-flex justify-content-center" data-wow-delay="0.1s">
    <button class="btn button article-a" onclick="loadAllArticles();">
      View All Articles
    </button>
  </div>

  <script>
    function loadarticle(id) {
      window.location = "article.php?id=" + id;
    }

    function loadAllArticles() {
      window.location = "allArticle.php";
    }
  </script>

</body>

</html>