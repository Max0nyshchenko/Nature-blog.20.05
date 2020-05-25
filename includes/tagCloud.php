<!-- TAG CLOUD -->
<?php
$cater = mysqli_query($connection, "SELECT * FROM `categories`");
?>

<div class="cloud">
  <div class="tagBall">
    <?php
    while ($catt = mysqli_fetch_assoc($cater)) {
    ?>
      <a class="tag" href="categorie.php?=id<?php echo $catt['id']; ?>"><?php echo $catt['name']; ?></a>
    <?php } ?>
  </div>
</div>