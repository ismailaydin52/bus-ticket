/*create database Busticket;
use Busticket;

create table Yolcular(
Id INT PRIMARY KEY AUTO_INCREMENT,
Ad varchar(255),
Soyad varchar(255),
Yaş int,
Cinsiyet varchar(255),
Telefon varchar(50)
);

create table Ödeme(
Ödeme_id INT PRIMARY KEY AUTO_INCREMENT,
Yolcu_id INT,
Card_numarası varchar(255),
Cvv varchar(10),
Son_kullanma_tarihi DATE,
FOREIGN KEY (Yolcu_id) REFERENCES Yolcular(ID)
);

create table Kart_Bilgileri(
Kart_id INT PRIMARY KEY AUTO_INCREMENT,
Yolcu_id INT,
Ödenecek_Tutar INT,
Bakiye INT,
FOREIGN KEY(Yolcu_id) REFERENCES Yolcular(Id)
);

create table Bilet_Bilgileri(
Güzergah_Bilgileri VARCHAR(255) PRIMARY KEY, //Sefer ID referans vermeli
Şoför_Adı VARCHAR(255),
Kalkış_Saat time,
Varış_Saat time,
Araba_Plakası VARCHAR(20)
);

create table Sefer_Bilgileri(
Sefer_ID INT PRIMARY KEY AUTO_INCREMENT,
YolculaID INT,
Kalkış_Yeri VARCHAR(255),
Varış_Yeri VARCHAR(255),
Mola_yeri VARCHAR(255),
FOREIGN KEY(Sefer_ID) REFERENCES Yolcular(ID)
);

create table Açığa_Alınan_Biletler(
TC_Kimlik_Numarası INT,
PNR_Kodu INT,
Açık_Bilet_ID INT,
Gidilen_Yer VARCHAR(255),
QR_Kodu INT
);

CREATE TABLE Rezervasyonlar(
Rezervasyon_ID INT PRIMARY KEY AUTO_INCREMENT,
Yolcu_ID INT,
Kalkış_Yeri VARCHAR(255),
Varış_Yeri VARCHAR(255),
Ödenen_Tutar INT,
Bakiye INT,
Koltuk_Numarası INT,
Bilet_ID INT,
FOREIGN KEY(Yolcu_ID) REFERENCES Yolcular(Id),
FOREIGN KEY(Bilet_ID) REFERENCES Yolcular(Id)
);

Create table Aktif_Bilet_Bilgileri(
Aktif_ID INT PRIMARY KEY AUTO_INCREMENT,
Koltuk_Numarası INT,
Kalkış_Yeri VARCHAR(255),
Varış_Yeri VARCHAR(255),
Ödenecek_Tutar INT,
Yolcu_AktifID INT,
FOREIGN KEY(Yolcu_AktifID) REFERENCES Yolcular(Id),
FOREIGN KEY(Aktif_ID) REFERENCES Rezervasyonlar(Rezervasyon_ID)
);
/* Veri Ekleme*
/*INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(1,"Melike","Alkan",22,"Kadın",5551234567);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(2,"Hasan","Yücel",43,"Erkek",554333789);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(3,"Ayşe","Zorlu",35,"Kadın",5543554613);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(4,"Azra","Zorlu",25,"Kadın",5554567899);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(5,"Sera","Yılmaz",32,"Kadın",5324448899); 
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(6,"Ali","Akça",56,"Erkek",532223344);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(7,"Ahmet","Korkmaz",38,"Erkek",534667788);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(8,"Mehmet","Korkmaz",29,"Erkek",5398765544);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(9,"Hüseyin","Çamcı",65,"Erkek",5543322615);*/
/*INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Son_kullanma_tarihi)values(12,8,111111,12-08-2024);*/
/*INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Son_kullanma_tarihi)values(15,7,222222,"2024-03-04 14:30:00");
UPDATE ödeme
SET Son_kullanma_tarihi = '2024-05-01'
WHERE Ödeme_id = 12;*/
/*UPDATE ödeme SET CVV=123 WHERE Ödeme_id=12;
UPDATE ödeme SET CVV=127 WHERE Ödeme_id=15;
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(17,5,333333,129,2028-04-01);
UPDATE ödeme
SET Son_kullanma_tarihi = '2024-08-01'
WHERE Ödeme_id = 17;
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(22,3,555555,159,'2027-07-07');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(32,2,999999,189,'2028-08-08');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(62,1,123456,229,'2027-08-08');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(69,1,12336,239,'2024-04-04');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(99,9,125556,332,'2030-04-04');
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(8,8,"İstanbul","İzmir","Bursa");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(7,8,"İstanbul","Çanakkale","Bozcaada");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(9,9,"Kocaeli","İzmir","Yalova");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(3,9,"Çanakkale","İstanbul","Ayvalık");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(2,4,"Kocaeli","Zonguldak","Karabük");
INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(1,8,"İstanbul","İzmir",750,1200,22,4); 
INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(2,9,"Kocaeli","Zonguldak",550,1000,25,5);
INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(4,3,"Kocaeli","İzmir",750,1200,35,7);
/*INSERT INTO kart_bilgileri(Kart_id,Yolcu_id,Ödenecek_Tutar,Bakiye)values(2,3,550,1000)
INSERT  INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(3,9,550,1000);
INSERT  INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(4,8,750,1200);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(8,9,750,1500);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(9,2,550,1800);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(10,5,750,2000)
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(1,"Melike","Alkan",22,"Kadın",5551234567);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(2,"Hasan","Yücel",43,"Erkek",554333789);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(3,"Ayşe","Zorlu",35,"Kadın",5543554613);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(4,"Azra","Zorlu",25,"Kadın",5554567899);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(5,"Sera","Yılmaz",32,"Kadın",5324448899); 
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(6,"Ali","Akça",56,"Erkek",532223344);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(7,"Ahmet","Korkmaz",38,"Erkek",534667788);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(8,"Mehmet","Korkmaz",29,"Erkek",5398765544);
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon)values(9,"Hüseyin","Çamcı",65,"Erkek",5543322615);*/
/*INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Son_kullanma_tarihi)values(12,8,111111,12-08-2024);*/
/*INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Son_kullanma_tarihi)values(15,7,222222,"2024-03-04 14:30:00");
UPDATE ödeme
SET Son_kullanma_tarihi = '2024-05-01'
WHERE Ödeme_id = 12;*/
/*UPDATE ödeme SET CVV=123 WHERE Ödeme_id=12;
UPDATE ödeme SET CVV=127 WHERE Ödeme_id=15;
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(17,5,333333,129,2028-04-01);
UPDATE ödeme
SET Son_kullanma_tarihi = '2024-08-01'
WHERE Ödeme_id = 17;
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(22,3,555555,159,'2027-07-07');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(32,2,999999,189,'2028-08-08');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(62,1,123456,229,'2027-08-08');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(69,1,12336,239,'2024-04-04');
INSERT INTO ödeme(Ödeme_id,Yolcu_id,Card_numarası,Cvv,Son_kullanma_tarihi)values(99,9,125556,332,'2030-04-04');
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(8,8,"İstanbul","İzmir","Bursa");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(7,8,"İstanbul","Çanakkale","Bozcaada");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(9,9,"Kocaeli","İzmir","Yalova");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(3,9,"Çanakkale","İstanbul","Ayvalık");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_Yeri)values(2,4,"Kocaeli","Zonguldak","Karabük");
INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(1,8,"İstanbul","İzmir",750,1200,22,4); */
/*INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(2,9,"Kocaeli","Zonguldak",550,1000,25,5);
INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(4,3,"Kocaeli","İzmir",750,1200,35,7);*/
/*INSERT INTO kart_bilgileri(Kart_id,Yolcu_id,Ödenecek_Tutar,Bakiye)values(2,3,550,1000)
INSERT  INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(3,9,550,1000);
INSERT  INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(4,8,750,1200);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(8,9,750,1500);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(9,2,550,1800);
INSERT INTO kart_bilgileri(Kart_id,Yolcu_ID,Ödenecek_Tutar,Bakiye)values(10,5,750,2000)
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası)values("İstanbul-İzmir","Ahmet Kaçar",'08:00:00','17:00:00',"34 ABC 234");
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası)values("Kocaeli-İzmir","Behçet Uçmaz",'13:05:00','20:15:00',"41 DEF 534");
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası)values("Kocaeli-Zonguldak","Remzi Tekin",'10:15:00','20:15:00',"41 ZCX 644");
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası)values("İzmir-İstanbul","Rıfat Asil",'7:30:00','16:30:00',"25 TMS 888");*/
/*UPDATE sefer_bilgileri SET yolcu_sayısı=150 WHERE Sefer_ID=2;*/
/*UPDATE sefer_bilgileri SET yolcu_sayısı=250 WHERE Sefer_ID=3;
UPDATE sefer_bilgileri SET yolcu_sayısı=100 WHERE Sefer_ID=5;
UPDATE sefer_bilgileri SET yolcu_sayısı=50 WHERE Sefer_ID=7;
UPDATE sefer_bilgileri SET yolcu_sayısı=400 WHERE Sefer_ID=8;
UPDATE sefer_bilgileri SET yolcu_sayısı=350 WHERE Sefer_ID=9;
ALTER TABLE yolcular ADD COLUMN Tc_Kimlik INT;
ALTER TABLE yolcular ADD COLUMN Meslek VARCHAR(50);
ALTER TABLE yolcular ADD COLUMN eposta VARCHAR(255) UNIQUE;
UPDATE yolcular SET Meslek="Öğretmen" WHERE ID=1;
UPDATE yolcular SET Meslek="Hemşir" WHERE ID=2;
UPDATE yolcular SET Meslek="Polis" WHERE ID=3;
UPDATE yolcular SET Meslek="Avukat" WHERE ID=4;
UPDATE yolcular SET Meslek="Doktor" WHERE ID=5;
UPDATE yolcular SET Meslek="Yazılımcı" WHERE ID=6;
UPDATE yolcular SET Meslek=" Savcı" WHERE ID=7;
UPDATE yolcular SET Meslek="Esnaf" WHERE ID=8;
UPDATE yolcular SET Meslek="Serbest Meslek" WHERE ID=9;
UPDATE yolcular SET Tc_Kimlik=21130705777 WHERE ID=1;
UPDATE yolcular SET Tc_Kimlik=20113344990 WHERE ID=2;
UPDATE yolcular SET Tc_Kimlik=22113344999 WHERE ID=3;
UPDATE yolcular SET Tc_Kimlik=20113344990 WHERE ID=4;
UPDATE yolcular SET Tc_Kimlik=24113344880 WHERE ID=5;
UPDATE yolcular SET Tc_Kimlik=20116655778 WHERE ID=6;
UPDATE yolcular SET Tc_Kimlik=22883344000 WHERE ID=7;
UPDATE yolcular SET Tc_Kimlik=29114444666 WHERE ID=8;
UPDATE yolcular SET Tc_Kimlik=28113344560 WHERE ID=9;
UPDATE yolcular SET eposta="melikealkan@gmail.com" WHERE ID=1;
UPDATE yolcular SET eposta="hasanyucel@gmail.com" WHERE ID=2;
UPDATE yolcular SET eposta="aysezorlu@gmail.com" WHERE ID=3;
UPDATE yolcular SET eposta="azrazorlu@gmail.com" WHERE ID=4;
UPDATE yolcular SET eposta="serayilmaz@gmail.com" WHERE ID=5;
UPDATE yolcular SET eposta="aliakca@gmail.com" WHERE ID=6;
UPDATE yolcular SET eposta="ahmetkorkmaz@gmail.com" WHERE ID=7;
UPDATE yolcular SET eposta="mehmetkorkmaz@gmail.com" WHERE ID=8;
UPDATE yolcular SET eposta="huseyincamcı@gmail.com" WHERE ID=9;
UPDATE bilet_bilgileri SET Tarih="2024-02-02" WHERE Şoför_Adı="Ahmet Kaçar";
UPDATE bilet_bilgileri SET Tarih="2024-02-03" WHERE Şoför_Adı="Rıfat Asil";
UPDATE bilet_bilgileri SET Tarih="2024-02-04" WHERE Şoför_Adı="Behçet Uçmaz";
UPDATE bilet_bilgileri SET Tarih="2024-02-05" WHERE Şoför_Adı="Remzi Tekin";
ALTER TABLE sefer_bilgileri ADD COLUMN Tarih DATE;
UPDATE sefer_bilgileri SET Sefer_Saatleri="08:00:00-17:00:00" WHERE Sefer_ID=8;
ALTER TABLE sefer_bilgileri ADD COLUMN Kalkış_Saati TIME;
ALTER TABLE sefer_bilgileri ADD COLUMN Varış_Saati TIME;
UPDATE sefer_bilgileri SET Kalkış_Saati="08:00" WHERE Sefer_ID=8;
UPDATE sefer_bilgileri SET Varış_Saati="17:00" WHERE Sefer_ID=8;
UPDATE sefer_bilgileri SET Tarih="2024-02-02" WHERE Sefer_ID=8;
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(1,1,"İstanbul","İzmir","Bursa","200","2024-02-02","12:00","21:00")
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(10,9,"İstanbul","İzmir","Bursa","400","2024-03-02","00:00","09:00");
UPDATE sefer_bilgileri SET Tarih="2024-02-04" WHERE Sefer_ID=9;
UPDATE sefer_bilgileri SET Kalkış_Saati="13:05" WHERE Sefer_ID=9;
UPDATE sefer_bilgileri SET Varış_Saati="20:15" WHERE Sefer_ID=9;
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(11,9,"Kocaeli","İzmir","Yalova","200","2024-02-04","05:00","13:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(12,5,"Kocaeli","İzmir","Yalova","250","2024-02-04","21:00","00:00");*/
/*UPDATE sefer_bilgileri SET Tarih="2024-02-02" WHERE Sefer_ID=8;*
use busticket;
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(14,"Halime","Yıldız",55,"Kadın",5553334488,2247483647,"Öğretmen","halimeyildiz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(15,"Mustafa","Öztürk",75,"Erkek",5553334488,21474836472,"Albay","mustafaöztürk@gmail.com");*/
/*INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(16,"Melek","Yılmaz",15,"Kadın",22233311488,29912744543,"Öğrenci","melekyılmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(17,"Irmak","Akça",35,"Kadın",1113332408,29914836247,"Öğretmen","ırmakakca@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(18,"Ebrar","Yalvaç",17,"Kadın",1112224488,2991176899,"Öğrenci","ebraryalvac@gmail.com"); 
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(19,"Semih","Yıldırım",37,"Erkek",1115552288,29917944199,"Doktor","semihyilidirim@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(20,"Sercan","Yıldırım",27,"Erkek",9995552288,29918944109,"Doktor","sercanyilidirim@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(21,"Selim","Yıldırım",37,"Erkek",3335552288,29915944129,"Mimar","selimyilidirim@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(22,"Adnan","Yılmaz",77,"Erkek",3335552288,28912942129,"Emekli","adnanyılmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(23,"Aziz","Yılmaz",37,"Erkek",22251232288,29915940119,"Mimar","azizyılmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(24,"Acar","Yıldırım",47,"Erkek",1235552288,29912949129,"Mühendis","acaryılmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(25,"Birgül","Açmaz",21,"Kadın",1835952088,27912849109,"Mühendis","birgülacmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(26,"Birce","Açmaz",26,"Kadın",1033452188,27912979139,"Aşçı","birceacmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(27,"Birsen","Açmaz",31,"Kadın",1595552288,27913949129,"Avukat","birsenacmaz@gmail.com");
/*update yolcular SET Tc_Kimlik=29911240122 WHERE Id=15;
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(28,"Cemal","Abalı",21,"Erkek",1535952088,26912849109,"Mühendis","Cemalabalı@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(29,"Cemil","Abalı",26,"Erkek",1233452188,26912979139,"Aşçı","cemilabalı@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(30,"Cem","Abalı",22,"Erkek",1911952088,26912849109,"Mühendis","cemabalı@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(31,"Ceyda","Kaya",25,"Kadın",1810902088,21812948129,"Öğretmen","ceydakaya@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(32,"Ceylin","Kaya",32,"Kadın",1300958088,21812944109,"Avukat","ceylinkaya@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(33,"Cemre","Kaya",18,"Kadın",1918954088,21812829199,"Öğrenci","cemrekaya@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(34,"Deniz","Ala",18,"Kadın",4310954588,23812729189,"Öğrenci","denizala@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(35,"Dilek","Ala",22,"Kadın",4410954588,23804779189,"Öğrenci","dilekala@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(36,"Derya","Ala",20,"Kadın",4910954578,23812000159,"Öğrenci","deryaala@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(37,"Aylin","Almaz",45,"Kadın",4012954578,2081222159,"Tercüman","aylinalmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(38,"Ali","Almaz",48,"Erkek",4816954478,20819050159,"Tercüman","alialmaz@gmail.com");
INSERT INTO yolcular(Id,Ad,Soyad,Yaş,Cinsiyet,Telefon,Tc_Kimlik,Meslek,eposta) values(39,"Arya","Almaz",8,"Kadın",4810550578,26812080139,"Öğrenci","aryaalmaz@gmail.com");
/*INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati)values
(13,1,"Kocaeli","Zonguldak","Karabük","2024-02-05",160,"16:00","20:00");
Update sefer_bilgileri SET Kalkış_Saati="00:00"  WHERE Sefer_ID=2;
Update sefer_bilgileri SET Kalkış_Saati="00:00"  WHERE Sefer_ID=2;
Update sefer_bilgileri SET Varış_Saati="04:00"  WHERE Sefer_ID=2;
Update sefer_bilgileri SET Varış_Yeri="Kocaeli"  WHERE Sefer_ID=7;
Update sefer_bilgileri SET Mola_yeri="Yalova"  WHERE Sefer_ID=7;*
Update sefer_bilgileri SET Kalkış_Saati="08:00" where Sefer_ID=1;
Update sefer_bilgileri SET Varış_Saati="12:00"  WHERE Sefer_ID=1;
Update sefer_bilgileri SET Kalkış_Saati="16:00"  WHERE Sefer_ID=8;
update sefer_bilgileri SET Varış_Saati="20:00"  WHERE Sefer_ID=8;
update sefer_bilgileri SET Tarih="2024-02-05" where Sefer_ID=8;
update sefer_bilgileri SET Kalkış_Saati="00:00" WHERE Sefer_ID=10;
update sefer_bilgileri SET Varış_Saati="05:00" WHERE Sefer_ID=10;
update sefer_bilgileri SET Kalkış_Saati="08:00" WHERE Sefer_ID=9;
update sefer_bilgileri SET Varış_Saati="14:00" WHERE Sefer_ID=9;
update sefer_bilgileri SET Kalkış_Saati="21:00" WHERE Sefer_ID=12;
update sefer_bilgileri SET Varış_Saati="00:04" WHERE Sefer_ID=12; 
*/ 
/*update sefer_bilgileri SET Kalkış_Saati="13:00" WHERE Sefer_ID=11;
update sefer_bilgileri SET Varış_Saati="21:00" WHERE Sefer_ID=11;
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(14,2,"İstanbul","Kocaeli","Yalova",250,"2024-02-05","08:00","12:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(15,3,"İstanbul","Kocaeli","Yalova",350,"2024-02-05","16:00","20:00");*/
/*UPDATE sefer_bilgileri SET Kalkış_Saati="00:00" where Sefer_ID=7;
/*UPDATE sefer_bilgileri SET Varış_Saati="3:00" where Sefer_ID=7;
UPDATE sefer_bilgileri SET Varış_Saati="4:00" where Sefer_ID=12; */
/*INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(16,2,"İstanbul","Zonguldak","Karabük",150,"2024-02-05","04:00","14:00");
 INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(17,5,"İstanbul","Zonguldak","Karabük",350,"2024-02-05","12:00","22:00");
 INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(18,8,"İstanbul","Zonguldak","Karabük",50,"2024-02-05","20:00","00:00");*/
 /*INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(19,7,"Kocaeli","İstanbul","Yalova",100,"2024-02-05","06:00","08:00");
 INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(20,8,"Kocaeli","İstanbul","Yalova",150,"2024-02-05","14:00","16:00");
 INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(21,9,"Kocaeli","İstanbul","Yalova",30,"2024-02-05","22:00","00:00"); 
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(22,2,"Zonguldak","İzmir","Karabük",500,"2024-02-06","06:00","12:00"); 
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(23,4,"Zonguldak","İzmir","Karabük",550,"2024-02-06","14:00","20:00"); 
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(24,5,"Zonguldak","İzmir","Karabük",300,"2024-02-06","22:00","00:00"); 
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(25,5,"Zonguldak","Kocaeli","Karabük",200,"2024-02-07","06:00","10:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(26,1,"Zonguldak","Kocaeli","Karabük",310,"2024-02-07","14:00","18:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(27,5,"Zonguldak","Kocaeli","Karabük",320,"2024-02-07","22:00","00:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(28,22,"Zonguldak","İstanbul","Karabük",345,"2024-02-08","06:00","10:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(29,23,"Zonguldak","İstanbul","Karabük",155,"2024-02-08","14:00","18:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(30,24,"Zonguldak","İstanbul","Karabük",45,"2024-02-08","22:00","00:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(31,25,"İzmir","İstanbul","Bursa",45,"2024-02-09","04:00","12:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(32,26,"İzmir","İstanbul","Bursa",45,"2024-02-09","12:00","22:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(36,27,"İzmir","Kocaeli","Bursa",105,"2024-02-10","4:00","12:00");
/*INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(34,28,"İzmir","Kocaeli","Bursa",85,"2024-02-10","12:00","22:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(35,29,"İzmir","Kocaeli","Bursa",95,"2024-02-10","20:00","7:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(37,30,"İzmir","Zonguldak","Karabük",95,"2024-02-11","4:00","12:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(38,31,"İzmir","Zonguldak","Karabük",105,"2024-02-11","12:00","20:00");
INSERT INTO sefer_bilgileri(Sefer_ID,YolculaID,Kalkış_Yeri,Varış_Yeri,Mola_yeri,yolcu_sayısı,Tarih,Kalkış_Saati,Varış_Saati) values(39,32,"İzmir","Zonguldak","Karabük",45,"2024-02-11","20:00","7:00");

/*Alter Table
ALTER TABLE Bilet_Bilgileri ADD COLUMN Güzergah_ID INT,
ADD FOREIGN KEY(Güzergah_ID) REFERENCES sefer_bilgileri(Sefer_ID);
 */
 /*Update Table
 update bilet_bilgileri SET Güzergah_ID=1 where Şoför_Adı="Ahmet Kaçar";
update bilet_bilgileri SET Güzergah_ID=33 where Şoför_Adı="Rıfat Asil";
update bilet_bilgileri SET Güzergah_ID=12 where Şoför_Adı="Behçet Uçmaz";
update bilet_bilgileri SET Güzergah_ID=13 where Şoför_Adı="Remzi Tekin";
 
 INSERT INTO rezervasyonlar(Rezervasyon_ID,Yolcu_ID,Kalkış_Yeri,Varış_Yeri,Ödenen_Tutar,Bakiye,Koltuk_Numarası,Bilet_ID) values(14,25,"İstanbul","Kocaeli",250,1250,25,15);
 INSERT INTO aktif_bilet_bilgileri(Aktif_ID,Koltuk_Numarası,Kalkış_Yeri,Varış_Yeri,Ödenecek_Tutar,Yolcu_AktifID) values(14,25,"İstanbul","Kocaeli",250,2);
 ALTER TABLE açığa_alınan_biletler DROP QR_Kodu;
  DROP TABLE açığa_alınan_biletler
create table Açığa_Alınan_Biletler(
TC_Kimlik_Numarası INT,
PNR_Kodu VARCHAR(255),
Açık_Bilet_ID INT,
Gidilen_Yer VARCHAR(255),
);
UPDATE bilet_bilgileri SET Araba_Plakası='35 TMS 888' WHERE Güzergah_ID=33;
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası,Tarih,Güzergah_ID) values('Zonguldak-İstanbul','Kemal Türkmen','06:00','10:00','67 FGC 775','2024-02-08',28);
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası,Tarih,Güzergah_ID) values('Zonguldak-İzmir','Ali Uçar','14:00','20:00','67 EXZ 665','2024-02-06',23);
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası,Tarih,Güzergah_ID) values('Zonguldak-Kocaeli','Nebahat Kaçmaz','22:00','00:00','67 AGF 225','2024-02-07',27);
INSERT INTO bilet_bilgileri(Güzergah_Bilgileri,Şoför_Adı,Kalkış_Saat,Varış_Saat,Araba_Plakası,Tarih,Güzergah_ID) values('İstanbul-Kocaeli','Eymen Üçer','08:00','12:00','35 XYZ 225','2024-02-05',14);
ALTER TABLE açığa_alınan_biletler DROP COLUMN PNR_Kodu;
INSERT INTO açığa_alınan_biletler(TC_Kimlik_Numarası,Açık_Bilet_ID,Gidilen_Yer) values(21245556782,4,"İstanbul");
INSERT INTO açığa_alınan_biletler(TC_Kimlik_Numarası, Açık_Bilet_ID,Gidilen_Yer) values(22344477711,5,"İzmir");
INSERT INTO açığa_alınan_biletler(TC_Kimlik_Numarası, Açık_Bilet_ID,Gidilen_Yer) values(22344477711,5,"İzmir"); 


-- bANLARIN GUCUNU tESTME Adına








