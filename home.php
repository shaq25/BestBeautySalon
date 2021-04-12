<?php

  session_start();

  if ($_SESSION['adminlogin']!="yes")
  {
  header("Location:index.php");

  }


?>

<!doctype html>

<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/banner/curl.png" type="image/png">
	<title>The Best Beauty Salon</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
  <style>
 p
    {
         font-weight:;
         color: black;
         font-size: 15px

    }
  	h1,h2{

  		color:Purple;
  	}
img{
  border: ;
}

  img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
	</style>
</head>

<body >

	<!--================ Start Header Menu Area =================-->
	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
			<img src="img/h.png" alt="">
			</div>
		</div>

    <div class="nav-wraper">
      <div class="navbar">
        <ul class="navbar-nav" >
          <li class="nav-item"><a class="nav-link" href="home.php"><img src="img/banner/curl.png"style="width:50px;150px;" alt=""> home</a></li>



          <li class="nav-item" ><a class="nav-link" href="Client.php"><img src="img/banner/p.png"style="width:50px;150px;" alt="">Clients</a></li>
          <li class="nav-item"><a class="nav-link" href="Service.php"><img src="img/banner/comb.png"style="width:50px;150px;" alt="">Service</a></li>
          <li class="nav-item"><a class="nav-link" href="Appointment.php"><img src="img/banner/70.png"style="width:50px;150px;" alt="">Appointment</a></li>
          <li class="nav-item"><a class="nav-link" href="invoice.php"><img src="img/banner/bill.png"style="width:50px;150px;" alt="">Invoice</a></li>
          		<li class="nav-item"><a class="nav-link" href="logout.php"><img src="img/banner/log.png"style="width:50px;150px;"alt="">Logout</a></li>
          </ul>
      </div>
    </div>



	</header>

	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area" >
			<div class="banner_inner" style="background-image:url(img/banner/1.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; " >
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom align-items-center justify-content-center">
			<div class="col-lg-4">
				<div class="video-popup d-flex align-items-center">
					<a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=O0eUf-11crM" data-animate="zoomIn"
					 data-duration="1.5s" data-delay="0.1s">
						<span><img src="img/banner/play-icon.png" alt=""></span>
					</a>
					<div class="watch">
						<h6>Watch video</h6>
						<p style="color:white; font-weight: bold;">You will love our execution</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-8 col-md-12">
							<p class="top-text"></p>
							<h1> Welcome To The </h1>
              <h1>Best Beauty Salon</h1> <h2>
              <?php
                    echo " ".$_SESSION['User'];
               ?>
               <br>
               <br>
              <br>

             </h2>




						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start Breakfast Area =================-->
		<div class="breakfast-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-5">
						<div class="left-content" style="background-color:">
							<h1  style="color:purple;"> Beauty lies within the Soul</h1>
							<p>May the stars carry your sadness away, may the flowers fill your heart with beauty, may The Best Beauty Salon
                forever wipe away your tears.
							</p>


						</div>
					</div>
					<div class="col-lg-6 offset-lg-1">
						<div class="right-img">
								<img class="img1 img-fluid" src="img/banner/new10.jpg" alt="">
							<img class="img2 img-fluid" src="img/food/.jpg" alt="" >
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================ End Breakfast Area =================-->

		<!--================ Start Lunch Area =================-->
    <div class="breakfast-area lunch-area section_gap">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 ">
            <div class="right-img">
              <img class="img1 img-fluid" src="img/banner/new1.jpg" alt="">

            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="left-content">
              <h1 style="color: purple">About US </h1>
                <p style="">At Best Beauty Salon out vision is to be the priemier salon and employer of choice in the industry by providing out customers with suprior service, highly trained staff &the highest quality of products.   </p>

            </div>
          </div>
        </div>
      </div>
    </div>
		<!--================ End Lunch Area =================-->






		<!--================ Start Food Gallery Area =================-->
    <section class="section_gap_top food-gallery-area">
      <div class="container-fluid no-padding">
        <div class="row owl-carousel active-food-gallery">
          <!-- single gallery item -->

          <!-- single gallery item -->

          <!-- single gallery item -->
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img5.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img9.gif" alt="" style="width:400px;height:405px;">
          </div>

          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img6.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/curl.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img8.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img4.gif" alt="" style="width:400px;height:405px;">
          </div>


          <div class="single-gallery-item">
            <img class="img-fluid" src="img/img10.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/nails.gif" alt="" style="width:400px;height:405px;">
          </div>


          <div class="single-gallery-item">
            <img class="img-fluid" src="img/nails4.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/nails5.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/man.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/man3.gif" alt="" style="width:400px;height:405px;">
          </div>
          <div class="single-gallery-item">
            <img class="img-fluid" src="img/man4.gif" alt="" style="width:400px;height:405px;">
          </div>
          <!-- single gallery item -->
          <!-- single gallery item -->



          <!-- single gallery item -->



        </div>
      </div>
    </section>
		<!--================ End Food Gallery Area =================-->


		<!--================ Start Footer Area =================-->
    <footer class="footer-area overlay" style="background-image:url(images/1.jpg); ">
      <div class="container">
        <div class="row"  >
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-footer-widget">
              <h6>Contact</h6>
              <div class="row">
                <div class="col">
                  <ul class="list">
                    <li><a href="#">TelePhone Number : (246)427-5348</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-footer-widget">


              <h6>Address</h6>
              <div class="row">
                <div class="col">
                  <ul class="list">
                    <li><a href="#">Haggatt Hall St.Michael Barbados</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-footer-widget">


            </div>
          </div>

        </div>
        <div class="row footer-bottom justify-content-between">
          <div class="col-lg-6">
            <p class="footer-text m-0" style="font-weight:bold; color:white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> Edited by <i class="fa fa-heart-o" aria-hidden="true"></i> Shaqueal Carroll <i class="fa fa-heart-o" aria-hidden="true"></i>
      Jia Rice <i class="fa fa-heart-o" aria-hidden="true"></i> Shanika Wilkinson </i> </p>
        </p>
              </div>
          <div class="col-lg-2">
            <div class="social-icons">
                            <a href="https://www.instagram.com/best_beauty_salon/"><img src="img/banner/instagram.png"style="width:50px;150px;" alt=""></a>
            </div>
          </div>
        </div>

      </div>
    </footer>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
