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
<title>The Best Beauty Salon Client </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/mystylesheet.css">
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

		color:Purple;
	}

	::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
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
input {
  border: 2px solid currentcolor;
}
input:invalid {
  border: 2px dashed red;
}
input:invalid:focus {
  background-image: linear-gradient(pink, lightgreen);
}
input:focus {
  background-image: linear-gradient(Antiquewhite, pink);
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
input[type=date]:invalid::-webkit-datetime-edit {
    font-weight: bold;

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
	<header class="fixed-menu" >
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



						<li class="nav-item"><a class="nav-link" href="viewClient.php"><img src="img/banner/client.png"style="width:50px;150px;"alt="">View Client</a></li>
							<li class="nav-item"><a class="nav-link" href="UpdateClient2.php"><img src="img/banner/update.png"style="width:50px;150px;"alt="">Update Client</a></li>
					<li class="nav-item"><a class="nav-link" href="deleteClient.php"><img src="img/banner/delete.png"style="width:50px;150px;"alt="">Delete Client</a></li>



					</ul>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main" style="background-color:;">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner" style="background-image:url(img/banner/21.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; ">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center" >
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content" style="background-color:;"  >
					<div class="row d-flex align-items-center" >
						<div class="col-lg-7 col-md-12">
							<h1>Welcome to </h1>

							 <h2>The Best Beauty Salon Clients Page</h2>
							<ins> <h2>
							 <?php
							 			echo " ".$_SESSION['User'];
							  ?>
							 </h2></ins>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top"  style="background-image:url(img/banner/edit.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; ">
			<div class="container" >
				<div class="row align-items-center justify-content-center"  >
					<div class="col-lg-6 offset-lg-6" style="background-color:;">
						<div class="contact-form-section" style="background-image:url(images/salon.jpg); background-size: 100% 100%;">
							<h2>Clients</h2>

							<h2>Form</h2>
							<form class="contact-form-area contact-page-form contact-form text-right" action="ClientP.php" method="post"     onSubmit="return confirm('Are you sure you want to submit your Client form?') ">
								<div class="form-group col-md-12">
              <input type="text" class="form-control" id="name" maxlength="10" name="Firstname" minlength="3" placeholder="Firstname" onfocus="this.placeholder = ''"
               onblur="this.placeholder = 'Firstname'" required placeholder="Enter Name"
    			 			oninvalid="this.setCustomValidity('Enter Firstname Here')"
    						oninput="this.setCustomValidity('')" >
            </div>
						<div class="form-group col-md-12">
					<input type="text" class="form-control" id="name" maxlength="10" minlength="4" name="Lastname" placeholder="Lastname" onfocus="this.placeholder = ''"
					 				onblur="this.placeholder = 'Lastname'" required placeholder="Enter Name"
    	 								oninvalid="this.setCustomValidity('Enter Lastname Here')"
    									oninput="this.setCustomValidity('')" >
				</div>


								<div class="form-group col-md-12">
									<h4 style="text-align:left; color:red">DOB</h4>
              <input type="date" class="form-control" id="name" name="DOB" placeholder="Please enter your Date of Birth D/M/Y 09/12/1996" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'DOB'" required="" required placeholder="Enter Name"
                      oninvalid="this.setCustomValidity('Enter Date of Birth Here')"
                    oninput="this.setCustomValidity('')"  date-date-format="dd-mm-yyy">

            </div>
						<div class="form-group col-md-12">
					<input type="number" class="form-control" id="name" name="Telephone" maxlength="10" minlength="10" placeholder="Please enter your 246-820-4563" onfocus="this.placeholder = ''"
					 onblur="this.placeholder = 'Please enter your 246 820 4563'" required=""
					 required placeholder="Enter Name"
							oninvalid="this.setCustomValidity('Enter Your Telephone Number Here')"
						oninput="this.setCustomValidity('')" > >
				</div>

				<div class="form-group col-md-12">
			<input type="text" class="form-control" id="name" minlength="3" maxlength="20"  name="MedicalProblem" placeholder="Please enter your Medical Problem" onfocus="this.placeholder = ''"
			 onblur="this.placeholder = 'Please enter your Medical Problem'" required=""
			 required placeholder="Enter Name"
					oninvalid="this.setCustomValidity('Enter MedicalProblem. if there is no medical Problem. Type Nil Here')"
				oninput="this.setCustomValidity('')" >>
		</div>
						<div class="form-group col-md-12">
					<input type="text" class="form-control" id="name" minlength="5"  name="EmailAddress" placeholder="Please enter your Jonedoe@gmail.com" onfocus="this.placeholder = ''"
					  onblur="this.placeholder = 'Please enter your Jonedoe@gmail.com'" required="" required placeholder="Enter Name"
            oninvalid="this.setCustomValidity('Enter Email Address. Jonedoe@gmail.com')"
            oninput="this.setCustomValidity('')"  />
				</div>


										<input type="reset" name="" value="Clear">

				          	<input type="Submit" name="" value="ADD Client">





     	<!--================ logout =================-->



							</form>
						</div>
					</div>
				</div>
			</div>

		</section>
<br>

		<!--================ End Reservstion Area =================-->

		<!--================ Start Footer Area =================-->
	  <footer class="footer-area overlay" style="background-image:url(images/1.jpg); ">
			<div class="container"style="background-color:;">
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
