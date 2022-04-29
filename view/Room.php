<?php 

include_once '../config.php';
// include 'Controller/servicec.php';
//include'Controller/produitc.php';

  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM produit');
  $recipesStatement->execute();
  $prod=$recipesStatement->fetchall();


  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM categorie');
  $recipesStatement->execute();
  $liste=$recipesStatement->fetchall();
  

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Transportz</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../asset/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../asset/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="../asset/images/logo.png" alt="">
              <span>
                Transportz
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html"> Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Room.php"> Shop </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="company.html"> Company </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="mail.php">Contact us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="../asset/images/logo.png" alt="">
            <span>
              Transportz
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="../asset/images/phone.png" alt="" />
                  </div>
                  <span>
                    (+71) 258964785
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="../asset/images/mail.png" alt="" />
                  </div>
                  <span>
                    transportz@gmail.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="../asset/images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="../asset/images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="../asset/images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="../asset/images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html"> Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shop.html"> Shop </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="company.html"> Company </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="mail.php">Contact us</a>
                      </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="">
                          <div class="search_input">
                            <input type="text">
                            <img src="../asset/images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1>
                          Unbeatable <br>
                          trucking & Transport <br>
                          Services
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="" class="read-btn">

                              <span>
                                Read More
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="" class="quote-btn">

                              <span>
                                Get A Quote
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="../asset/images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="">
                          <div class="search_input">
                            <input type="text">
                            <img src="../asset/images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1>
                          Unbeatable <br>
                          trucking & Transport <br>
                          Services
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="" class="read-btn">

                              <span>
                                Read More
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="" class="quote-btn">

                              <span>
                                Get A Quote
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="../asset/images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="">
                          <div class="search_input">
                            <input type="text">
                            <img src="../asset/images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1>
                          Unbeatable <br>
                          trucking & Transport <br>
                          Services
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="" class="read-btn">

                              <span>
                                Read More
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="" class="quote-btn">

                              <span>
                                Get A Quote
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">

                      <img src="../asset/images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="">
                          <div class="search_input">
                            <input type="text">
                            <img src="../asset/images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1>
                          Unbeatable <br>
                          trucking & Transport <br>
                          Services
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="" class="read-btn">

                              <span>
                                Read More
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="" class="quote-btn">

                              <span>
                                Get A Quote
                              </span>
                              <img src="../asset/images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="../asset/images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>


    </section>

    <!-- end slider section -->
  </div>

  <!-- about section -->



        <!-- Hero End -->
        <!--? Our Cases Start -->
  


  <section class="service_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2 class="heading_style">
          Nos Produit
        </h2>
      </div>
      <div class="row layout_padding2-top">
     
      <div class="col-lg-5 col-md-5 all des">
      <?php  foreach ($prod as $res) { ?>
     
      
          <div class="service_img-box s-b-1">
          <a href=""><?php echo"<img src='uploads/".$res['image']."'>" ?></a>
            <div class="d-flex">
              <h3>
           <?php echo $res['couleur'] ?>

              </h3>
            </div>
          </div>
          <div class="service-detail">
            <p>
            <?php echo $res['kilometrage'] ?>
            </p>
            <div class="d-flex justify-content-end">
              <a href="" class="service-btn">
              <?php echo $res['matricule'] ?>
              </a>
            </div>
            </div>

          <?php } ?>
        </div>
     
      
     
     
     
      
      
      </div>
    </div>
  </section>
  <!-- end service section -->


  <!-- shop section -->
  <section class="shop_section">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2 class="heading_style">
          Our Shop
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center h-100">
            <div class="shop-detail">
              <h5>
                Everything You Need
              </h5>
              <p>
                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shop_img-box">
            <img src="images/gift.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>



























































  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="../asset/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../asset/js/bootstrap.js"></script>


  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>