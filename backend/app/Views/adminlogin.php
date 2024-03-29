<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>


  <!DOCTYPE html>

  <head>
    <title>Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body>
  <div class="container">
    <div class="row">
      <form action="<?php echo base_url("/admin") ?>" method="post">
        <h2 style="text-align: center;"> Admin Girişi</h2>
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-left:200px;">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="name">Kullanıcı Adı</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kullanıcı Adı" name="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
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
          if (username == "admin" && password == "umuttepe") {
            window.location.href = "<?php echo base_url("/admin") ?>";
          } else {
            alert("Kullanıcı adı veya şifre yanlış!");
          }
        })
      });
    </script>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $adminuser = test_giris($_POST["username"]);
  $adminpassword = test_giris($_POST["password"]);
}

function test_giris($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>