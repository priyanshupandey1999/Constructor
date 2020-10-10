
<?php include 'dbconnect.php' ?> 

<?php $portfolio = array("","","","","","","",""); ?>

<?php
$sql = "SELECT label,Id_of_Image FROM Portfolio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $portfolio[$row["Id_of_Image"]-1] = $row["label"];
  
  }
} else {
  echo "no images found to fetch in portfolio.Please update portfolio database!!";
}

?>



