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
		
		
		<title>Bilet Kontrolü</title>
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
            /* background-color: #fff; */
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
  </style>	
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault(); // Formun varsayılan davranışını engelle

            // Formdaki veriyi al
			var veri = $("#veri").val();
			var dizi = [];
			dizi =veri;
			veri =" ";

			if (dizi[1] == "1") {
				veri = veri + "kocaeli otogarından";
				
			}
		else if (veri[1] == "5") {
				
				veri = veri + "izmir otogarından";
				
			}
		else if (veri[1] == "7") {
				  
				veri = veri + "zonguldak otogarından";
				
			}
	    else if (veri[1] == "4") {
				
				veri = veri + "istanbul harem otogarından";
			}

			if (dizi.includes("öö") || dizi.includes("ÖÖ")) {
            veri = veri + " öğleden önce ";
        } else if (dizi.includes("ös") || dizi.includes("ÖS")) {
            veri = veri + " öğleden sonra ";
        }

		for (let index = 4; index < 12  ; index++) {
			
			veri = veri + dizi[index];
			if (index == 5 || index == 7 ) {
				veri =veri +".";
			}

			
		}
		veri = veri+ " tarihinde ";
		for (let index = 12; index < 18  ; index++) {
			
			veri = veri + dizi[index];
			if (index == 13 || index == 15 ) {
				veri  =veri +":";
			}
		}
		veri = veri + " saatinde ";
		veri = veri + dizi[18] + " peronundan ";
		for (let index = 19; index < 26  ; index++) {
			
			veri = veri + dizi[index];
			if (index == 20 || index == 23 ) {
				veri  =veri +" ";
			}
		}
		veri = veri +" plakalı araçta biletiniz bulunmaktadır."






            // QR kodunu oluştur
            var qrUrl = 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=' + encodeURIComponent(veri);

            // Popup içeriği oluştur
            var popupContent = '<div style="text-align:center;"><img src="' + qrUrl + '"></div>';

            // Popup penceresini aç
            var popupWidth = 250;
            var popupHeight = 250;
            var left = (window.screen.width - popupWidth) / 2;
            var top = (window.screen.height - popupHeight) / 2;
            var popupWindow = window.open('', '_blank', 'width=' + popupWidth + ', height=' + popupHeight + ', top=' + top + ', left=' + left);
            popupWindow.document.write(popupContent);
			veri=null;
        });
    });
</script>



</head>
	<body>
		<!-- navbar -->
		<header id="header" id="home" style="background-color:#007FFF">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="http://localhost/myci5/public/"><h3> <i class="fas fa-ticket-alt" style="color: white;"></i> <b style="color: azure;">Umuttepe Turizim</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="http://localhost/myci5/public/">Home</a></li> 
			          <li><a href="http://localhost/myci5/public/g%C3%BCzergahlar">Güzergahlar</a></li>
			          <li class="menu"><a href="http://localhost/myci5/public/seferkontrol">Bilet Bilgileri</a></li>
			            
				  	  <li><a href="http://localhost/myci5/public/kayıtol">Kayıt Ol</a></li>
 					  <li><a href="http://localhost/myci5/public/login">Login</a></li>
				  	  			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->			
		  
		  <section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-6">
						<!-- Default Card Example -->
						<div class="card wobble">
					  <div class="card-header">
					   <i class="fas fa-ticket"></i> Bileti Kontrol Et 
					  </div>
					  <div class="card-body">

					  <form action="http://localhost/myci5/public/biletkontrolü" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">PNR Kodunu Girin</label>
                        <input type="text" id="veri" class="form-control" name="kodetiket" placeholder="Ticket Code" required>
                    </div>
                    <button type="submit" class="btn btn-primary">QR Kodu Oluştur</button>
                </form>	
					  </div>
					</div>
					</div>
			</section>



			
			
			<!--footer Area --> 
						<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Umuttepe Turizim</h4>
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
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-text m-0"><span>&copy; 2024 Umuttepe Turizim Seyehat Acentası </span> </p>			
						
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


<!--End of Tawk.to Script-->
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