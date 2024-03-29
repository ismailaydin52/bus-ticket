<!DOCTYPE html>
<html>
  <head>
    <title>Admin Seferler</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJTVsBHAKFJS3yX0JWGEZ_ZAUJ7j8Lo8o&libraries=places"></script>


    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <link href="login.html" />

  </head>
  
  <style type="text/css">
    .combined {
      -webkit-text-stroke: 1px black;
      color: white;
      text-shadow: 2px 2px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000,
        -1px 1px 0 #000, 1px 1px 0 #000;
    }
    .border-black {
      color: blue;
      /*border white with light shadow*/
      text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000,
        1px 1px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000,
        1px 1px 5px #000;
    }
    
  </style>
  <style>
    .container {
      display: flex;
      justify-content: space-between;
    }
    .navbar .navbar-brand {
      background-color: forestgreen;
      width: 70%;
    }

    .left,
    .right {
      width: 60%; /* İki formun arasında boşluk bırakmak için genişlik ayarları */
    }

    form {
      padding: -10px; /* Form içeriğini kenarlardan uzaklaştırmak için */
      margin-top: 80px;
      margin-left: 90px;
    }
    
  </style>
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/linearicons.css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/owl.carousel.css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/font-awesome.min.css"
  />
  <link
    href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css"
    rel="stylesheet"
    type="text/css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/nice-select.css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/magnific-popup.css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/bootstrap.css"
  />
  <link
    rel="stylesheet"
    href="http://localhost/BusTicket-CI/assets/frontend/css/main.css"
  />
  <link
    rel="stylesheet"
    href="http://anijs.github.io/lib/anicollection/anicollection.css"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="http://localhost/BusTicket-CI/assets/datepicker/dist/css/bootstrap-datepicker.min.css"
  />
  <link
    href="http://localhost/BusTicket-CI/assets/frontend/select2/css/select2.min.css"
    rel="stylesheet"
  />

  <body>
    <div id="map" style="height: 400px; width: 100%;"></div>

    <header id="header" id="home">
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.html" 
                ><strong><b>Umuttepe Turizim</b></strong></h3></a
              >
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu">
                  <a
                    href="http://localhost/myci5/public/">Home</a>
                </li>
                <li>
                  <a href="http://localhost/myci5/public/güzergahlar">Güzergahlar</a>
                </li>
                <li class="menu">
                  <a href="http://localhost/myci5/public/admin/seferkontrol" 
                    >Bilet Bilgileri</a
                  >
                </li>
  
               
                  <a href="http://localhost/myci5/public/login" 
                    >Kayıt Ol</a 
                  >
                </li>
                <li><a href="http://localhost/myci5/public/login">Login</a></li>
                
              </ul>
            </nav>
            <!-- #nav-menu-container -->
          </div>
        </div>
      </header>
      <body>
      <div class="container-fluid" style="margin-top: -320px;">
      <h1 class="h5 text-gray-800">Sefer Listesi</h1> 
     
       
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>Sefer_ID</th>
                  <th>YolculaID</th>
                  <th>Kalkış_Yeri</th>
                  <th>Varış_Yeri</th>
                  <th>Mola_yeri</th>
                  <th>yolcu_sayısı</th>
                  <th>Tarih</th>
                  <th>Kalkış_Saati</th>
                  <th>Varış_Saati</th>
                </tr>
              </thead>
              <tbody>
                                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>İstanbul</td>
                  <td>İzmir</td>
                  <td>Bursa</td>
                  <td>200</td>
                  <td>2024-02-05</td>
                  <td>08:00</td>
                  <td>12:00</td>
                                      
              </tr>
                              <tr>
                              <td>2</td>
                  <td>4</td>
                  <td>Kocaeli</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>150</td>
                  <td>2024-02-05</td>
                  <td>00:00</td>
                  <td>04:00</td>
                  
                                      
              </tr>
                              <tr>
                              <td>3</td>
                  <td>4</td>
                  <td>Kocaeli</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>100</td>
                  <td>2024-02-05</td>
                  <td>08:00</td>
                  <td>12:30</td>       
              </tr>
                              <tr>
                              <td>8</td>
                  <td>8</td>
                  <td>İstanbul</td>
                  <td>İzmir</td>
                  <td>Bursa</td>
                  <td>400</td>
                  <td>2024-02-05</td>
                  <td>16:00</td>
                  <td>20:00</td> 
                
                                     
              </tr>
                              <tr>
                              <td>8</td>
                  <td>8</td>
                  <td>İstanbul</td>
                  <td>İzmir</td>
                  <td>Bursa</td>
                  <td>400</td>
                  <td>2024-02-05</td>
                  <td>16:00</td>
                  <td>20:00</td>             
                  
                                    
              </tr>
                              <tr>
                              <td>9</td>
                  <td>9</td>
                  <td>Kocaeli</td>
                  <td>İzmir</td>
                  <td>Yalova</td>
                  <td>350</td>
                  <td>2024-02-04</td>
                  <td>08:00</td>
                  <td>14:00</td>    
                 
                                      
              </tr>
                              <tr>
                              <td>10</td>
                  <td>9</td>
                  <td>İstanbul</td>
                  <td>İzmir</td>
                  <td>Bursa</td>
                  <td>400</td>
                  <td>2024-02-05</td>
                  <td>00:00</td>
                  <td>05:00</td>    
                  
                                      
              </tr>
                              <tr>
                              <td>15</td>
                  <td>3</td>
                  <td>İstanbul</td>
                  <td>Kocaeli</td>
                  <td>Yalova</td>
                  <td>350</td>
                  <td>2024-02-05</td>
                  <td>16:00</td>
                  <td>20:00</td>           
              </tr>
                              <tr>
                              <td>16</td>
                  <td>2</td>
                  <td>İstanbul</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>150</td>
                  <td>2024-02-05</td>
                  <td>04:00</td>
                  <td>14:00</td>
                  <tr>
                              <td>17</td>
                  <td>5</td>
                  <td>İstanbul</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>350</td>
                  <td>2024-02-05</td>
                  <td>12:00</td>
                  <td>22:00</td> 
                  <tr>
                              <td>18</td>
                  <td>8</td>
                  <td>İstanbul</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>50</td>
                  <td>2024-02-05</td>
                  <td>20:00</td>
                  <td>00:00</td>
                  <tr> 
                        <td>19</td>
                  <td>7</td>
                  <td>Kocaeli</td>
                  <td>İstanbul</td>
                  <td>Yalova</td>
                  <td>100</td>
                  <td>2024-02-05</td>
                  <td>06:00</td>
                  <td>08:00</td>
                  <tr> 
                        <td>39</td>
                  <td>32</td>
                  <td>İzmir</td>
                  <td>Zonguldak</td>
                  <td>Karabük</td>
                  <td>45</td>
                  <td>2024-02-11</td>
                  <td>20:00</td>
                  <td>07:00</td>
                    
                        
                          </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
  
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
      </body>
			