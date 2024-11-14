<?php
/*este código establece una conexión a una base de datos MySQL, selecciona una base de datos específica y verifica si la conexión se estableció correctamente.*/
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("America/Caracas");
	mysqli_select_db($con,"clinicaavila");
	if(!$con){
			die("Failed to connect");
			}

?>
