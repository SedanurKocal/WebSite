<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="g221210352@sakarya.edu.tr";
    $sifre="g221210352";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz <br><hr>";
            echo "$parola";
        }
        else{
            header("Location:../login.html");
        }
    }
    else{
        header("Location:../login.html");
    }
}
else {
    header("Location:../login.html");
}
?>
