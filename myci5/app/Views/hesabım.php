<?php 
	$session = session();
	$user = $session->get('user');
	
?>
<html lang="zxx" class="no-js" style="display: block;">
<head>
	<style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation: animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button:not([disabled]):hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel:not([disabled]):hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger:not([disabled]):hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/elements/fav.png">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
	
		<title>Hesabım</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    
		<!--CSS-->
		<style type="text/css">
		.text-block {
		position: absolute;
		bottom: 20px;
		right: 20px;
		background-color: black;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
		}
		</style>
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
		<link href="http://localhost/BusTicket-CI/assets/frontend/select2/css/select2.min.css" rel="stylesheet">
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
  </style>	<style id="mttstyle">
    #mttContainer {
      left: 0 !important;
      top: 0 !important;
      width: 1000px !important;
      margin-left: -500px !important;
      position: fixed !important;
      z-index: 100000200 !important;
      background: none !important;
      pointer-events: none !important;
      display: inline-block !important;
      visibility: visible  !important;
      white-space: pre-line;
    }
    .tippy-box[data-theme~="custom"] {
      font-size: 14px  !important;
      max-width: 200px  !important;
      text-align: center !important;
      backdrop-filter: blur(4px) !important;
      background-color: #000000b8 !important;
      color: #ffffffff !important;
      overflow-wrap: break-word !important;
      font-family: 
        -apple-system, BlinkMacSystemFont,
        "Segoe UI", "Roboto", "Oxygen",
        "Ubuntu", "Cantarell", "Fira Sans",
        "Droid Sans", "Helvetica Neue", sans-serif  !important;
      border: 1px solid #ffffff00;
      white-space: pre-line;
    }
    [data-tippy-root] {
      display: inline-block !important;
      visibility: visible  !important;
      position: absolute !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='top'] > .tippy-arrow::before { 
      border-top-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='bottom'] > .tippy-arrow::before {
      border-bottom-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='left'] > .tippy-arrow::before {
      border-left-color: #000000b8 !important;
    }
    .tippy-box[data-theme~='custom'][data-placement^='right'] > .tippy-arrow::before {
      border-right-color: #000000b8 !important;
    }
    .mtt-highlight{
      background-color: #21dc6d40  !important;
      position: absolute !important;   
      z-index: 100000100 !important;
      pointer-events: none !important;
      display: inline !important;
      border-radius: 3px !important;
    }
    .mtt-image{
      width: 180px  !important;
      border-radius: 3px !important;
    }
    .ocr_text_div{
      position: absolute;
      opacity: 0.7;
      color: transparent !important;
      border: 2px solid CornflowerBlue;
      background: none !important;
      border-radius: 3px !important;
    }</style><style id="mttstyleSubtitle">
    #ytp-caption-window-container .ytp-caption-segment {
      cursor: text !important;
      user-select: text !important;
      font-family: 
      -apple-system, BlinkMacSystemFont,
      "Segoe UI", "Roboto", "Oxygen",
      "Ubuntu", "Cantarell", "Fira Sans",
      "Droid Sans", "Helvetica Neue", sans-serif  !important;
    }
    .caption-visual-line{
      display: flex  !important;
      align-items: stretch  !important;
    }
    .captions-text .caption-visual-line:first-of-type:after {
      content: '⣿⣿';
      background-color: #000000b8;
      display: inline-block;
      vertical-align: top;
      opacity:0;
      transition: opacity 0.7s ease-in-out;
    }
    .captions-text:hover .caption-visual-line:first-of-type:after {
      opacity:1;
    }
    .ytp-pause-overlay {
      display: none !important;
    }
    .ytp-expand-pause-overlay .caption-window {
      display: block !important;
    }
  </style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/56/4/intl/tr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/56/4/intl/tr_ALL/util.js"></script></head>
	<body style="display: block;"><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
		<!-- navbar -->
		<header id="header" style="background-color:#007FFF">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="http://localhost/myci5/public/"><h3> <i class="fas fa-ticket-alt"></i> <b style="color:azure">Umuttepe Turizim</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
			          <li class="menu"><a href="http://localhost/myci5/public/">Anasayfa</a></li>
			          <li><a href="http://localhost/myci5/public/seferkontrol">rezervasyon yap</a></li>
			          <li class="menu"><a href="http://localhost/myci5/public/biletkontrol%C3%BC">bilet kontrolü</a></li> 
			          				      	
						<ul style="display: none;">
							<li><a href=""><i class="fas fa-id-card"></i> Hesabım</a></li>
							<li><a href="http://localhost/myci5/public/ki%C5%9Fiselbiletlerim"><i class="fas fa-ticket-alt"></i> Biletlerim</a></li>
							<li><a href="http://localhost/myci5/public/"><i class="fas fa-sign-out-alt"></i> çıkış</a></li>
						</ul>
						</li>
				      			        </ul>
			      </nav>		    		
		    	</div>
		    </div>
		  </header><!-- #header -->			<section class="generic-banner relative">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-30" align="center">hesabım</h3>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6">
							<!-- Default Card Example -->
							<div class="card" align="left">
								<div class="card-header">
									<i class="fas fa-user"></i> Hesap bilgileri
								</div>
								<div class="card-body" align="left">
									<div class="row">
										<div class="col-sm-8">
											<h5 class="card-title">TC No.</h5>
											<p class="card-text"><?php echo $user['Tc_Kimlik'] ?></p>
											<h5 class="card-title">İsim</h5>
											<p class="card-text"><?php echo $user['Ad']." ". $user['Soyad'] ?></p>
											<h5 class="card-title">E posta</h5>
											<p class="card-text"><?php echo $user['eposta'] ?></p>
											<h5 class="card-title">Tel No.</h5>
											<p class="card-text"><?php echo $user['Telefon'] ?></p>
										</div>
										<div class="col-sm-14">
											<h5 class="card-title">Adres</h5>
											<p class="card-text">Kocaeli/Turkiye</p>
											<h5 class="card-title">Profil fotoğrafı</h5>
											<p><img src="http://localhost/BusTicket-CI/assets/frontend/img/default.png" height="50" width="50"></p>
											<p><a href="" class="btn btn-primary">şifre değiştir</a></p>
											<p><button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">hesap düzenleme</button></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div></div></section>
				
				<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">hesap düzenleme</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url("/kGuncelle") ?>" method="post" enctype="multipart/form-data">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-14">
												<div class="row form-group">
													<label for="nama" class="control-label">TC No.</label>
													<input type="text" class="form-control" name="ktp" value="<?php echo $user['Tc_Kimlik']?>">
													<input type="hidden" name="kode" value="CA0024">
												</div>
												<div class="row form-group">
													<label for="nama" class="control-label">isim</label>
													<input type="text" class="form-control" name="nama" value="<?php echo $user['Ad']?>">
												</div>
												<div class="row form-group">
													<label for="nama" class="control-label">E posta</label>
													<input type="email" class="form-control" name="email" value="<?php echo $user['eposta'] ?>">
												</div>
												<div class="row form-group">
													<label for="nama" class="control-label">Telefon numarası</label>
													<input type="text" class="form-control" name="hp" value="<?php echo $user['Telefon'] ?>">
												</div>
												<div class="row form-group">
													<label for="nama" class="control-label">Adres</label>
													<input type="text" class="form-control" name="alamat" value="Kocaeli/Turkiye">
												</div>
												<div class="row form-group">
													<label for="" class="control-label">Profil fotoğrafı</label>
													<img src="http://localhost/BusTicket-CI/assets/frontend/img/default.png" alt="" style="width:150px;height:150px"><input type="file" class="form-control" value="http://localhost/BusTicket-CI/ismail ayd?n" name="img">
												</div>
											</div>
										</div>
									</div>
									<button class="btn btn-danger" data-dismiss="modal">kapat</button>
									<button type="submit" class="btn btn-primary">değişiklikleri kaydet</button>
								</form></div>
								
							
						</div>
					</div>
				</div>
				
							<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">otobüs bileti rezerve</h4>

							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">iletişime geçin</h4>
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
								<h4 class="text-white">duyurular</h4>
								<p> Bize güvenebilirsiniz</p>
								<div class="d-flex flex-row" id="mc_embed_signup">
										<form class="navbar-form" novalidate="true" action="" method="post">
									    <div class="input-group add-on">
									      	<input class="form-control" placeholder="Email address" type="email" name="EMAIL">
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
            <p class="footer-text m-0"><span>© 2024 umuttepe Turizim <?php echo print_r($user); ?></span> </p>
   
					</div>
				</div>
			</footer>
			<div class="preloader" style="display: none;">
			
		</div>	
				<script src="http://localhost/BusTicket-CI/assets/frontend/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="http://localhost/BusTicket-CI/assets/frontend/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
	$(document).ready(function () {
		$(".preloader").fadeOut();
	})
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>

			
		<nav id="mobile-nav">
			        <ul class="" style="touch-action: pan-y;" id="">
			          <li class="menu"><a href="http://localhost/myci5/public/">Home</a></li>
			          <li><a href="http://localhost/myci5/public/seferkontrol">seferkontrol</a></li>
			          <li class="menu"><a href="http://localhost/myci5/public/biletkontrol%C3%BC">Bilet Kontrolü</a></li>
			          				      	<li class="menu-has-children"><i class="lnr lnr-chevron-down"></i><a href="#" class="sf-with-ul">Hi, ismail ayd?n</a>
						<ul style="display: none;">
							<li><a href="http://localhost/BusTicket-CI/profile/profilesaya/CA0024"><i class="fas fa-id-card"></i> My Profile</a></li>
							<li><a href="http://localhost/BusTicket-CI/profile/tiketsaya/CA0024"><i class="fas fa-ticket-alt"></i> Biletim</a></li>
							<li><a href="http://localhost/myci5/public/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
						</ul>
						</li>
				      			        </ul>
			      </nav><div id="mobile-body-overly"></div><div id="mttContainer" class="notranslate" aria-expanded="false" style="transform: translate(1304px, 78px);"></div></body></html>