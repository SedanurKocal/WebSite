function loginDenetle(){
    var kulAd="g221210352@sakarya.edu.tr";
    var sifre="g221210352";
    var KullaniciAdi=document.getElementById("kullaniciAdi").value;
    var Parola=document.getElementById("parola").value;
    var Hata=document.getElementById("hata");

    if(KullaniciAdi=="" || Parola==""){
        Hata.style.visibility="visible";
        Hata.innerHTML="Kullanıcı adı ya da Parola boş!";
        return false;
    }
    else if((KullaniciAdi!="" && KullaniciAdi!=kulAd) || (Parola!="" && Parola!=sifre)){
        Hata.style.visibility="visible";
        Hata.innerHTML="Kullanıcı adı ya da Parola yanlış!";
        return false;
    }
    else{
		alert ("Hoşgeldiniz g221210352");
        return true;
		
    }
}
