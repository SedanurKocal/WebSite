function girisKontrol(){
    var Kmail="g221210352@sakarya.edu.tr";
    var sifre="g221210352";
    var mailiniz=document.getElementById("mailiniz").value;
    var Parola=document.getElementById("parola").value;
    var Uyari=document.getElementById("uyari");

    if(mailiniz=="" || Parola==""){
        Uyari.style.visibility="visible";
        Uyari.innerHTML="Kullanıcı adı ya da Parola boş!";
        return false;
    }
    else if((mailiniz!="" && mailiniz!=Kmail) || (Parola!="" && Parola!=sifre)){
        Uyari.style.visibility="visible";
        Uyari.innerHTML="Kullanıcı adı ya da Parola yanlış!";
        return false;
    }
    else{
		alert ("Hoşgeldiniz g221210352");
        return true;
		
    }
}
