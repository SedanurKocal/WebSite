<!doctype html>
<html lang="tr-TR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/iletisim.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>İletişim</title>
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark text-white navbar-expand-lg navbar-fixed-top" id="top">
        
		<nav class="navbar navbar-expand-lg">            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
				<li class="nav-item">
                    <a class="nav-link" href="login.html">Giriş Yap</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cv.html">Öz Geçmişim</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sehrim.html">Kocaeli</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                </li>
                
              </ul>
            </div>
            
        </nav>        
    </div>
<div class="container">


<?php

error_reporting(0);

if(isset($_POST['gonder'])){
    
    $adiniz=$_POST["adiniz"];
    $soyadiniz=$_POST["soyadiniz"];
    $mailiniz=$_POST["mailiniz"];
    $cinsiyet=$_POST["cinsiyet"];
    $konu=$_POST["konu"];
    $dil=$_POST["dil"];
    $mesajiniz=$_POST["mesajiniz"];
    $Sehir=$_POST["Sehir"];
    $Durum=$_POST["Durum"];

        echo "Adınız Soyadınız : $adiniz $soyadiniz<br> ";
		echo "<br>Cinsiyetiniz : $cinsiyet <br>";
        echo "<br>Emailiniz : $mailiniz <br>";
        echo "<br>Konunuz : $konu <br>";
        echo "<br>mesajiniz : $mesajiniz<br>";
		echo "<br>Şehrinizin Plakası : $Sehir <br>";
    
   
}
else {
    echo "Başarılı";
}
?>
</div>
</body>
</html>