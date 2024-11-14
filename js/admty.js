//utiliza una condición if-else para determinar si mostrar o no un elemento HTML con id "lock" en función del valor de un campo de input con id "admte".
var x = "Basic Administartion"; 
var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
	document.getElementById("lock").bgColor = "#ffff00";
}