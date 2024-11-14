
<?php
 /*este código verifica si el usuario tiene permisos de administrador (sadmun) y, si no lo hace, redirige a la página supadm.php. Si el usuario ya tiene permisos, el código permite acceder a la página actual.*/
session_start();
if(!isset($_SESSION["sadmun"])){
header("Location: supadm.php");
exit(); }
?>
