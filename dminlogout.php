<?php
//Este código PHP se encarga de destruir todas las sesiones activas y luego redirigir al usuario a la página de inicio
session_start();
if(session_destroy()) // Destruye secciones
{
header("Location: index.php"); // Redirige al index
}
?>
