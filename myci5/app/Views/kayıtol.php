<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<title>Kayıt Ol</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="http://localhost/BusTicket-CI/assets/frontend/datepicker/dcalendar.picker.css">
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
            border: 1px solid grey;
            min-height: 10em;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
  </style>	</head>
	<body>
		<!-- navbar -->
		<header id="header" id="home" style="background-color:#007FFF"> 
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="http://localhost/myci5/public/"><h3> <i class="fas fa-ticket-alt"></i> <b style="color: azure;">Umuttepe Turizim</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="http://localhost/myci5/public/">Home</a></li> 
			          <li><a href="http://localhost/myci5/public/güzergahlar">Güzergahlar</a></li>
			          <li class="menu"><a href="http://localhost/myci5/public/login">Bilet Bilgileri</a></li>
			            
				  	  <li class="menu wobble animated"><a href="http://localhost/myci5/public/kayıtol">Kayıt Ol</a></li>
 					  <li><a href="http://localhost/myci5/public/login">Login</a></li>
				  	  			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->			<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-8">
						<!-- Default Card Example -->
						<div class="card ">
							<div class="card-header">
								<i class="fas fa-user"></i> Müşteri Girişi 
							</div>
							<div class="card-body">
								<form action="" method="post">
									<div class="form-group">
										<div class="form-group">
											<div class="form-label-group">
												<input type="text" name="name" class="form-control" required="" placeholder="Full Name" value="">
												<small class="text-danger pl-3"></small>											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-label-group">
													<input type="text" name="email" class="form-control" required="" placeholder="Email" value="">
													<small class="text-danger pl-3"></small>												</div>
											</div>
											<div class="col-md-6">
												<div class="form-label-group">
													<input type="number" id="nomor" name="nomor" class="form-control" required="" placeholder="Telefon Numarası" value="">
													<small class="text-danger pl-3"></small>												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="username">Address</label>
										<div class="form-label-group">
											<textarea class="form-control" name="alamat"></textarea>
											<p class="text-danger pl-3"></p>										</div>
									</div>
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" id="username" name="username" class="form-control"  placeholder="Username" >
																					</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" name="password1" placeholder="Password">
										</div>
										<div class="col-sm-6">
											<input type="password" class="form-control form-control-user" name="password2" placeholder="Repeat Password">
										</div>
									</div>
									<small class="text-danger pl-3"></small>									<button class="btn btn-info btn-block" style="color: #fff;"><a href="http://localhost/myci5/public/login">Kayıt Ol</a></button>
								</form>
								<hr>
								<div class="text-center">
									<p>Hesabın Var mı? <a class="" href="http://localhost/myci5/public/login">Login Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			
							<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Umuttepe Turizim Seyehat Acentası</h4> 
								<p>
								Umuttepe Turizim ile sağlıklı ve güvenli yolculuk yapın. Uzun yolculuklarda en iyi tercihiniz Umuttepe Turizim Seyehat Acentası
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
						
            <p class="footer-text m-0"><span>&copy; 2024 Umuttepe Turizim Seyehat Acentası</span> </p>
            
					</div>
				</div>
			</footer>
			
			
		</div>	
			<!-- End footer Area -->				<!-- js -->
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


<script type="text/javascript">
	$(document).ready(function () {
		$(".preloader").fadeOut();
	})
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>



			</body>
		</html>