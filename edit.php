<?php


/*------------------------------------------function to fetch array result----------------------------------------------------*/
function fetchfunction($query)
{
  //connecting to database
  include ('dbconnect.php');

  //executing query
  $statement = mysqli_query($conn, $query);
  
  //returning an array
  return $statement;
}

// /*-----------------------------------Function for fetching image and companyname for portfolio section-------------------------*/


// /*----------------------------------------------function to delete image-----------------------------------------------------*/
function deleteimages($a)
{
  //connecting to database
  include ('dbconnect.php');

  //part for deleting images from folder
  $query1 = "SELECT * FROM images WHERE id IN ($a)";
  
  //function call to fetcharray
  $result = fetchfunction($query1);
  while( $row = $result->fetch_assoc())
  {
    unlink("images/".$row["images"]);
  }

  //query to delete images from database
  $query = "DELETE FROM images WHERE id IN($a)";

  //executing query
  mysqli_query($conn, $query);
}
// /*-----------------------------------------------end of function to delete function-----------------------------------------*/

// /*---------------------------------------function to add more images to company-----------------------------------------------*/
function addimages($companyname, $imageName, $imageTmpName)
{
  //connecting to database
  include ('dbconnect.php');

  //initailazing the variable
  $directory = "images/";
  
  //inbuilt function to move uploaded images to the dirctory
  $result = move_uploaded_file($imageTmpName, $directory.$imageName);

    if ($result)
    {   
        //query to insert names of images into images table
        $query = "INSERT INTO  images (images, companyid) 
          VALUES('$imageName',(SELECT id FROM company WHERE companyname = '$companyname'))";
          mysqli_query($conn, $query);
    }
}

// /*------------------------------------------end of function add more images---------------------------------------------------*/

// /*--------------------------------------function to add more images to company---------------------------------------*/
if (isset($_POST["images"]))
{ 

  //intalize variable
  $companyname = "";
  $companyname = $_POST['companyname'];

  //loop for the multiple images for gallery
  foreach ($_FILES['image']['tmp_name'] as $key => $image)
  {
      
    $imageName = $_FILES['image']['name'][$key];
    $imageTmpName = $_FILES['image']['tmp_name'][$key];

    addimages($companyname, $imageName, $imageTmpName);
  }

    

  header('location: edit.php?companyname='.$companyname);
}


// /*---------------------------------------end of fuction to  add more images--------------------------------------------*/
// /*--------------------------------------function to delete images------------------------------------------------------*/
if (isset($_POST["delete"]))
{   
	$companyname = $_POST['companyname'];
	$chk = $_POST["chk"];
  if (empty($chk)) { array_push($errors, "You have not selected any images");}

  else
  {
	$a = implode(",",$chk);
	deleteimages($a);

    header('location: edit.php?companyname='.$companyname);
  }
}
// /*----------------------------------------end of function to delete images---------------------------------------------*/



// /*-----------------------------------function to get headimage of the company---------------------------------------*/
function headimage($companyname)
{ 

  //initalize variable
  $output = "";

  //query to get headimage
  $query = "SELECT * FROM company WHERE companyname = '$companyname'";

  //function call from model to get image
  $result = fetchfunction($query);

    while( $row = $result->fetch_assoc())
    {
      $output .= '<img src="images/'.$row["headimage"].'"   class="img-thumbnail";> ';
    }
  
  echo $output;
}

/*---------------------------------------------function to dispaly company name-----------------------------------------*/
function displayname($companyname)
{
  $output = "";

  //query to get headimage
  $query = "SELECT * FROM company WHERE companyname = '$companyname'";

  //function call from model to get image
  $result = fetchfunction($query);

    while( $row = $result->fetch_assoc())
    {
      $output .= ' '.$row['companyname'].' ';
    }
  
  echo $output;
}
/*-------------------------------------------end of function of displaying name---------------------------------------*/

// /*-------------------------------------------starts of delete function------------------------------------------------*/
function deletefetch($companyname)
{
  $output = "";

  //query to images of entered company
  $query = "SELECT * FROM images WHERE companyid=(SELECT id FROM company WHERE companyname = '$companyname')";

  //function to fetch query results in array
  $result = fetchfunction($query);

  $output = '<div class="row-grid">';

  if(mysqli_num_rows($result)==0)
  {
    $output .='<h2>Looks like you deleted all the images</h2>';
  }
  else{

  while( $row = $result->fetch_assoc())
  {
    $output  .= '<div class="delete_image_grid">
                        <a href="images/'.$row["images"].'">
                            <img class="img-thumbnail" src="images/'.$row["images"].'">
                        </a>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="chk[]" value="'.$row["id"].'" id="check"/>
                        </div>
                    </div>';
  }
}
  echo $output;
}

// /*---------------------------------------------end of delete function---------------------------------------------------*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="css/admin_navbar.css">
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





<!----------------------------------code for fetching images for company------------------------------->
    <br><br>
    <?php $companyname = $_GET['companyname']; ?>
    <div class="Edit_Company_Info">
    <section class="editleft">
    	<div class="companyname" >
    	    <div class="company_name">
              <p>Company Name</p>
    	        <p><?php displayname($companyname); ?></p>
    	    </div>
    	    <div class="headimage">
    	    	    <p>Header Image</p>
                <?php headimage($companyname); ?>
    	    </div>
        </div>
    </section>

    <section class="editright">
    	<form class="box" method="POST" action="modify_existing_client.php" autocomplete="off" enctype="multipart/form-data" id="edit_form">
    		<div class="companyname">
    			<p>New Name for Company</p>
                <input type="text" name="company"  id="company" value="" class="company" placeholder="Company name">
    			<input type="hidden" name="companyname" id="companyname" value="<?php echo $companyname; ?>">
    		</div>
    		<div class="headimage">
    			<p>New Header Image</p>
				<input type="file" name="header" id="header" value="" class="form-control" accept=".jpg, .jpeg, .gif, .png">
    		</div> <br><br>
    		  <input type="submit" name="update" id="update" value="Update Portfolio" class="btn" onclick="submit();">   
    	</form>
    </section>

    <section class="addimages">    <h1>add image </h1>
    <form class="box" method="POST" action="edit.php" autocomplete="off" enctype="multipart/form-data" id="form_image">
            <div class="galleryimage">
                
                
                <input type="hidden" id="companyname" name="companyname" value="<?php echo $companyname; ?>">
                <input type="file" id="image" name="image[]" value="" class="image" multiple accept=".jpg, .jpeg, .gif, .png" ><br><br>
                <input type="submit" name="images" id="images" value="Add Images" class="btn">
            </div>
      </form>
          </section>
    </div>

    <center><h1>Delete Image</h1></center>

    <form method="POST" id="deleteform" >

            <input type="hidden" name="companyname" value="<?php echo $companyname; ?>"/>
            <div class="container">
            <p class="active" id="error"></p>
            </div>
    	    <center>
               <div class="gallery">
                <?php deletefetch($companyname); ?>
               </div> 
               <input type="submit" name="delete" value="Delete Images" class="deleteimages" onclick='return confirmdelete();'/><br><br>
            </center>
        </form>



 






    <script>
    function confirmdelete()
    {
        var checkbox = document.getElementById("check");
        var error = document.getElementById("error");
        var checked = 0;
       
        for (var i = 0; i < check.length; i++)
        {
            if (check[i].checked)
            {
                checked++;
            }
        }
        
        

        if (checked > 0)
        {
            return confirm("Are you sure you want to delete");
        }
        else
        {   
            error.className = 'alert';
            document.getElementById("error").innerHTML = "Kindly select an element to delete!";
            return false;
        }
    }
</script>
    
</body>
</html>


    

