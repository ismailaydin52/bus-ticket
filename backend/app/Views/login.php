
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		<title>Umuttepe Turizim</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
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
  </style>	</head>
	<body class="">
		<!-- navbar -->
		<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="http://localhost/myci5/public/"><h3> <i class="fas fa-ticket-alt"></i> <b>Umuttepe Turizim</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="http://localhost/myci5/public/">Home</a></li> 
			          <li><a href="http://localhost/myci5/public/g%C3%BCzergahlar">Güzergahlar</a></li> 
			          <li class="menu"><a href="http://localhost/myci5/public/seferkontrol">Bilet Bilgileri</a></li> 
			            
				  	  <li class="menu wobble animated"><a href="http://localhost/myci5/public/kay%C4%B1tol">Kayıt Ol</a></li> 
 					  <li><a href="http://localhost/myci5/public/login">Login</a></li>
				  	  			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header>
		  <body>
  <div class="container" style="margin-left: 380px ; ">
    <div class="row">
      <form action="<?php echo base_url("/giris")?>" method="post">
      <h2 style="text-align: center;">	Kullanıcı Girişi</h2> 
      <div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-left:200px;"> 
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="name">Kullanıcı Adı</label>
  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kullanıcı Adı" name="name">  
</div>
<div class="mb-3">
	<label for="exampleInputPassword1" class="form-label" name="password">Password</label>
	<input name="sifre" type="password" class="form-control" id="exampleInputPassword1" name="password"> 
	<button type="submit" class="btn btn-primary" id="giriş-yap-butonu">Giriş Yap</button>  
</div>
</div>
</form>
</div>
<script>
    
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("giriş-yap-butonu").addEventListener("click", function() {
			var username = document.getElementById("exampleFormControlInput1").value;
            var password = document.getElementById("exampleInputPassword1").value;
			/*if(username == "user" && password == "1234") {
                window.location.href = "<?php echo base_url("/hesabım")?>";
            } else {
                alert("Kullanıcı adı veya şifre yanlış!");
			}*/s
        })
    });
</script>
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

</body>