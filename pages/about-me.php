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
  <div class="showcase-container aboutmePHP-showcase">
    <!-- NAV -->
    <nav>
      <div class="nature-blog">
        <h1><?php echo $config['title']; ?></h1>
      </div>
      <div class="menu-wrapper">
        <ul class="menu">
          <li><a href="../index.php">Home</a></li>
          <li><a href="#">About Me</a></li>
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
      <div class="article articlephp-article">
        <img src="../media/thomas-bonometti-dtfyRuKG7UY-unsplash.jpg" alt="" />
        <h2>About Me</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
          deserunt omnis voluptas tempora, nobis debitis nam similique?
          Fugit illo maxime cum magnam esse incidunt veniam tempora,
          omnis, quidem, aliquid doloribus!
        </p>
      </div>
  </section>
  <!-- FOOTER -->
  <footer class="aboutmephp-footer">
    <h2>Footer</h2>
  </footer>
</body>
<script src="../js/article.js"></script>

</html>