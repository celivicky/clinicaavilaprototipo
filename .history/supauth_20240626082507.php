
<?php
//este código verifica si el usuario ha iniciado sesión correctamente antes de permitir acceder a la página protegida. Si el usuario no ha iniciado sesión, se redirige automáticamente a la página de inicio.
session_start();
if(!isset($_SESSION["ssadmun"])){
header("Location: index.php");
exit(); }
?>
