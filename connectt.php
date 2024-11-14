<?php
/*este código establece dos conexiones a la base de datos "clinicaavila", una utilizando la función mysqli_connect() y otra utilizando la clase mysqli. Ambas conexiones se verifican y, en caso de que no se pueda establecer la conexión, el script se detendrá y mostrará un mensaje de error*/
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("America/Caracas");
	mysqli_select_db($con,"clinicaavila");
	if(!$con){
			die("Failed to connect");
			}

?>
<?php
define ("HOSTNAME","localhost");
define ("USERNAME","root");
define ("PASSWORD","");
define ("DATABASE","clinicaavila");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Incapaz de conectar a la base de datos");

if($dbhandle->connect_error){
	die("conexión fallida".$dbhandle->connect_error);
}
?>