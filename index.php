<?php
require "includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title><?php echo $config['title']; ?></title>
</head>

<body>
  <?php
  $categories_q = mysqli_query($connection, "SELECT * FROM `categories`");
  $categories = array();
  while ($cat = mysqli_fetch_assoc($categories_q)) {
    $categories[] = $cat;
  }
  ?>
  <!-- TAG BOX -->
  <?php include 'includes/tagBox.php' ?>
  <!-- SHOWCASE -->
  <div class="showcase-container">
    <!-- NAV -->
    <nav>
      <div class="nature-blog">
        <h1><?php echo $config['title']; ?></h1>
      </div>
      <div class="menu-wrapper">
        <ul class="menu">
          <li><a href="#" target="_blank">Home</a></li>
          <li><a href="pages/about-me.php">About Me</a></li>
          <li class="menuTags"><a href="#">Tags</a></li>
        </ul>
      </div>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <!-- SHOWCASE VIDEO -->
    <div class="showcase-video-wrapper">
      <video class="showcase-video" autoplay="autoplay" muted="muted" loop>
        <source src="media/Wolf - 27516.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <a href="#section1" class="mouse">
        <div class="scroll"></div>
        <div class="dot"></div>
      </a>
    </div>
  </div>

  <!-- MAIN SECTION -->
  <section class="main-content-wrapper">
    <main id="section1" class="main-content">
      <!-- LEFT MAIN COLON -->
      <div class="main-left show-on-scroll">

        <!-- Newest Articles -->
        <div class="title">Newest Articles <span> &#187;</span></div>
        <div class="articles-block">
          <?php
          $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 10 ");
          ?>


          <?php
          while ($art = mysqli_fetch_assoc($articles)) {
          ?>

            <div class="article">
              <h2 class="idx-art-h2"><?php echo $art['title']; ?></h2>
              <p class="idx-art-para">
                <?php echo $art['text']; ?>
              </p>
              <img class="idx-art-img" src="media/articles/<?php echo $art['img']; ?>min.jpg" alt="image of nature" />
              <span><a href="/article.php?id=<?php echo $art['id']; ?>">Read More &#187;</a></span>
            </div>

          <?php
          }
          ?>
        </div>




        <div class="title">
          Psychological diseases among Animals<span> &#187;</span>
        </div>
        <div class="articles-block">
          <div class="article">
            <h2>Article Title</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
              deserunt omnis voluptas tempora, nobis debitis nam similique?
              Fugit illo maxime cum magnam esse incidunt veniam tempora,
              omnis, quidem, aliquid doloribus!
            </p>
            <img src="media/wild-157677.svg" alt="" />
            <span>Read More &#187;</span>
          </div>

        </div>

        <div class="title">
          Predators Behaviour in Nature..<span> &#187;</span>
        </div>
        <div class="articles-block">
          <div class="article">
            <h2>Article Title</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
              deserunt omnis voluptas tempora, nobis debitis nam similique?
              Fugit illo maxime cum magnam esse incidunt veniam tempora,
              omnis, quidem, aliquid doloribus!
            </p>
            <img src="media/wild-157677.svg" alt="" />
            <span>Read More &#187;</span>
          </div>

        </div>

        <!-- Left-slide image -->
        <div class="interesting-fact-wrapper">
          <img class="interesting-fact-img" src="media/gregoire-bertaud-wK_DZlAJJ_Q-unsplash.jpg" alt="" />
          <div class="interesting-fact-text">
            <h4>Lorem, ipsum.</h4>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laudantium, et?
            </p>
          </div>
        </div>
      </div>
      <!-- MAIN RIGHT COLON -->
      <div class="main-right">
        <!-- TAG CLOUD -->
        <?php include 'includes/tagCloud.php'; ?>
        <!-- TOP ARTICLES -->
        <div class="top-articles">
          <div class="top-articles-header">
            <h2>Top Articles</h2>
          </div>
          <div class="articles-section">
            <?php
            $toparticles = mysqli_query($connection, "SELECT * FROM `articles` LIMIT 0, 5 
            ");
            ?>

            <?php

            while ($topArt = mysqli_fetch_array($toparticles)) { ?>

              <div class="top-articles-article">
                <div class="name">
                  <h2><?php echo $topArt['title'] ?></h2>
                </div>
                <?php
                $art_cat = false;
                foreach ($categories as $cat) {
                  if ($cat['id'] == $topArt['categorieID']) {
                    $art_cat = $cat;
                    break;
                  }
                }
                ?>
                <div class="category"><a href="">Category:<?php echo $art_cat['name']; ?> </a></div>
                <div class="desc">
                  <?php
                  $content = $topArt['text'];
                  $dot = ".";

                  $position = stripos($content, $dot);
                  if ($position) {
                    $offset = $position + 1;
                    $position2 = stripos($content, $dot, $offset);
                    $firstTwo = substr($content, 0, $position);

                    echo $firstTwo . "...";
                  } else {
                    // do nothing
                  }
                  ?>
                </div>
              </div>

            <?php
            };
            ?>

          </div>
        </div>
        <!-- TOP COMMENTS -->
        <div class="top-articles">
          <div class="top-articles-header">
            <h2>Top Comments</h2>
          </div>
          <div class="articles-section">
            <div class="top-articles-article">
              <div class="name">
                <h2>Name of the comment</h2>
              </div>
              <div class="category">Category</div>
              <div class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reprehenderit, officia.
              </div>
            </div>
            <div class="top-articles-article">
              <div class="name">
                <h2>Name of the comment</h2>
              </div>
              <div class="category">Category</div>
              <div class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reprehenderit, officia.
              </div>
            </div>
            <div class="top-articles-article">
              <div class="name">
                <h2>Name of the comment</h2>
              </div>
              <div class="category">Category</div>
              <div class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reprehenderit, officia.
              </div>
            </div>
            <div class="top-articles-article">
              <div class="name">
                <h2>Name of the comment</h2>
              </div>
              <div class="category">Category</div>
              <div class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reprehenderit, officia.
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>
  <!-- FOOTER -->
  <footer>
    <h2>Footer</h2>
  </footer>
</body>
<script src="js/cloud.js"></script>
<script src="js/app.js"></script>

</html>