<!-- Tag Box -->
<?php
$categories = mysqli_query($connection, "SELECT * FROM `categories`")
?>


<div class="tagBox-wrap">
  <span class="tagBox-closer">&#215;</span>
  <div class="tagBox">
    <?php
    while ($cat = mysqli_fetch_assoc($categories)) {
    ?>
      <a class="tagBoxTag" href="#"><?php echo $cat['name'] ?></a>
    <?php
    }
    ?>
  </div>
</div>