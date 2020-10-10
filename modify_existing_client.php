<?php





/*------------------------------------------------function to update company name----------------------------------------------*/
function updatecompany($companyname, $company)
{
   //connecting to database
   include ('dbconnect.php');

   //query to update companyname
   $query = "UPDATE company SET companyname = '$company' WHERE id = (SELECT id FROM company WHERE companyname = '$companyname')";
   mysqli_query($conn, $query);
}
/*---------------------------------------------end of function to update company name--------------------------------------------*/

/*--------------------------------------------------start of function to update headimage-----------------------------------------*/
function updateheader($header, $header_tmp, $companyname)
{
   //connecting to database
  include ('dbconnect.php');

  //initailazing the variable
  $directory = "images/";
  
  //inbuilt function to move uploaded images to the dirctory
  $result = move_uploaded_file($header_tmp, $directory.$header);

  if ($result)
  {
    $query = "UPDATE company SET headimage ='$header' WHERE id = (SELECT id FROM company WHERE companyname = '$companyname')";
    mysqli_query($conn, $query);
  }
}
/*--------------------------------------------end of function of updating header images--------------------------------------*/
if (isset($_POST['update']))
{
  $company = $_POST['company'];
  $header = $_FILES['header']['name'];
  $header_tmp = $_FILES['header']['tmp_name'];
  $companyname = $_POST['companyname'];

  if(!empty($company))
  {
    updatecompany($companyname, $company);
  }

  if(!empty($header))
  {
    updateheader($header, $header_tmp, $companyname);
  }

  // header('location: edit.php?companyname='.$companyname);

}
?>
<script>

function confirmportfolio()
    {
    	var portfoliocheck = document.getElementById("portfoliochk");
        var porterror = document.getElementById("porterror");
        var portcount = 0;
        
        for (var i = 0; i < portfoliochk.length; i++)
        {
            if (portfoliochk[i].checked)
            {
                portcount++;
            }
        }
        
        

        if (portcount > 0)
        {
            return confirm("Are you sure you want to delete selected portfolio(s)");
        }
        else
        {   
            porterror.className = 'alert alert-danger';
            document.getElementById("porterror").innerHTML = "Kindly select a portfolio to be deleted!";
            return false;
        }
    }

</script>

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

/*--------------------------------------------Function to deleteportfolio ---------------------------------------------------*/
function deleteportfolio($portfolio)
{
  include ('dbconnect.php');

  $query1 = "SELECT * FROM company WHERE id IN($portfolio)";

  $result = fetchfunction($query1);
  while($row = $result->fetch_assoc())
  {
    unlink("images/".$row["headimage"]);
  }

  $query = "DELETE FROM company WHERE id IN($portfolio)";

  mysqli_query($conn, $query);
}
/*-------------------------------------Delete images after portfolio is deleted----------------------------------------------*/
function deleteportfolio_images($portfolio)
{
  //connecting to database
  include ('dbconnect.php');

  //part for deleting images from folder
  $query1 = "SELECT * FROM images WHERE companyid IN ($portfolio)";
  
  //function call to fetcharray
  $result = fetchfunction($query1);
  while( $row = $result->fetch_assoc())
  {
    unlink("images/".$row["images"]);
  }

  //query to delete images from database
  $query = "DELETE FROM images WHERE companyid IN($portfolio)";

  //executing query
  mysqli_query($conn, $query);
}


/*---------------------------------------Delete Portfolio section starts here----------------------------------------*/
if (isset($_POST["deleteportfolio"]))
{
  $portfolio_chk = $_POST["portfolio_check"];
  $portfolio = implode(",",$portfolio_chk);

  $query = "SELECT id FROM images WHERE companyid IN($portfolio)";

  

  
  deleteportfolio_images($portfolio);

  deleteportfolio($portfolio);

  header('location: admin_control.php');
}


?>


<?php
/*-----------------------------------Function for fetching image and companyname for portfolio section-------------------------*/


    function portfolio()
    {  
    
      //query to fetch companyname and headimge
      $query = "SELECT * FROM company ORDER BY id DESC";
    
    
      $result = fetchfunction($query);
    
      $output = '<div class="row">';
    
      if(mysqli_num_rows($result)==0)
      {
          $output .= '<tr>
                      <td colspan=3>No Companies found</td>
                      </tr>';
      }
      else
      {
      while( $row = $result->fetch_assoc())
      {
        $output .= '<tr>
                    <td> <img src="images/'.$row["headimage"].'" class="img-thumbnail" style="width:125px;" >  <p>  '.$row["companyname"].'  </p>
                    </td>
                    
                    <td >
                         <a href="edit.php?companyname='.$row["companyname"].'">Edit</a>
                         
                    </td>
                    <td>
                    <input type="checkbox" name="portfolio_check[]" value="'.$row["id"].'" id="portfoliochk"/></td>
    
                    </tr>';
      }
    }
      echo $output;
      
    
    }
    /*----------------------------------end of function to fetch portfolio table for admin-----------------------------*/

    ?>


    <center>
        	<div class="container">
                <p class="active" id="porterror"></p>
	        	<table class="table table-bordered">
                     <form method="POST" action="admin_control.php" class="form user">
	        		<thead class="thead-dark">
		        		<tr>
		        			<th>Company Info</th>
		        			
		        			<th>Edit Company Portfolio</th>

		        			<th><input type="submit" name="deleteportfolio" value="Delete Portfolio" class="btn btn-danger" onclick="return confirmportfolio();"/></th>
		        		</tr>
		            </thead>
	        	    
                    <tbody>
		        		<?php portfolio(); ?>
		        	</tbody>
                    </form>
        	    </table>
            </div>
        </center>


		
	</section>