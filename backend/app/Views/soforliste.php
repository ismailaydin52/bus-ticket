<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
  <link href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  
  <link href="http://localhost/BusTicket-CI/assets/backend/css/sb-admin-2.min.css" rel="stylesheet">
  
  <link href="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BusTicket-CI/assets/datepicker/dist/css/bootstrap-datepicker.min.css">
  <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
           
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
  </style>  </head>
  <body id="page-top">
    
  <div id="wrapper">

   
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

     
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/myci5/public/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Umuttepe Turizim</div>
      </a>

      
      <hr class="sidebar-divider my-0">

      
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/myci5/public/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin Sayfası </span></a>
          <a class="nav-link" href="">
            <i class="fas fa fa-bus"></i>
            <span>Toplam Yolcu Sayısı</span></a>
            <a class="nav-link" href="">
              <i class="fas fa fa-compass"></i>
              <span>Sefer Sayıları</span></a>
              <a class="nav-link" href="">
                <i class="fas fa fa-clipboard-list"></i>
                <span>Şöfor Listesi</span></a>
        <a class="nav-link" href="">
          <i class="fas fa-bookmark"></i>
          <span>Sefer Listesi</span></a> 
        <a class="nav-link" href="">
          <i class="fas fa-ticket-alt"></i>
          <span>Biletler</span></a>
        <a class="nav-link" href="">
          <i class="fa fa-dollar-sign"></i>
          <span>Ödeme Listesi</span></a>
              </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          <ul class="navbar-nav ml-auto">

            

            
            <div class="topbar-divider d-none d-sm-block"></div>

           

        </nav>
       
    <div class="container-fluid">
      <h1 class="h5 text-gray-800">Şoför Listesi</h1> 
     
       
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>Şoför Adı</th>
                  <th>Görev Aldığı Sefer</th>
                  <th>Kullandığı Araba Plakası</th>
                  <th>Tecrübe Yılı</th>
                </tr>
              </thead>
              <tbody>
                                <tr>
                  <td>Rıfat Asil</td>
                  <td>İzmir-İstanbul</td>
                  <td>35 TMS 888</td>
                  <td>12</td>
                                      
              </tr>
                              <tr>
                  <td>Ahmet Kaçar</td>
                  <td>İstanbul-İzmir</td>
                  <td>34 ABC 234</td>
                  <td>8</td>
                  
                                      
              </tr>
                              <tr>
                  <td>Eymen Üçer</td>
                  <td>İstanbul-Kocaeli</td>
                  <td>35 XYZ 225
</td>              <td>7</td>          
              </tr>
                              <tr>
                  <td>Behçet Uçmaz</td>
                  <td>Kocaeli-İzmir</td>
                  <td>41 DEF 534
</td>
                  <td>10</td>
                
                                     
              </tr>
                              <tr>
                  <td>Remzi Tekin</td>
                  <td>Kocaeli-Zonguldak</td>
                  <td>41 ZCX 644</td>
                  <td>11</td>
                  
                                    
              </tr>
                              <tr>
                  <td>Kemal Türkmen</td>
                  <td>Zonguldak-Kocaeli</td>
                  <td>67 FGC 775</td>
                  <td>13</td>
                 
                                      
              </tr>
                              <tr>
                  <td>Ali Uçar</td>
                  <td>Zonguldak-İzmir</td>
                  <td>67 EXZ 665</td>
                  <td>5</td>
                  
                                      
              </tr>
                              <tr>
                  <td>Nebahat Kaçmaz</td>
                  <td>Zonguldak-Kocaeli</td>
                  <td>67 AGF 225</td>
                  <td>10</td>                    
              </tr>
                              <tr>
                  
                          </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
  
</div>

<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>&copy; 2024 Umuttepe Turizim Seyehat Acentası </span>
		</div>
	</div>
</footer>
</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

			
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="http://localhost/BusTicket-CI/backend/login/logout">Logout</a>
			</div>
		</div>
	</div>
</div>
<div class="preloader">
	<div class="loading">
		<img src="http://localhost/BusTicket-CI/assets/frontend/img/preloader.gif" width="100">
		<p>Lütfen Bekleyin...</p>
	</div>
</div><!-- End of Footer -->
<!-- Modal -->
  
</div>
</div>
</div>

<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="http://localhost/BusTicket-CI/assets/backend/js/sb-admin-2.min.js"></script>


<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="http://localhost/BusTicket-CI/assets/backend/js/demo/datatables-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script> 
	$(document).ready(function () {
		$(".preloader").fadeOut();
	});
  
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				2024 Umuttepe Turizim Seyehat Acentası <br> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>