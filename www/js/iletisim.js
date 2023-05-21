function iletisimKontrol(){
    var adiniz=document.getElementById("adiniz").value;
    var soyadiniz=document.getElementById("soyadiniz").value;
    var mailiniz=document.getElementById("mailiniz").value;
    var mesajiniz=document.getElementById("mesajiniz").value;
    var uyari=document.getElementById("uyari");

    if(adiniz==""){
        uyari.style.visibility="visible";
        uyari.innerHTML="Ad Girilmedi!";
        return false;}
		
	 else if(soyadiniz==""){
        uyari.style.visibility="visible";
        uyari.innerHTML="Soyad Girilmedi!";
	 return false;}
	 
	 	
	 else if(mailiniz==""){
        uyari.style.visibility="visible";
        uyari.innerHTML="Mail Girilmedi!";
	 return false;}
	 
	 	
	 else if(mesajiniz==""){
        uyari.style.visibility="visible";
        uyari.innerHTML="Mesaj Girilmedi!";
	 return false;}
	 
	else{
		alert ("Basarili");
        return true;
		
    }
    
}
