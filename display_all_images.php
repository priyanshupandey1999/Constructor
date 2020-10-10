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
                      
                      <div class="client-name" value="<?php echo $companyname; ?>" name="companyname">'.$row["companyname"].'</div>
                      </div></a>
                      </div>
                      
                  ';
  }


echo $output;
}




/*-------------------------------------function to fetch gallery images -------------------------------------------*/
function fetch_all_images()
{   

  //query to images of entered company
  $query = "SELECT images FROM images";

  //function to fetch query results in array
  $result = fetchfunction($query);

  $output = '<div class="companyimagesgrid">';

  while( $row = $result->fetch_assoc())
  {
    $output  .= '<div class="companyimages">
                        
                            <img class="img-fluid image scale-on-hover" src="images/'.$row["images"].'">

                    </div>';
  }
  echo $output;
}
/*-----------------------------------end of function of gallery images------------------------------------------*/


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="slick/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <script type="text/javascript" src="slick/slick.js"></script>
</head>
<body>
    <?php include 'inc/navbar.php' ?>


    <section class="new-section">
    <div class="heading">Our Client<div class="voilet-line"></div></div>
    <div class="client">


        <?php homefetch(); ?>


    </div>
    </section>




    <section class="new-section">
    <div class="heading">Our Client<div class="voilet-line"></div></div>

    <?php fetch_all_images(); ?>

    </section>





    
    <?php include 'inc/footer.php' ?>

<script>
  let scrollpos = window.scrollY
  const header = document.querySelector(".complete_navbar")
  const header_height = header.offsetHeight


  const add_class_on_scroll = () => header.classList.add("fade-in")
  const remove_class_on_scroll = () => header.classList.remove("fade-in")


  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    console.log(scrollpos)
  })

</script>


<script type="text/javascript">

$('.client').slick({
dots: false,
autoplay:true,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 4,
arrow: true,
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
</script>




<script src="js/navbar.js"></script>



</body>
</html>