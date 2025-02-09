<!DOCTYPE html>
<html>

<head>
  <title>Güzergahlar</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJTVsBHAKFJS3yX0JWGEZ_ZAUJ7j8Lo8o&libraries=places"></script>



  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
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
    width: 60%;
    /* İki formun arasında boşluk bırakmak için genişlik ayarları */
  }

  form {
    padding: -10px;
    /* Form içeriğini kenarlardan uzaklaştırmak için */
    margin-top: 80px;
    margin-left: 90px;
  }
</style>
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/linearicons.css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/owl.carousel.css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/font-awesome.min.css" />
<link href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/nice-select.css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/magnific-popup.css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/bootstrap.css" />
<link rel="stylesheet" href="http://localhost/BusTicket-CI/assets/frontend/css/main.css" />
<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/BusTicket-CI/assets/datepicker/dist/css/bootstrap-datepicker.min.css" />
<link href="http://localhost/BusTicket-CI/assets/frontend/select2/css/select2.min.css" rel="stylesheet" />

<body onload="initMap()">
  <div id="map" style="height: 400px; width: 100%;"></div>

  <header id="header" id="home" style="background-color: #007bff;">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.html"><strong><b style="color: azure;">Umuttepe Turizim</b></strong></h3></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu">
              <a href="http://localhost/myci5/public/">Home</a>
            </li>
            <li>
              <a href="http://localhost/myci5/public/g%C3%BCzergahlar">Güzergahlar</a>
            </li>
            <li class="menu">
              <a href="http://localhost/BusTicket-CI/tiket/cektiket">Bilet Bilgileri</a>
            </li>


            <a href="http://localhost/myci5/public/kay%C4%B1tol">Kayıt Ol</a>
            </li>
            <li><a href="http://localhost/myci5/public/login">giriş</a></li>

          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </div>
  </header>

  <!-- güzergah seç  -->
  <div class="container flex flex-row justify-center align-center w-full h-full" style="margin-left:15%;">
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
    </div>
  </div>
  <div style="margin-left:30% ; margin-top:5%;">

    <button type="button" class="btn btn-primary " onclick="getRoute()">Güzergahı Getir</button>
    <a href="http://localhost/myci5/public/seferkontrol"><button type="button" class="btn btn-primary" style="margin-left: 30%; display:block" id="hedef buton" onclick='(function(){ localStorage.setItem("kalkis", document.querySelector("#kalkis").value); localStorage.setItem("varis", document.querySelector("#varis").value); })();'>seferleri göster</button></a>

  </div>


  <div class="custom-container">
    <h2>Sefer Seçimi</h2>
    <div class="custom-scrollable-container">
      <div class="custom-scrollable-content">
        <div class="row">
          <div id="targetElement">
            <div class="block">
              <h2>Kocaeli-İstanbul</h2>
            </div>
            <div class="block">
              <h2>İstanbul-İzmir</h2>
            </div>
            <div class="block">
              <h2>İzmir-İstanbul</h2>
            </div>
            <div class="block">
              <h2>İzmir-Kocaeli</h2>
            </div>
            <div class="block">
              <h2>Kocaeli-İzmir</h2>
            </div>
            <div class="block">
              <h2>Zonguldak-Kocaeli</h2>
            </div>
            <div class="block">
              <h2>Kocaeli-Zonguldak</h2>
            </div>
          </div>

        </div>
      </div>
      <!--<a href="http://localhost/myci5/public/koltuksec">
    <button type="submit">koltuk seç</button></a>-->
    </div>

    <style>
      .block {
        overflow: hidden;
        background: #ffff;
        padding: 1rem;
        margin: 0 0 1rem 0;
      }

      .block h2 {
        margin: 0 0 0.5rem 0;
      }




      .custom-container {
        max-width: 200%;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .custom-container form {
        display: flex;
        flex-direction: column;
      }

      .custom-container h2 {
        margin-bottom: 20px;
      }

      .custom-scrollable-container {
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
      }

      .custom-scrollable-content {
        padding: 10px;
      }

      .custom-scrollable-content label {
        display: block;
        margin-bottom: 10px;
      }

      button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #0056b3;
      }

      .block {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 5px;
        cursor: pointer;
      }

      .selected {
        background-color: lightblue;
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const tableRows = document.querySelectorAll('tr');
        tableRows.forEach(row => {
          row.addEventListener('click', function() {
            localStorage.setItem('selectedText', this.innerText);
            window.location.href = 'http://localhost/myci5/public/seferkontrol';
          });
        });
      });
    </script>



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
  </div>
  <div id="map" style="height: auto; width: 100%;" class="container"></div>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
  let map;
  let directionsService;
  let directionsRenderer;

  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 7,
      center: {
        lat: 41.85,
        lng: -87.65
      },
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
    directionsService.route(request, function(result, status) {
      if (status == "OK") {
        directionsRenderer.setDirections(result);
      } else {
        alert("Yol tarifi alınamadı: " + status);
      }
    });
  }
</script>
<script>
  // Butonu ve hedef öğeyi seç
  const toggleButton = document.getElementById('toggleButton');
  const targetElement = document.getElementById('targetElement');

  // Butona tıklandığında görünürlüğü değiştir
  toggleButton.addEventListener('click', () => {
    if (targetElement.style.display === 'none') {
      targetElement.style.display = 'block';
    } else {
      targetElement.style.display = 'none';
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tableRows = document.querySelectorAll('td');
    tableRows.forEach(row => {
      row.addEventListener('click', function() {
        localStorage.setItem('selectedText', this.innerText);
        window.location.href = 'http://localhost/myci5/public/seferkontrol';
      });
    });
  });
</script>
<script>
  const blocks = document.querySelectorAll('.block');

  // Her bloğa tıklama olayı ekle
  blocks.forEach(block => {
    block.addEventListener('click', () => {
      // Tüm bloklardan seçili sınıfını kaldır
      blocks.forEach(b => {
        b.classList.remove('selected');
      });

      // Tıklanan bloğa seçili sınıfını ekle
      block.classList.add('selected');
    });
  });
</script>
<script>


</script>

</html>