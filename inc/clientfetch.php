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
/*-----------------------------------code to fetch company for portfolio-------------------------------*/
  function homefetch()
  {

  //initalizing variable
  $output = "";
  $companyname = "";
  $headimage = "";
  

  //query to get company name and headimage
  $query = "SELECT * FROM company";
  
  //function to fetch query results in array
  $result = fetchfunction($query);

  $output = '';

  while( $row = $result->fetch_assoc())
    {
      
      $output  .= '      <div class="client-card">
      <a href="gallery.php?companyname='.$row["companyname"].'"><div class="client-card-image">
                        
                        <img src="images/'.$row["headimage"].'" " >
                        <p>
                        <div class="client-name" value="<?php echo $companyname; ?>" name="companyname">'.$row["companyname"].'</div></p>
                        </div></a>
                        </div>
                        
                    ';
    }
  

  echo $output;
}

?>