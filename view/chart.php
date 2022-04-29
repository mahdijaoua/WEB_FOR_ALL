<?php 
session_start();
include ('../Controller/login.php');
$user_data = check_login();
include('../controller/panierC.php');
include('../controller/commandC.php');
$article = new panierC ;
$article->delete();
$article->update();
$prods=$article->read($user_data['idUtilisateur']);
$c = new commandC;
$c->add();
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area custom_page-height">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
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
                <a class="nav-link" href="shop.php"> Shop </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="company.html"> Company </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="chart.php">Chart</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
              Transportz
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+71) 258964785
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    transportz@gmail.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
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
                        <a class="nav-link" href="shop.php"> Shop </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="company.html"> Company </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="chart.php">Chart</a>
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

  </div>





  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
        Shopping chart
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6">
          <div class="w-100 h-100">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produit</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Qte</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
              <?php $val="";$total=0; foreach ($prods as $product) : ?>
                <tr>
                  <th><?= $product['id']?></th>
                  <td><?= $product['nom_prod']?></td>
                  <td><?= $product['prix']?></td>
                  <?php
                  if(isset($_GET['update'])||isset($_GET['done'])){
                    echo '<form action="chart.php?done" method="post">';
                    echo '<td> <input style=width:50px type="text" value="' ;echo $product['qte'];echo '" name="qte"> <button type="submit">ok</button> <input type="text" name="id" hidden value="';echo $product['id'] ;echo '" > </form> </td>"';
                  }else{
                    echo '<td>'; echo $product['qte'];echo'</td>';
                  }
                 ?>
                  <td>
                  <?php  $val=$val.$product['nom_prod'].'('.$product['qte'].')'.',';
                         $total+=$product['prix']*$product['qte'];
                  ?>
                  <a href="chart.php?delete=<?=$product['id']?>">del</a>
                  /
                  <a href="chart.php?update">up</a>
                  </td>
                </tr>
              <?php endforeach ?>
              </tbody>
              <tfoot>
                <th>Prix total</th>
                <td colspan="2"><?=$total?>$</td>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="col-md-6">
          <div class="contact_form-container">
            <form action="chart.php?checkout" id="checkout" method="POST">
              <div>
                <input type="text" placeholder="Your Name" id="nom" name="nom">
                <span id="nameer"></span>
              </div>
              <div>
                <input type="text" placeholder="Your Phone" id="phone" name="phone">
                <span id="teler"></span>
              </div>
              <div>
                <input type="text" class="message_input" id="adresse" name="adresse" placeholder="adresse">
                <span id="adder"></span>
              </div>
              <input type="text" name="element" value="<?=$val?>" hidden>
              <input type="number" name="prix" value="<?=$total?>" hidden>
              <div class="d-flex justify-content-end">
                <button type="submit " class="">
                  checkout
                </button>
              </div>
            </form>
            <script>
						let myform =document.getElementById('checkout');
						myform.addEventListener('submit',function(e){
							let nameinput = document.getElementById('nom');
							let tel = document.getElementById('phone');
							let adresse = document.getElementById('adresse');
							const regex = /^[a-zA-Z-\s]+$/;
							if(nameinput.value === '' ){
								let nameer = document.getElementById('nameer');
								nameer.innerHTML="le champs nom est vide . ";
								nameer.style.color ='red';
								e.preventDefault();
							}else if (!(regex.test(nameinput.value))){
								let nameer = document.getElementById('nameer');
								nameer.innerHTML = "le nom doit comporter des lettres,et tirets seulements.";
								nameer.style.color='red';
								e.preventDefault();
							}
							if(tel.value === '' ){
								let teler = document.getElementById('teler');
								teler.innerHTML="le champs telephone est vide . ";
								teler.style.color ='red';
								e.preventDefault();
							}else if (!(/^[1-9]+$/.test(tel.value))){
								let teler = document.getElementById('teler');
								teler.innerHTML = "le tel doit comporter que des numero";
								teler.style.color='red';
								e.preventDefault();
							}
							if(adresse.value === '' ){
								let suber = document.getElementById('adder');
								suber.innerHTML="le champs adresse est vide . ";
								suber.style.color ='red';
								e.preventDefault();
							}
						});
					</script>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="images/logo-white.png" alt="">
            <span>
              Transportz
            </span>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedconsectetur
          </p>
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/g-plus.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 info_address">
          <h5>
            Address
          </h5>
          <p>
            Healing Center, 176 W Street name,
            New York, NY 10014, US
          </p>
          <p>
            (+71) 8522369417
          </p>
          <p>
            (+71) 8522369417
          </p>
          <p>
            <a href="">
              transportz@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                  <a href="index.html"> Home</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="service.html"> Service</a>
                </li>
                <li>
                  <a href="shop.php"> Shop</a>
                </li>
                <li>
                  <a href="company.html"> Company</a>
                </li>
                <li>
                  <a href="chart.php">Contact us</a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
            Newsletter
          </h5>
          <form action="">
            <div>
              <input type="text" placeholder="Your Name">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


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