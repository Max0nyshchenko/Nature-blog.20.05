<?php
require "../includes/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/main.min.css" />
  <title><?php echo $config['title']; ?></title>
</head>

<body>


  <!-- TAG BOX -->
  <?php include '../includes/tagBox.php' ?>

  <!-- SHOWCASE -->
  <div class="showcase-container articlePHP-showcase">
    <!-- NAV -->
    <nav>
      <div class="nature-blog">
        <h1><?php echo $config['title']; ?></h1>
      </div>
      <div class="menu-wrapper">
        <ul class="menu">
          <li><a href="../index.php">Home</a></li>
          <li><a href="about-me.php">About Me</a></li>
          <li class="menuTags"><a href="#">Tags</a></li>
        </ul>
      </div>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  </div>

  <!-- MAIN SECTION -->
  <section class="main-content-wrapper">
    <main id="section1" class="main-content articlephp-main-content">

      <!-- Article -->
      <div style="min-height: 80vh; margin: 2vh 0;" class="article articlephp-article">
        <h2>List of articles:</h2>
        <ul>
          <?php
          $perPage = 20;
          $page = 1;

          if (isset($_GET['categorie'])) {
            $categorie  = (int) $_GET['categorie'];
          };




          $totalCountQ = mysqli_query($connection, "SELECT COUNT(`id`) AS `totalCat` from `articles` WHERE `categorieID`=" . $categorie . ";");
          $totalCat = mysqli_fetch_assoc($totalCountQ);
          $totalCat = $totalCat['totalCat'];


          $totalPages = ceil($totalCat / $perPage);
          if ($page <= 1 || $page > $totalPages) {
            $page = 1;
          }

          $articlesExist = true;


          $offset = ($perPage * $page) - $perPage;

          $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorieID` = " . $categorie . " ORDER BY `id` DESC LIMIT $offset,$perPage");
          if (mysqli_num_rows($articles) <= 0) {
            echo "No atricles found..";
            $articlesExist = false;
          }
          while ($art = mysqli_fetch_assoc($articles)) {
          ?>

            <li><a class="articlephplink" href="article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a></li>

          <?php
          };
          if ($articlesExist == true) {
            echo '<div class="paginator">';
            if ($page > 1) {
              echo '<a href="articles.php?page=' . ($page - 1) . '">Previous page</a>';
            };
            if ($page < $totalPages) {
              echo '<a href="articles.php?page=' . ($page + 1) . '">Next page</a>';
            }
            echo '</div>';
          };
          ?>

        </ul>
      </div>



    </main>

    <!-- FOOTER -->
    <footer>
      <h2>Footer</h2>
    </footer>
</body>
<script src="../js/article.js"></script>

</html>