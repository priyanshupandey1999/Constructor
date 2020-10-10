
  <div class="heading2">[ All images  ]</div>
  <section class="new-section port-grid">

  <?php
$sql ="SELECT images FROM images";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $z="images";
      $y="images/$row[$z]";
      $x="background-Image:url('$y'); height:40vh; width:30vw;"
      ?>
        <div class="draggable one" style="<?php echo $x ?>" draggable="true">
        </div>
  <?php
  }
} else {
  echo "no images found to fetch in portfolio.Please update portfolio database!!";
}

?>

  </section>
  