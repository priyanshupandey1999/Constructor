<?php include 'inc/PortfolioImageUpdate.php' ?> 
<?php include 'dbconnect.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin_control.css">
    <link rel="stylesheet" href="css/add_client_info.css">
    <link rel="stylesheet" href="css/modify_existing_client.css">
    <link rel="stylesheet" href="css/admin_navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
  }

?>

<?php include 'inc/admin_navbar.php' ?>

          
<!-- ----------Complete Code is for tabs only and content in tabs are included---------- -->


<div class="tab">
  <center>
  <button class="tablinks" onclick="openfunc(event, 'PortfolioImage')">Portfolio Image Update</button>
  <button class="tablinks" onclick="openfunc(event, 'NewClient')">Add new client</button>
  <button class="tablinks" onclick="openfunc(event, 'ExistingClient')">Modify Existing Client</button>
  <button class="tablinks" onclick="openfunc(event, 'Display_Message')">Message Recieved</button>
  </center>
</div>

<div id="PortfolioImage" class="tabcontent PortfolioImage">
<?php include 'portfolio_control.php' ?> 

</div>

<div id="NewClient" class="tabcontent">
<?php include 'add_client_info.php' ?> 
</div>

<div id="ExistingClient" class="tabcontent">
  <?php include 'modify_existing_client.php' ?>

</div>

<div id="Display_Message" class="tabcontent">
<?php include 'display_message.php' ?> 
</div>


<br><br><br><br>
<?php include 'inc/footer.php' ?>


<script>
function openfunc(evt, eventname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(eventname).style.display = "block";
  evt.currentTarget.className += " active";

  
}
</script>


<script>
  var images=["<?php echo $portfolio[0];?>","<?php echo $portfolio[1];?>","<?php echo $portfolio[2];?>","<?php echo $portfolio[3];?>","<?php echo $portfolio[4];?>","<?php echo $portfolio[5];?>","<?php echo $portfolio[6];?>","<?php echo $portfolio[7];?>"]

  document.getElementsByClassName("portfolioimage1")[0].style.backgroundImage='url('+images[0]+')';
  document.getElementsByClassName("portfolioimage2")[0].style.backgroundImage='url('+images[1]+')';
  document.getElementsByClassName("portfolioimage3")[0].style.backgroundImage='url('+images[2]+')';
  document.getElementsByClassName("portfolioimage4")[0].style.backgroundImage='url('+images[3]+')';
  document.getElementsByClassName("portfolioimage5")[0].style.backgroundImage='url('+images[4]+')';
  document.getElementsByClassName("portfolioimage6")[0].style.backgroundImage='url('+images[5]+')';
  document.getElementsByClassName("portfolioimage7")[0].style.backgroundImage='url('+images[6]+')';
  document.getElementsByClassName("portfolioimage8")[0].style.backgroundImage='url('+images[7]+')';


</script>


    <script src="js/navbar.js"></script>
    <script src="js/admin_control.js"></script>

</body>
</html>