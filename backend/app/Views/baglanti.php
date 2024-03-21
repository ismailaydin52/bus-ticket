<?php
$vt_sunucu="localhost";
$vt_kullanıcı="root";
$vt_sifre="";
$vt_adı="busticket";

$baglan=mysqli_connect($vt_sunucu,$vt_kullanıcı,$vt_sifre,$vt_adı);

if(!$baglan){

    die("veritabanı bağlantısı başarısız".mysqli_connect_error());
}
else{
    echo "Bağlantı başarılı";
}

?>