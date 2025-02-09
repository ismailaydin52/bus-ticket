<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>

  
  <link href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://localhost/BusTicket-CI/assets/backend/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
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
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1c86ee;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/myci5/public/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3" >Umuttepe Turizim</div>
      </a>

      
      <hr class="sidebar-divider my-0">

      <li class="nav-item" style="background-color: #1c86ee;">
        <a class="nav-link" href="http://localhost/myci5/public/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin Sayfası </span></a> 
          <a class="nav-link" href="http://localhost/myci5/public/admin/grafik1">
            <i class="fas fa fa-bus"></i>
            <span>Toplam Yolcu Sayısı</span></a>
            <a class="nav-link" href="http://localhost/myci5/public/admin/adminseferler">
              <i class="fas fa fa-compass"></i>
              <span>Sefer Sayıları</span></a>
              <a class="nav-link" href="http://localhost/myci5/public/admin/soforliste"> 
                <i class="fas fa fa-clipboard-list"></i>
                <span>Şöför Listesi</span></a>
        <a class="nav-link" href="http://localhost/myci5/public/admin/grafik2">
          <i class="fa fa-dollar-sign"></i>
          <span>Ödeme Listesi</span></a>
              </li>
      <hr class="sidebar-divider d-none d-md-block" style="background-color: #1c86ee;">

      
      <div class="text-center d-none d-md-inline">
        
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: #1c86ee;"></button>
      </div>

    </ul>
    
    <div id="content-wrapper" class="d-flex flex-column" >

    
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="GET">
            <div class="input-group">
              <input type="text" name="order" class="form-control bg-light border-0 small" placeholder="Search Order" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-info" >
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
           
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
              </div>
            </li>

          </ul>

        </nav>
       
        <div class="container-fluid">

         
          <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tüm Yolcu Kayıtları</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">36</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-spinner fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rezervasyonlar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">36</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="http://localhost/myci5/public/admin/allbus">Rezervasyon Listesi</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">36</div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Toplam Yolcu Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">13</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-road fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Aktif Biletler</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">24</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="http://localhost/myci5/public/admin/adminseferler">Sefer Listesi</a></div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
    // Grafik verilerini ve ayarlarını tanımlayın
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['zonguldak-izmit', 'izmir-zonguldak', 'izmit-istanbul', 'izmit-izmir', 'istanbul-zonguldak', 'istanbul izmit'],
            datasets: [{
                label: 'Satışlar',
                data: [10, 5, 20, 7, 2, 16],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>&copy; 2024-Umuttepe Turizm Seyehat Acentası</span>
		</div>
	</div>
</footer>
</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="http://localhost/myci5/public/">Logout</a>
			</div>
		</div>
	</div>
</div>
 <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- js -->
  <!-- Bootstrap core JavaScript-->
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost/BusTicket-CI/assets/backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Page level custom scripts -->
<script src="http://localhost/BusTicket-CI/assets/backend/js/demo/datatables-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript"> 
	$(document).ready(function () {
		$(".preloader").fadeOut();
	});
  
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>
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
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

</body>

</html>