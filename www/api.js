async function ara(){
	let api="https://randomuser.me/api/";
	const res =await fetch(api);
	const data =await res.json();
	let veri= data.results[0];
	console.log(veri);
	
	document.getElementById("img").innerHTML=
	"<img src=" +veri.picture.large +">";
}