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

          if (isset($_GET['page'])) {
            $page  = (int) $_GET['page'];
          };

          $totalPages = ceil($totalCount / $perPage);
          if ($page <= 1 || $page > $totalPages) {
            $page = 1;
          }


          $totalCountQ = mysqli_query($connection, "SELECT COUNT(`id`) AS `totalCount` from `articles`");
          $totalCount = mysqli_fetch_assoc($totalCountQ);
          $totalCount = $totalCount['totalCount'];

          $offset = ($perPage * $page) - $perPage;

          $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$perPage");
          while ($art = mysqli_fetch_assoc($articles)) {
          ?>

            <li><a class="articlephplink" href="article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a></li>

          <?php
          }
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