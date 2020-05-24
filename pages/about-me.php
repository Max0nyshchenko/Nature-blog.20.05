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
  <!-- TAG CLOUD -->
  <div class="tagBox-wrap">
    <span class="tagBox-closer">&#215;</span>
    <div class="tagBox">
      <a class="tagBoxTag" target="_blank" href="#">Psychological Diseases</a>
      <a class="tagBoxTag" target="_blank" href="#">Predators Behaviour</a>
      <a class="tagBoxTag" target="_blank" href="#">Other</a>
      <a class="tagBoxTag" target="_blank" href="#">Events</a>
      <a class="tagBoxTag" target="_blank" href="#">Help</a>
      <a class="tagBoxTag" target="_blank" href="#">Directory</a>
      <a class="tagBoxTag" target="_blank" href="#">Travel</a>
      <a class="tagBoxTag" target="_blank" href="#">Nature</a>
      <a class="tagBoxTag" target="_blank" href="#">Art</a>
      <a class="tagBoxTag" target="_blank" href="#">Health</a>
    </div>
  </div>
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