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

      <!--        Article          -->
      <?php $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);
      if (mysqli_num_rows($article) <= 0) {
      ?>
        <!-- Article -->
        <div class="article articlephp-article">
          <!--                <img src="../media/thomas-bonometti-dtfyRuKG7UY-unsplash.jpg" alt="" />-->
          <h2>Article not found...</h2>
          <p>

          </p>
          <p class="articlephp-views">20202 views</p>
        </div>
      <?php
      } else {
        $art = mysqli_fetch_assoc($article);
        mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']);
      ?>
        <!-- Article -->
        <div class="article articlephp-article">
          <img src="../media/articles/<?php echo $art['img']; ?>.jpg" alt="" />
          <h2><?php echo $art['title']; ?>></h2>
          <p>
            <?php echo $art['text']; ?>
          </p>
          <p class="articlephp-views"><?php echo $art['views']; ?> views</p>
        </div>
      <?php
      }
      ?>



      <!-- Comment -->
      <div class="articlephp-comments-wrap">
        <h1>Comment Zone</h1>
        <div class="articlephp-comments">
          <a style="color: #fff; text-decoration: none; text-align: end;" href="#comment-form">
            <h2>Leave a comment --></h2>
          </a>
          <?php
          $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articleID` = " . (int) $art['id'] .
            " ORDER BY `id` DESC");
          if (mysqli_num_rows($comments) > 0) {
            while ($comment = mysqli_fetch_assoc($comments)) {
          ?>
              <div class="articlephp-comment">
                <img src="../media/<?php echo $comment['img']; ?>.svg" alt="">
                <div class="usr-name"><?php echo $comment['author'] . ' ' . $comment['nickname']; ?></div>
                <div class="usr-comment"><?php echo $comment['comment']; ?></div>
              </div>
            <?php
            }
          } else {
            ?>
            <h2>Make a first comment:</h2>
          <?php
          }
          ?>


        </div>
      </div>

      <!-- LeaveComment Area -->
      <form id="comment-form" method="POST" action="article.php?id=<?php echo $art['id']; ?>#comment-form">
        <?php
        if (isset($_POST['do_post'])) {
          $errors = array();

          if ($_POST['username'] == '') {
            $errors[]  = 'Write the Username!';
          };
          if ($_POST['nickname'] == '') {
            $errors[]  = 'Write the Nickname!';
          };
          if ($_POST['comment_php'] == '') {
            $errors[]  = 'Write the Comment!';
          };

          if (empty($errors)) {

            $thisarticle = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);
            $thearticle = mysqli_fetch_assoc($thisarticle);

            mysqli_query($connection, "INSERT INTO `comments`(`articleID`, `author`, `nickname`, `comment`) VALUES (" . $thearticle['id'] . ", '" . $_POST['username'] . "', '" . $_POST['nickname'] . "', '" . $_POST['comment_php'] . "')");

            echo '<span style="color: green; margin-bottom: 10px; font-weight: bold; font-size: 1.2rem;">' . ' Comment successfully added!' . '</span>' . '<hr />';
          } else {
            echo '<span style="margin-bottom: 10px; font-weight: bold; font-size: 1.2rem;">' . $errors['0'] . '</span>' . '<hr />';
          }
        }
        ?>
        <input type="text" name="username" id="username" value="<?php echo $_POST['username']; ?>" placeholder="Username...">
        <input type="text" name="nickname" id="nickname" value="<?php echo $_POST['nickname']; ?>" placeholder="Nickname...">
        <textarea name="comment_php" id="com" cols="30" rows="10" placeholder="Write your comment right here..."><?php echo $_POST['comment_php']; ?></textarea>
        <input type="submit" name="do_post" value="Submit">
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