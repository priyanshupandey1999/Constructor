<?php include 'dbconnect.php' ?>


<?php 

if(isset($_POST['submit-portfolio'])){

    $portfolio_image1=htmlspecialchars($_POST['portfolio-image1']);
    $portfolio_image2=htmlspecialchars($_POST['portfolio-image2']);
    $portfolio_image3=htmlspecialchars($_POST['portfolio-image3']);
    $portfolio_image4=htmlspecialchars($_POST['portfolio-image4']);
    $portfolio_image5=htmlspecialchars($_POST['portfolio-image5']);
    $portfolio_image6=htmlspecialchars($_POST['portfolio-image6']);
    $portfolio_image7=htmlspecialchars($_POST['portfolio-image7']);
    $portfolio_image8=htmlspecialchars($_POST['portfolio-image8']);


    //update sql
    $sql = "UPDATE Portfolio
    SET label='$portfolio_image1'
    WHERE Id_of_Image=1 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image2'
    WHERE Id_of_Image=2 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image3'
    WHERE Id_of_Image=3 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image4'
    WHERE Id_of_Image=4 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image5'
    WHERE Id_of_Image=5 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image6'
    WHERE Id_of_Image=6 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image7'
    WHERE Id_of_Image=7 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }

    $sql = "UPDATE Portfolio
    SET label='$portfolio_image8'
    WHERE Id_of_Image=8 ";

if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }
}
?>


<div class="heading" id="contact">
    Change Portfolio Image
</div>
<center>
<div class="form3" >
        <form action="admin_control.php" id="portfolioform" name="portfolio-form" method="POST" >

            <input type="hidden" id="portfolio-image1" name="portfolio-image1" value="">
            <input type="hidden" id="portfolio-image2" name="portfolio-image2" value="">
            <input type="hidden" id="portfolio-image3" name="portfolio-image3" value="">
            <input type="hidden" id="portfolio-image4" name="portfolio-image4" value="">
            <input type="hidden" id="portfolio-image5" name="portfolio-image5" value="">
            <input type="hidden" id="portfolio-image6" name="portfolio-image6" value="">
            <input type="hidden" id="portfolio-image7" name="portfolio-image7" value="">
            <input type="hidden" id="portfolio-image8" name="portfolio-image8" value="">


            <input type="submit" onclick="mufunc();"  name="submit-portfolio" value="Submit"  >
        </form>
</div>
</center>


<script>
    function mufunc(){
        document.getElementById("portfolio-image1").value =  document.getElementsByClassName('portfolioimage1')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image2").value =  document.getElementsByClassName('portfolioimage2')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image3").value =  document.getElementsByClassName('portfolioimage3')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image4").value =  document.getElementsByClassName('portfolioimage4')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image5").value =  document.getElementsByClassName('portfolioimage5')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image6").value =  document.getElementsByClassName('portfolioimage6')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image7").value =  document.getElementsByClassName('portfolioimage7')[0].style.backgroundImage.slice(5, -2);
        document.getElementById("portfolio-image8").value =  document.getElementsByClassName('portfolioimage8')[0].style.backgroundImage.slice(5, -2);
    }

</script>