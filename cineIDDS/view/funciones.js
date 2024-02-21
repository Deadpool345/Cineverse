function sumar(){
	var x = ad.cont.value;
	if (ad.boleto.value*1<x) {

ad.boleto.value=ad.boleto.value*1+1;
ad.precio.value=ad.costo.value*ad.boleto.value;

	}else{
return false;
		
	}


}

function restar(){
if (ad.boleto.value==1) {
return false;
}else{

	ad.boleto.value=ad.boleto.value*1-1;
	ad.precio.value=ad.costo.value*ad.boleto.value;
} 

}

	function limitar(grupo){
	var limite= ad.sol.value;
 var grupo=document.getElementsByName(grupo);

 for (var i=0; i < grupo.length; i++){
  grupo[i].onchange=function(){
  var tildados=0
  for (var i=0; i < grupo.length; i++)
   tildados+=(grupo[i].checked)? 1 : 0
  if (tildados > limite){

   this.checked=false
   //return false;
   }
  }
 }
}


	function limit(){
		var limite= ad.sol.value;
var b = 0, chk=document.getElementsByName("checkid[]")
for(j=0;j<chk.length;j++) {
if(chk.item(j).checked == true) {
b++;
}
}

if(b < limite) {
alert("Falta selecionar asientos");

return false;
} 
}


function solonumeros(){

	if ((event.keyCode<48) || (event.keyCode>57)){
			event.returnValue = false;

	} 
		


}
	

	function validar(){
		
		if (form.notarjeta.value == "") 
	{
		alert ("Ingrese No.tarjeta");
		form.notarjeta.focus();  

		return false;
	}if (form.notarjeta.value.length < 16) 
	{
		alert ("Se necesitan 16 digitos");
		form.notarjeta.focus();  

		return false;
	}

		if (form.digito.value == "") 
	{
		alert ("Ingrese los 3 digitos");
		form.digito.focus();   
		return false;
	}
	if (form.digito.value.length < 3) 
	{
		alert ("Se necesitan 3 digitos");
		form.digito.focus();  

		return false;
	}
	// if ($row2=$resultado2->fetch_assoc()) {



	// };


	else{
		return true;
	}
}

	






