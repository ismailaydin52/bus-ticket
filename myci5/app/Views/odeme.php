<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Umuttepe Turizim Ödeme Sayfası</title>
  </head>
  <body>
    <div class="container shadow mt-3 mb-2 main">
        <div class="row">
            <h1>Ödeme Sayfası</h1><hr><br>
        </div>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    position: relative;
}
button{
    outline: none;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    font-size: 1.5rem;
    color: #ffffff;
    margin: 30px;
    border-radius: 20px;
    box-shadow: 1px 6px 12px 0px rgb(0 0 0 / 13%);
    cursor: pointer;
    transition: .2s all ease-in-out;
}
button:hover{
    background-color: orange;
}
#popup{
    display: none;
}
.popup-container{
    height: 100vh;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color: rgb(96 95 127 / 70%);
    position: absolute;
    top: 0;
    left: 0;
}
.popup{
    background-color: #ffffff;
    padding: 20px 30px;
    width: 50%;
    border-radius: 15px;
}
.close-popup{
    display: flex;
    justify-content: flex-end;
}
.close-popup a{
    font-size: 1.2rem;
    background-color: cornflowerblue;
    color: #fff;
    padding: 5px 10px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 10px;
    display: inline-block;
}
.popup > h2{
    font-size: 1.6rem;
    margin-bottom: 10px;
}
.popup > p{
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.popup-btn{
    display: inline-block;
    text-decoration: none;
    border: 2px solid rebeccapurple;
    padding: 5px 15px;
    border-radius: 20px;
    margin: 10px 0px;
    transition: .2s all ease-in;
}
.popup-btn:hover{
    background-color: cornflowerblue;
    color: #fff;
}
        </style>
        <div class="row">
            <form>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Ad-Soyad</label>
                        <input type="text" class="form-control" id="name">
                        <small class="form-text text-muted">Kart sahibinin adı ve soyadı</small>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Kart Numarası</label>
                        <input type="text" class="form-control" id="card-number">
                        <small class="form-text text-muted">Kart numaranızı girin</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label>Month</label>
                        <input type="text" class="form-control" id="sktarih-ay" placeholder="Son Kullanma Tarihi"> 
                        <small class="form-text text-muted">Kartın Son Kullanma Tarihi(Last Month)</small> 
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" id="sktarih-yil">
                        <small class="form-text text-muted">Kredi kartının son kullanma tarihi - Yıl</small> 
                    </div>
                    <div class="col-md-4 form-group">
                        <label>CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="CVV">
                        <small class="form-text text-muted">Kredi kartının arkasında bulunan 3 haneli güvenlik kodu</small>
                    </div>
                </div><br>
                <div class="mb-4">
                
    </div>
</div>          
                    
                </div>
            </form>
            <button type="submit" class="btn btn-primary" id="clickBtn" style="margin-left: 150px;">Kredi Kartıyla Öde</button>
            <div id="popup">
            <div class="popup-container">
            <div class="popup">
                <div class="close-popup" id="closeBtn"><a href="#">X</a></div>
                <h2>Ödeme Alındı</h2>
                <p>
                    Ödemeniz başarıyla alındı! Biletinizi kontrol edin
                </p>
                <a href="http://localhost/myci5/public/biletkontrol%C3%BC" class="popup-btn">Bilet Kontrolü</a> 
            </div>
        </div>
    </div>
        </div>
        <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d090ffa96b.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#name").keyup(function(){
                var name = $("#name").val();
                $(".credit-author").text(name)
            });
            $("#sktarih-ay").keyup(function(){
                var sktay = $("#sktarih-ay").val();
                $(".skt-ay").text(sktay)
            });
            $("#sktarih-yil").keyup(function(){
                var sktyil = $("#sktarih-yil").val();
                $(".skt-yil").text(sktyil)
            });
            $("#card-number").keyup(function(){
                var cartnumber = $("#card-number").val();
                var cartnumber1 = cartnumber.slice(0,4) + " ";
                var cartnumber2 = cartnumber.slice(4,8) + " ";
                var cartnumber3 = cartnumber.slice(8, 12) + " ";
                var cartnumber4 = cartnumber.slice(12,16);
                var cart = cartnumber1+cartnumber2+cartnumber3+cartnumber4;
                $(".credit-card-number").text(cart)
            });
            $("#card-number").keyup(function(){
                var cartnumber = $("#card-number").val();
                var cartnumber1 = cartnumber.slice(0,1);
                if(cartnumber1=='5'){
                    $(".carttype").addClass("fa-cc-mastercard");
                }
                if(cartnumber1=='4'){
                    $(".carttype").addClass("fa-cc-visa");
                }
            });
        });
    </script>
    <script>
       const clickBtn = document.getElementById("clickBtn");
const popup = document.getElementById("popup");
const closeBtn = document.getElementById("closeBtn");

clickBtn.addEventListener('click', ()=>{
    popup.style.display = 'block';
});
closeBtn.addEventListener('click', ()=>{
    popup.style.display = 'none';
});
popup.addEventListener('click', ()=>{
    popup.style.display = 'none';
});


    </script>


    

  </body>
</html>