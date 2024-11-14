
<?php
/* Este código comienza la sesión y verifica si la variable de sesión "topadun" no existe. Si la variable no existe, redirige al usuario a la página index.php, lo que indica que el usuario no ha iniciado sesión correctamente y debe hacerlo para acceder al contenido protegido. Si la variable "topadun" existe, el código permite al usuario acceder al contenido protegido.*/
session_start();
if(!isset($_SESSION["topadun"])){
header("Location: index.php");
exit(); }
?>
