<?php
session_start();

if ($_SESSION['adminlogin']!="yes")
{
header("Location:index.php");

}
if (isset($_SESSION['delete'])) {
	echo$_SESSION['delete'];
	unset($_SESSION['delete']);
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
	h1,h2{

		color:purple;
	}

	input {
  border: 2px solid currentcolor;
}
input:invalid {
  border: 2px dashed red;
}
input:invalid:focus {
  background-image: linear-gradient(pink, snow);
}
input:focus {
  background-image: linear-gradient(floralwhite, lightpink);
}

input[type=submit] {
  width: 20%;
  background-color:purple;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: gray;
}
input[type=reset] {
  width: 20%;
  background-color: red;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
input[type=reset]:hover {
  background-color: gray;
}

	</style>


</head>

<body id="book-table">





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
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="home.php"><img src="img/banner/curl.png"style="width:50px;150px;" alt=""> home</a></li>



						<li class="nav-item"><a class="nav-link" href="viewInvoice.php"><img src="img/banner/client.png" style="width:50px;150px;"alt="">View Invoice</a></li>
					<li class="nav-item"><a class="nav-link" href="deleteInvoice.php"><img src="img/banner/delete.png" style="width:50px;150px;"alt="">Delete Invoice</a></li>



					</ul>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner" style="background-image:url(img/banner/mb.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; ">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Welcome to </h1>
							 <h2>The Best Beauty Salon Invoice Page</h2>
							 <h2>
							 <?php
							 			echo " ".$_SESSION['User'];
							  ?>
							 </h2>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->



		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top" style="background-image:url(img/banner/edit.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; ">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section" style="background-image:url(images/salon.jpg); background-size:100% 100%;">
							<h1>Invoice</h1>

							<h2>Form</h2>
							<form class="contact-form-area contact-page-form contact-form text-right" action="InvoiceP.php" method="post"
							    onSubmit="return confirm('Do you want to submit your invoce Form ?') " >

								<div class="form-group col-md-12">
              <input type="number" class="form-control" id="name" minlength="1" maxlength="3" name="InvoiceNum" placeholder=" Please Enter Invoice Number eg 01,02,03" onfocus="this.placeholder = ''"
               onblur="this.placeholder = 'Invoice Number 01,02,03'" required=""
							 required placeholder="Enter Name"
									oninvalid="this.setCustomValidity('Enter Invoice Number. 01, 02,03,11,12 Here')"
								oninput="this.setCustomValidity('')">
            </div>

						<div class="form-group col-md-12">
							<h3 style="text-align:left; color:black; font-weight:bold">Please Select a Service</h3>
						  <div class="form-select">
							<select name="Service" class="edit" >
							<option value="#"> Please Select A Service</option>
						<h2>	<option value="Fingerwave">Fingerwave</option> </h2>
							<option value="Scruch">Scruch</option>
							<option value="Wash_treat_plait"> "Wash treat plait</option>
							<option value="Relax">Relaxed</option>
							<option value="Sewins">Sewins</option>
							<option value="Glued_in_weave">Glued in weave</option>
							<option value="hair_coloring"> Hair coloring </option>
							<option value="cut_and_curl">Cut and curl</option>
							<option value="ncontrols"> Natural conrows</option>
							<option value="Flocs">Faux locs</option>
							<option value="Palm_Roll">Palm roll</option>
							<option value="Wash_and_styled_locs">Wash and styled locs</option>
							<option value="boxbraids">Boxbraids</option>
							<option value="Conrow_braids">Conrow braids</option>
							<option value="6plat_back_cornrows">6plat back cornrows</option>
							<option value="sprials"> Sprials</option>
							<option value="Wash_and_plait">Wash and plait</option>
							<option value="Relax_and_treat">"Relax and treat</option>
							<option value="Coffin_style">Coffin style</option>
							<option value="nail_repair">nail repair</option>
							<option value="Oval_style">Oval style</option>
			</select>
</div>
</div>


					<div class="form-group col-md-12">
				<input type="number" class="form-control" id="name" maxlength="5" minlength="2" name="Price" placeholder=" Please Enter A Price eg 145, 705" onfocus="this.placeholder = ''"
				 onblur="this.placeholder = 'Enter a Price eg 200'" required=""
				 required placeholder="Enter Name"
						oninvalid="this.setCustomValidity('Enter Prie  Here . 345, 500')"
					oninput="this.setCustomValidity('')">



			</div>

					<div class="form-group col-md-12">
					<h3 style="text-align:left; color:black; font-weight:bold">Please Select a Payment Method</h3>
					<div class="form-select">
						<select name="PaymentMethod" >
							<option value="#">Select A Payment Method</option>
							<option value="Cash">Cash</option>
							<option value="Cheque">Cheque</option>
							<option value="Card">Card</option>


						</select>
					</div>
				</div>

				<div class="form-group col-md-12">
							<h3 style="text-align:left; color:black; font-weight:bold">Discount</h3>
				<div class="form-select">
					<select name="Discount" >
						<option value="#">Discount</option>
						<option value="Nil">NIL</option>
						<option value="5">5%</option>
						<option value="10">10%</option>
						<option value="15">15%</option>
						<option value="20">20%</option>

					</select>
				</div>
			</div>
 											<input type="Submit" name="Add Invoice" value="Submit" >
										<input type="reset" name="" value="Clear">











							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->
<br>
		<!--================ Start Footer Area =================-->
	  <footer class="footer-area overlay" style="background-image:url(images/1.jpg); ">
			<div class="container">
				<div class="row">
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
										<li><a href="#"> Haggatt Hall St.Michael Barbados</a></li>

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
						<a href="https://www.instagram.com/best_beauty_salon/"><img src="img/banner/instagram.png"style="width:50px;150px;" alt="">	</a>												</div>
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
