function hesapla() {
	var v1=document.getElementById('s1').value;
	var v1s=v1*56.87;


	var ykt=document.getElementById("yakit").value;
	var v2=document.getElementById("s2").value;
	

	if(ykt == 12)
	{
		var v2s=v2/ykt*12*1.68;
	}
	else if(ykt == 22)
	{
		var v2s=v2/ykt*12*2.6;
	}
	else if(ykt == 19)
	{
		var v2s=v2/ykt*12*2.24;

	}

	var v3=document.getElementById("s3").value;
	var v3s=v3/1.5*12*0.492/1000;


	var v4=document.getElementById("s4").value;
	var isi=document.getElementById('isi').value;

if (isi == "dgz"){
	var v4s=v4/3.2*12*2.2;
}
else if(isi == "kmr"){
	var v4s=v4*2.04*8*12;
}
else if(isi == "lpg"){
	var v4s=v4/12*12*1.68;
}
else {
	var v4s=v4*0.054*8*12;
}
var toplam=(v1s+v2s+v3s+v4s)/1000;
toplam=toplam.toFixed(3);
 
document.getElementById('sonuc').innerHTML=toplam+" Ton CO2 Salınımı";


	if (toplam<4.000) {
		document.getElementById("yaz").innerHTML="ortalamanın %50ninn altında"
	}
else
{
document.getElementById("yaz").innerHTML="ortalamanın %50ninn üstünde"	
}

  


}
