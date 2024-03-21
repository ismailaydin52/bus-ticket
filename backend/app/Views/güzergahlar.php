<!DOCTYPE html>
<html>
  <head>
    <title>Güzergahlar</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJTVsBHAKFJS3yX0JWGEZ_ZAUJ7j8Lo8o&libraries=places"></script>

    <script src="https://cdn.tailwindcss.com"></script>

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

  <body onload="initMap()">
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
                  <a href="http://localhost/myci5/public/g%C3%BCzergahlar">Güzergahlar</a>
                </li>
                <li class="menu">
                  <a href="http://localhost/BusTicket-CI/tiket/cektiket"
                    >Bilet Bilgileri</a
                  >
                </li>
  
                
                  <a href="http://localhost/myci5/public/kay%C4%B1tol" 
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




      <!-- güzergah seç  -->
    <div class="container flex flex-row justify-center align-center w-full h-full">
      <div class="left">
        <form action="" method="post">
          <label for="kalkis">Kalkış Noktası:</label>
          <select id="kalkis" name="kalkis" class="px-2 py-[5px] bg-slate-300 rounded-lg">
            <option value="İzmir">İzmir otogar</option>
            <option value="İstanbul">İstanbul harem otogar</option>
            <option value="Kocaeli">Kocaeli otogar</option>
            <option value="Zonguldak">Zonguldak otogar</option>
          </select>
        </form>
      </div>
    <div class="right">
        <form action="" method="post">
          <label>Varış Noktası:</label>
          <select id="varis" name="varis" class="px-2 py-[5px] bg-slate-300 rounded-lg">
            <option value="İzmir">İzmir otogar</option>
            <option value="İstanbul">İstanbul harem otogar</option>
            <option value="Kocaeli">Kocaeli otogar</option>
            <option value="Zonguldak">Zonguldak otogar</option>
          </select>
        </form>

        <script>
          // Formdaki seçim değiştiğinde bu fonksiyon çalışır
          function getSelectedValue() {
            var selectedValueKalk = document.getElementById("kalkis").value;
            var selectedValueVar = document.getElementById("varis").value;

            // var secilen = selectedValue;
            var baslangic = selectedValueKalk;
            var varis = selectedValueVar;
          }
      
          // Formdaki seçim değişikliğini dinlemek için bir olay dinleyici 
          document.getElementById("kalkis").addEventListener("change", getSelectedValue);
          document.getElementById("varis").addEventListener("change", getSelectedValue);

        </script>






          <script>
            const kalkisNoktasi = document.getElementById("kalkis");
            const varisNoktasi = document.getElementById("varis");

           



kalkisNoktasi.addEventListener("change", () => {
  const secilenSehir = kalkisNoktasi.value;
  varisNoktasi.querySelectorAll("option").forEach((option) => {
    if (option.value === secilenSehir) {
      option.style.display = "none";
    } else {
      option.style.display = "block";
    }
  });
});

const temizleButonu = document.getElementById("temizle");

temizleButonu.addEventListener("click", () => {
  kalkisNoktasi.selectedIndex = 0;
  varisNoktasi.selectedIndex = 0;
  varisNoktasi.querySelectorAll("option").forEach((option) => {
    option.style.display = "block";
  });
});
</script>
    </div>
    <button type="button" class="btn btn-primary " onclick="getRoute()">Güzergahı Getir</button>

    </div>

  <div id="map" style="height: auto; width: 100%;"  class="container"></div>




  </body>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
  ></script>

  <script>
    let map;
    let directionsService;
    let directionsRenderer;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        zoom: 7,
        center: { lat: 41.85, lng: -87.65 },
      });
      directionsService = new google.maps.DirectionsService();
      directionsRenderer = new google.maps.DirectionsRenderer();
      directionsRenderer.setMap(map);
    }

    function getRoute() {
      const kalkis = document.getElementById("kalkis").value;
      const varis = document.getElementById("varis").value;
      const request = {
        origin: kalkis,
        destination: varis,
        travelMode: "DRIVING",
      };
      directionsService.route(request, function (result, status) {
        if (status == "OK") {
          directionsRenderer.setDirections(result);
        } else {
          alert("Yol tarifi alınamadı: " + status);
        }
      });
    }
  </script>
</html>
