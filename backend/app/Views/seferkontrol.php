<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<title>Sefer Kontrolü</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css"
		href="http://localhost/BusTicket-CI/assets/frontend/datepicker/dcalendar.picker.css">
			<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/linearicons.css">
		<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/font-awesome.min.css">
        <link href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/nice-select.css">
		<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/magnific-popup.css">
		<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/bootstrap.css">
		<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/main.css">
		<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/BusTicket-CI/assets/datepicker/dist/css/bootstrap-datepicker.min.css">
		<link href="http://localhost/BusTicket-CI/assets/frontend/select2/css/select2.min.css" rel="stylesheet" />
		  <style type="text/css">
			.body{
				background-color: cornflowerblue;
			}
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
             background-color: #fff; 
        }

        .pre {
            border: 1px solid #fff ;
            min-height: 10em;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
  </style></head>

<body style="background-color: #fff;">
	<!-- navbar -->
	<header id="header" id="home" style="background-color:#007FFF"> 
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><h3> <i class="fas fa-ticket-alt" style="color: white;"></i> <b style="color: azure;">Umuttepe Turizim</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="index.html">Home</a></li>
			          <li><a href="http://localhost/BusTicket-CI/tiket">Güzergahlar</a></li> 
			          <li class="menu"><a href="http://localhost/BusTicket-CI/tiket/cektiket">Bilet Bilgileri</a></li>
			            
				  	  <li class="menu wobble animated"><a href="http://localhost/BusTicket-CI/login/Daftar">Kayıt Ol</a></li>
 					  <li><a href="http://localhost/myci5/public/login">Login</a></li>
				  	  			        </ul>
			      </nav>		    		
		    	</div>
		    </div>
		  </header>	<section class="service-area section-gap relative">
		<div class="overlay overlay-bg" style="background-color:#fff"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					
					<div class="card mb-5">
						<div class="card-header">
							<i class="fas fa-search"></i> Bilet Ara 
						</div>
						<div class="card-body">
							<div class="alert alert-warning" role="alert">
								<p><b>IMPORTANT!!</b></p>
								<P>Before Buying Tickets, Please have a look>> <b><i data-toggle="modal"
											data-target="#exampleModal">How to book?</i></b></P>
							</div>
							<form action="" method="get">
								<div class="form-group">
									<label for="exampleInputEmail1">Tarih Seç</label>
									<input placeholder="Enter date" type="text" class="form-control datepicker"
										name="tanggal" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Kalkış</label>
									<select name="asal" class="form-control js-example-basic-single" required>
										<option value="" selected disabled="">Kalkış Seç</option>
																				<option value="TJ019">
											Kocaeli											- <br>İzmit Otogar </option>
																				<option value="TJ010">
											İzmir											- <br>İzmir Şehir Otogarı </option>
																				<option value="TJ008">
											İstanbul											- <br>Şehirlerarası Otobüs Terminali </option>
																				<option value="TJ017">
											Zonguldak											- <br>Zonguldak Otogarı </option>
																				
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Varış Seç</label> 
									<select name="tujuan" class="form-control js-example-basic-single">
										<option value="" selected disabled="">Varış Seç</option>
																				<option value="Kocaeli">
											Kocaeli</option>
																				<option value="İstanbul">
											İstanbul</option>
																				<option value="Zonguldak">
											Zonguldak</option>
																				<option value="İzmir">
											İzmir</option>
																				
																				
									</select>
								</div>
								<a href="http://localhost/myci5/public/" class="btn btn-danger pull-left">Geri Dön</a>
								<button type="submit" class="btn btn-primary pull-right">Ara</button> 
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card mb-10">
						<div class="card-header">
							<i class="fas fa-info"></i> Kalkış Varış Listesi 
						</div>
						<div class="card-body">
							<table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
								<thead>
									<tr>
										<th style="text-align:center;">Kalkış</th>
										<th>Varış</th>
									</tr>
								</thead>
								<tbody>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											 Kocaeli-06:00</td>
										<td style="vertical-align:middle;">İstanbul-08:00</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-14:00</td>
										<td style="vertical-align:middle;">İstanbul-16:00</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-08:00</td>
										<td style="vertical-align:middle;">İzmir-14:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-13:00</td>
										<td style="vertical-align:middle;">İzmir-00:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
										Kocaeli-21:00</td>
										<td style="vertical-align:middle;">İzmir-04:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İstanbul-08:00</td>
										<td style="vertical-align:middle;">Kocaeli-12:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İstanbul-16:00</td>
										<td style="vertical-align:middle;">Kocaeli-20:00</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-04:00</td>
										<td style="vertical-align:middle;">istanbul-12:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-12:00</td>
										<td style="vertical-align:middle;">İstanbul-22:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-20:00</td>
										<td style="vertical-align:middle;">İstanbul-05:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-12:00</td>
										<td style="vertical-align:middle;">Kocaeli-20:00</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-04:00</td>
										<td style="vertical-align:middle;">Zonguldak-12:00</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
										İzmir-12:00	</td>
										<td style="vertical-align:middle;">Zonguldak-20:00</td>
									</tr>
																	</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-6" style="margin-top: -220px;"> 
					<div class="card mb-10">
						<div class="card-header">
							<i class="fas fa-info"></i>Mola Yeri Bilgileri
						</div>
						<div class="card-body">
							<table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
								<thead>
									<tr>
										<th style="text-align:center;">Sefer Bilgileri</th> 
										<th>Mola Yeri</th>
									</tr>
								</thead>
								<tbody>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-İstanbul</td>
										<td style="vertical-align:middle;">Yalova</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-İzmir</td>
										<td style="vertical-align:middle;">Bursa</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Kocaeli-Zonguldak</td>
										<td style="vertical-align:middle;">Karabük</td> 
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-İstanbul</td>
										<td style="vertical-align:middle;">Bursa</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-Zonguldak</td>
										<td style="vertical-align:middle;">Karabük</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											İzmir-Kocaeli</td>
										<td style="vertical-align:middle;">Bursa</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Zonguldak-Kocaeli</td>
										<td style="vertical-align:middle;">Karabük</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Zonguldak-İzmir</td>
										<td style="vertical-align:middle;">Karabük</td>
									</tr>
																		<tr>
										<td style="text-align:center;vertical-align:middle">
											Zonguldak-İstanbul</td>
										<td style="vertical-align:middle;">Karabük</td> 
									</tr>
																		
									    </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>
			</div>
	</section>

				<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Bilet Seç-Al</h4>
								<p>
								Umuttepe Turizim ile güvenli ve sağlıklı yolculuklar dileriz.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Bizimle İletişime Geçin</h4>
								<p>

								</p>
								<p class="number">
									012-0101-111-1001 <br>
									012-1010-000-0110
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">
										<form class="navbar-form" novalidate="true" action="" method="post">
									    <div class="input-group add-on">
									      	<input class="form-control" placeholder="Email address"  type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn primary circle arrow"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>

								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-text m-0"><span>&copy; 2024 Umuttepe Turizim Acentası </span> </p>
            
			
					
							<a href="#"><i class="fas fa-behance"></i></a>
						</div> 
					</div>
				</div>
			</footer>
			
		</div>	
	<script src="http://localhost/BusTicket-CI/assets/frontend/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/easing.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/hoverIntent.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/superfish.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/jquery.ajaxchimp.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/owl.carousel.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/jquery.sticky.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/jquery.nice-select.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/parallax.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/waypoints.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/jquery.counterup.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/mail-script.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/select2/js/select2.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script></script>
<script type="text/javascript">
</script>



	<script type="text/javascript">
		$(function () {
			var date = new Date();
			date.setDate(date.getDate());

			$(".datepicker").datepicker({
				startDate: date,
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>

</html>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">How to book tickets?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<ol class="ordered-list" align="justify"><span class="center_content2">
					<li>Select date and select your origin and destination terminal/city in order to search for available schedules.
							<li>Search for tickets then click on the <b>Select </b> button on the ticket you want to book.
							</li>
							<li><b></b></li>
							<li><b></b></li>
							<li>Fill up your ticket details by providing customer's details such as Passenger's Name, Age and other required <b>Customer Identity</b>. With it, select any of the available bank [as a Payment Method] to book tickets.</li>
							<li>After submitting the form, the bookings are done <b>[temporarily]</b>. The system will provide you with a <b>QR Code</b> and you've to make payments.</li>
							<li>All the payment instructions are provided in the tickets page.</li>
							<li>Following that, click on the <b>Payment Confirmation</b> button to submit your payment details with an attachment of <b>proof image</b>.</li>
							<li>At last, you payment request will be sent for <b>verification</b>. </li>
							<li>You will also receive an <b>E-Ticket</b> onces after the payment gets verified. </li>
							<li>If you have made a payment, bring proof of payment at the time of departure and exchange it one hour before departure. </li>
						</span></ol>
					<w:worddocument></w:worddocument>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
