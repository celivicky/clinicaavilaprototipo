

<?php
 //Al colocar este código al comienzo de una página, se puede restringir el acceso a dicha página solo a los usuarios que hayan iniciado sesión 
session_start();
if( (!isset($_SESSION["sadmun"])) && (!isset($_SESSION["admty"])) )
{
header("Location: index.php");
exit(); }
?>
