<?php include 'inc/PortfolioImageUpdate.php';?>
<?php include 'inc/clientfetch.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Constructor - Construction and Design</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <script type="text/javascript" src="slick/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <script type="text/javascript" src="slick/slick.js"></script>
    <style>
        #portfolio-image1{
    background-image: url('<?php echo $portfolio[0];?>');
  }
  #portfolio-image2{
    background-image: url('<?php echo $portfolio[1];?>');
  }
  #portfolio-image3{
    background-image: url('<?php echo $portfolio[2];?>');
  }
  #portfolio-image4{
    background-image: url('<?php echo $portfolio[3];?>');
  }
  #portfolio-image5{
    background-image: url('<?php echo $portfolio[4];?>');
  }
  #portfolio-image6{
    background-image: url('<?php echo $portfolio[5];?>');
  }
  #portfolio-image7{
    background-image: url('<?php echo $portfolio[6];?>');
  }
  #portfolio-image8{
    background-image: url('<?php echo $portfolio[7];?>');
  }
    </style>
</head>
<body>
    <header>
        <?php include 'inc/navbar.php' ?>
        <div class="header-text1">Best Design</div>
        <div class="header-text2">Our Design group is best and you can also create a place from where you won't want to go away!!</div>
    </header>

    <section class="new-section">
      <div class="vertical-line"></div>
      <div class="heading"><pre>  Architecture  Reintroduced</pre></div>
      <div class="vertical-line"></div>
      <div class="architecture-reintroduced-flex">
        <div class="reintroduced-flex">
          <div class="reintroduced-image1"></div>
          <div class="rectangle-flex">
          <div class="reintroduced-text">
            <div class="reintroduced-text1">
              Work is important 
            </div>
            <div class="reintroduced-text1">
              So is your surrounding.
            </div>
            <div class="reintroduced-text2">
              We create a surrounding in which you want to work!
            </div>
            <div class="reintroduced-text3">
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="reintroduced-button"><a href="display_all_images.php">View Project</a></div>
          </div>
          <div class="rectangle-flex-box"></div>

        </div>
          </div>


        <div class="reintroduced-flex">
          <div class="rectangle-flex">
                      <div class="rectangle-flex-box2"></div>
                      <div class="reintroduced-text-down">
            <div class="reintroduced-text1">
              Work is important 
            </div>
            <div class="reintroduced-text1">
              So is your surrounding.
            </div>
            <div class="reintroduced-text2">
              We create a surrounding in which you want to work!
            </div>
            <div class="reintroduced-text3">
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="reintroduced-button"><a href="display_all_images.php">View Project</a></div>
          </div>
          </div>

          <div class="reintroduced-image2"></div>
        </div>


      </div>
    </section>

    <section class="new-section" id="service">
      <div class="heading">Our Services <div class="voilet-line"></div></div>
      <div class="services">
        <div class="service-card">
          <div class="service-card-image"><img src="images/capture.png" alt="Interior Design"></div>
          <div class="service-name">Consultation</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
        <div class="service-card">
          <div class="service-card-image"><img src="images/capture2.png" alt="Interior Design"></div>
          <div class="service-name">Interior</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
        <div class="service-card">
          <div class="service-card-image"><img src="images/capture3.png" alt="Interior Design"></div>
          <div class="service-name">Exterior</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
        <div class="service-card">
          <div class="service-card-image"><img src="images/Capture4.png" alt="Exterior Design"></div>
          <div class="service-name">Timely progress 
            reporting</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
        <div class="service-card">
          <div class="service-card-image"><img src="images/capture6.png" alt="Exterior Design"></div>
          <div class="service-name">Architectural 
            Designing</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
        <div class="service-card">
          <div class="service-card-image"><img src="images/capture5.png" alt="Exterior Design"></div>
          <div class="service-name">Managing Build 
            Services</div>
          <div class="service-text">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit,</div>
        </div>
      </div>
    </section>


    <section class="new-section">
      <div class="thoughts-become-reality">
        <div class="thoughts-left-text">
          <div class="thoughts-left-text1">MAKING A COMPANY FUNCTIONAL</div>
          <div class="thoughts-left-text2">Thoughts becomes reality</div>
          <div class="thoughts-left-text3">We don't believe in moving to a new place to 
            make surroundings better, Let's change the surroundings.</div>
          <div class="thoughts-left-text4">Bringing Excellence</div>
        </div>
        <div class="thoughts-right-text">
          <ul>
            <li>Think blueprints <div class="blue-underline"></div></li>
            <li>Furniture Placing <div class="blue-underline"></div></li>
            <li>Plants are important <div class="blue-underline"></div></li>
          </ul>
        </div>
      </div>
    </section>


    <section class="new-section">
        <div class="heading2">[ Our Portfolio ]</div>
          <div class="heading">Introducing our Projects <div class="voilet-line"></div></div>
        <div class="wrap1">
          <div class="all_cards">
            <div class="flex1">
              <div class="card1" id="portfolio-image1"></div>
              <div class="card1" id="portfolio-image2"></div>
            </div>
            <div class="flex1">
              <div class="card1" id="portfolio-image3"> </div>
              <div class="card1" id="portfolio-image4"> </div>
            </div>
          </div>
        </div>
        <div class="wrap1">
          <div class="all_cards">
            <div class="flex1">
              <div class="card1" id="portfolio-image5"></div>
              <div class="card1" id="portfolio-image6"> </div>
            </div>
            <div class="flex1">
              <div class="card1" id="portfolio-image7"></div>
              <div class="card1" id="portfolio-image8"></div>
            </div>
          </div>
        </div>

        <div class="portfolio-flex">
          <div class="vr-line"></div>
          <div class="portfolio-button"><a href="display_all_images.php">All Project </a></div>
          <div class="hr-line"></div>
        </div>

    </section>

    <section class="new-section">
    <div class="heading">Our Client<div class="voilet-line"></div></div>
    <div class="client">


        <?php homefetch(); ?>


    </div>
    </section>


    <section class="new-section">
      <div class="heading">About Us <div class="voilet-line"></div></div>
      <div class="about-cards">
        <div class="about-card1">
          <div class="about-text1">Constructor is a highly rated corporate   interior design firm</div>
          <div class="about-text2">We are a team of professional, energetic individuals with talented designers and experienced managers available to guide our client's through the flawless and timely execution of any corporate design project. We understand each project we begin has specific needs, budgets, and a level of quality with the work involved.</div>
        </div>
        <div class="about-card2">

        </div>
        <div class="about-card3">

      </div>
    </section>

    <section class="new-section" id="team-section">
    <div class="heading">Team <div class="voilet-line"></div></div>
      <div class="team">
        <div class="team-member">
          <div class="team-card">
            <img src="images/team-3.jpg" alt="Rahul Kamble">
          </div>
          <div class="team-name">James Michigan</div>
          <div class="team-post">Director</div>
        </div>
        <div class="team-member">
          <div class="team-card">
            <img src="images/team-2.jpg" alt="Praveen Bane">
          </div>
          <div class="team-name">Camilla Watson</div>
          <div class="team-post">Project Head</div>
        </div>
      </div>
    </section>

    <section class="new-section" id="crafts">
      <div class="craftsmanship">
        <div class="good-craftsmanship">
        <div class="craft-rectangle"></div>
          <div class="good-craftsmanship-heading">Good Craftsmanship</div>
          <div class="good-craftsmanship-text">Our designers successfully participate in projects from the initial concepts, furniture and decorative item selections, decorative material selections, budgeting, complainces and project coordination with professionalism, attention to detail, exceptional customer service and expert project management skills.</div>
        </div>    
        <div class="craft-block">
          <div class="craftsmanship-cards">
            <div class="craftsmanship-card">
              <img src="images/capturew.png" alt="">
              <div class="craft-card-heading">Customer Focus</div>
              <div class="craft-card-text">Customers choose us for the simplicity of communication and an understanding of what it’s necessary to receive in the end.</div>
            </div>
            <div class="craftsmanship-card">
              <img src="images/capturey.png" alt="">
              <div class="craft-card-heading">Multi Experience</div>
              <div class="craft-card-text">We provide a wide range of services, we work in different styles, we project commercial and residential properties.</div>
            </div>
          </div>
          <div class="craftsmanship-cards">
            <div class="craftsmanship-card">
              <img src="images/capturex.png" alt="">
              <div class="craft-card-heading">Professionalism</div>
              <div class="craft-card-text">We develop a full cycle of project documentation: an outline sketch, a design project, working documentation.</div>
            </div>
            <div class="craftsmanship-card">
              <img src="images/capturez.png" alt="">
              <div class="craft-card-heading">Author`s Supervision</div>
              <div class="craft-card-text">We develop an attractive and convenient space for work and leisure time, working on units, selecting materials, manufacturers.</div>
            </div>
        </div>   
        </div>


        </div>
      </div>
    </section>


    <section class="new-section" id="contact">
    <div class="heading">Contact Us <div class="voilet-line"></div></div>

        <?php include 'message.php' ?>

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
  autoplay:false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrow: true,
  responsive: [
    {
      breakpoint: 1204,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
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