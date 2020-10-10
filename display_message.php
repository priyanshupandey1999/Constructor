<?php
$sql ="SELECT * FROM enquiry ORDER BY id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
?>
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Message ID</th>
            <th>Senders Name</th>
            <th>Email Id</th>
            <th>Contact No. </th>
            <th>Message </th>

        </tr>
    </thead>

    <tbody>
        <?php
    while($row = $result->fetch_assoc()) {
        ?>
    <tr>
            <th><?php echo $row['id'] ?></th>
            <th><?php echo $row['name'] ?></th>
            <th><?php echo $row['email'] ?></th>
            <th><?php echo $row['mobile'] ?></th>
            <th><?php echo $row['message'] ?></th>

        </tr>
            
    <?php } ?>
    </tbody>
</table>

  <?php
  
} else {
  echo "no images found to fetch in portfolio.Please update portfolio database!!";
}

?>