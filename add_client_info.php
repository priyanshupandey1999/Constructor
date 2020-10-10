



<?php

//variable used for login user
$email = "";
$password1 = "";
$results = "";
$errors = array();

//variable used for uploading images
$company_name = "";
$headimage = "";
$imagename="";

/*-----------------------------------code for adding a portfolio start here--------------------------------------------*/
if (isset($_POST['insert'])) 
{  
   require_once ('errors.php');

  //taking values from form
  
  $company_name = $_POST['company_name'];
    $headimage = $_FILES['headimage']['name'];
    $head_image = $_FILES['headimage']['tmp_name'];

    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    

    if (empty($company_name)) { array_push($errors, "Company name is required");}
    if (empty($headimage)) { array_push($errors, "Thumbnail image is required");}
    //if (empty($head_image)) { array_push($errors, "Thumbnail image is required");}
    if (empty($imageTmpName)) { array_push($errors, "Images for gallery is required");}
    //if (empty($imageName)) { array_push($errors, "Images for gallery is required");}


    if (count($errors) == 0)
    {
      $resultg = company($company_name, $headimage, $head_image);

      //loop for the multiple images for gallery
      foreach ($_FILES['image']['tmp_name'] as $key => $image)
      {
        $imageName = $_FILES['image']['name'][$key];
        $imageTmpName = $_FILES['image']['tmp_name'][$key];
        upload($company_name, $headimage, $imageName, $imageTmpName);
      }
      
    //   header('location: menu.php');
    }
    
  
  
}
?>

<?php

/*---------------------------------------------function for headimge upload------------------------------------------------------*/
function company($company_name, $headimage, $head_image)
{
  //initalizing variable
  $directory = "images/";

  include ('dbconnect.php');
  
  //inbuit function used to move uploded file to directory
  $result = move_uploaded_file($head_image, $directory.$headimage);

  if ($result)
  {
    //query to insert company name and headimage
    $query = "INSERT INTO  company (companyname, headimage) 
          VALUES('$company_name', '$headimage')";
          mysqli_query($conn, $query);
  }
}
/*----------------------------------------------end of function upload headimage to folder----------------------------------------*/ 

/*------------------------------function for upload images into folder and their names into database-------------------------------*/


function upload($company_name, $headimage, $imageName, $imageTmpName)
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
          VALUES('$imageName',(SELECT id FROM company WHERE companyname = '$company_name'))";
          mysqli_query($conn, $query);
    }
}
/*--------------------------------------end of function for uploading images in folder----------------------------------------*/
?>



    <!--------------------------------code for uploading images starts here-------------------------------->
	<script>
		function validate()
		{
		    var cname = document.getElementById("company_name").value;
		    var himage = document.getElementById("headimage").value;
		    var galliamge = document.getElementById("image").value;
		    var error = document.getElementById("error");
		    


		    if (cname == null || himage == null || galliamge == null)
		    {
               error.className = 'alert alert-danger';
               document.getElementById("error").innerHTML = "Please fill all the values";
               return false; 
			}
		    else
		    {
		    	return true;
		    }
		}
    </script>


    <div class="client_info_add_form">
        <form method="POST" autocomplete="off" enctype="multipart/form-data" id="form_image">
            <center>
                <p class="active" id="error"></p>

                    <div class="companyname">
                        <p>Company Info</p>
                        <input type="text" name="company_name"  id="company_name" value="" class="company_name" placeholder="Company name" required>
                    </div>
                <div class="addclientinfo">
                    <div class="headimage">
                        <p>Header Image</p>
                        <input type="file" name="headimage" id="headimage" value="" class="form-control" accept=".jpg, .jpeg, .gif, .png" required>
                    </div>

                    
                    <div class="galleryimage">
                        <p>Images for the Gallery here</p>
                   
                        <div class="form-group files">
                       
                            <input type="file" id="image" name="image[]" value="" class="image" multiple accept=".jpg, .jpeg, .gif, .png" required><br><br>
                            
                        </div>
                    </div>
                </div>
                <input type="submit" name="insert" id="insert" value="Save" class="btn btn-primary" onclick="return validate();">
            </form>
    </div>

	
    <!----------------------------------------uploding code ends here----------------------------------------------->
