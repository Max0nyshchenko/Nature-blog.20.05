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
      <div class="article articlephp-article">
        <img src="../media/thomas-bonometti-dtfyRuKG7UY-unsplash.jpg" alt="" />
        <h2>Article Title</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
          deserunt omnis voluptas tempora, nobis debitis nam similique?
          Fugit illo maxime cum magnam esse incidunt veniam tempora,
          omnis, quidem, aliquid doloribus!
        </p>
        <p class="articlephp-views">20202 views</p>
      </div>

      <!-- Comment -->
      <div class="articlephp-comments-wrap">
        <h1>Comment Zone</h1>
        <div class="articlephp-comments">
          <div class="articlephp-comment">
            <img src="../media/wolf-30695.svg" alt="">
            <div class="usr-name">Soem Uno</div>
            <div class="usr-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi error magni vitae, at dignissimos ut itaque? Laboriosam, reiciendis. Officia debitis excepturi perspiciatis vero nulla pariatur iusto nemo quis recusandae voluptatibus?</div>
          </div>
          <div class="articlephp-comment">
            <img src="../media/wolf-30695.svg" alt="">
            <div class="usr-name">Soem Uno</div>
            <div class="usr-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi error magni vitae, at dignissimos ut itaque? Laboriosam, reiciendis. Officia debitis excepturi perspiciatis vero nulla pariatur iusto nemo quis recusandae voluptatibus?</div>
          </div>
          <div class="articlephp-comment">
            <img src="../media/wolf-30695.svg" alt="">
            <div class="usr-name">Soem Uno</div>
            <div class="usr-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi error magni vitae, at dignissimos ut itaque? Laboriosam, reiciendis. Officia debitis excepturi perspiciatis vero nulla pariatur iusto nemo quis recusandae voluptatibus?</div>
          </div>
        </div>
      </div>

      <!-- LeaveComment Area -->
      <form id="comment-form" method="POST" action="">
        <input type="text" name="username" id="username" placeholder="Username...">
        <input type="text" name="nickname" id="nickname" placeholder="Nickname...">
        <textarea name="comment_php" id="com" cols="30" rows="10" placeholder="Write your comment right here..."></textarea>
        <button type="submit">Submit</button>
      </form>
    </main>
  </section>

  <!-- FOOTER -->
  <footer>
    <h2>Footer</h2>
  </footer>
</body>
<script src="../js/article.js"></script>

</html>