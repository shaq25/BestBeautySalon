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
	 <style media="screen">

 	h1,h2{

 		color:Darkorange;
 	}

	  {
	   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }

	  td,th {
	   border: 2px solid #ddd;
	   padding: 8px;
		    text-align: center;
				color:Black;
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: 12px;
	 }

	  tr:nth-child(even){background-color:gold;}

	  tr:hover {background-color: #ddd;}

	 th{

	   padding-top: 12px;
	   padding-bottom: 12px;
	   text-align: center;
	   background-color:Darkorange;
	   color: White;

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

					<li class="nav-item"><a class="nav-link" href="Appointment.php"><img src="img/banner/70.png"style="width:50px;150px;" alt="">Appointment</a></li>



					</ul>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner" style="background-image:url(img/banner/20.jpg); background-repeat:no-repeat: cover; background-size: 100% 100%; ">
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
							<center><h1>Appointment Table</h1></center>


							<?php

							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "bestbeautysalon";

							 $conn = mysqli_connect("localhost", "root","", "bestbeautysalon");

										$i=0;

										 $result = mysqli_query($conn, "SELECT * FROM appointment ;");

											 if ($result->num_rows > 0)
											{
												echo	"<table >";
													echo	"<tr>";
													echo"<th>#</th>";
													echo	"<th>AppointmentID</th>";
													echo	"<th>ClientID</th>";
													echo	"<th>Service</th>";
													echo	"<th>Time</th>";
													echo	"<th>Date</th>";
													echo	"<th>Status</th>";
													echo	"<th>DateCompleted</th>";
														echo	"<th>TimeCompleted</th>";

													echo"</tr>";

											while($rows = $result -> fetch_assoc())
											{
												$i++;
												if ($i < 5) {

													echo "<tr><td>";

													echo$i ;
													echo" </td><td>";
													echo $rows["AppointmentID"];
													echo "</td><td>";
													echo $rows["ClientID"];
													echo "</td><td>";
													echo $rows["ServiceID"];
													echo "</td><td>";
													echo $rows["Time"];
													echo "</td><td>";
													echo $rows["Date"];
													echo "</td><td>";
													echo $rows["Status"];
													echo "</td><td>";
													echo $rows["DateCompleted"];
													echo "</td><td>";
													echo $rows["TimeCompleted"];


													echo "</td>";

										}
									else {

													echo "<tr class='danger'><td>";

													echo$i ;
													echo" </td><td>";
													echo $rows["AppointmentID"];
													echo "</td><td>";
													echo $rows["ClientID"];
													echo "</td><td>";
													echo $rows["ServiceID"];
													echo "</td><td>";
													echo $rows["Time"];
													echo "</td><td>";
													echo $rows["Date"];
													echo "</td><td>";
													echo $rows["Status"];
													echo "</td><td>";
													echo $rows["DateCompleted"];
													echo "</td><td>";
													echo $rows["TimeCompleted"];

													echo "</td>";
										 }
													echo"</tr>";

							}
						 echo"</table>";
						 }
										 ?>


						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->


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
							<a href="https://www.instagram.com/best_beauty_salon/"><img src="img/banner/instagram.png"style="width:50px;150px;" alt="">	</a>

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
