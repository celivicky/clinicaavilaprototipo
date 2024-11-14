<?php
/*Este código se utiliza para implementar la funcionalidad de eliminar un registro de la tabla "lvl2_admin" en la base de datos.*/
include 'connect.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM `lvl2_admin` WHERE `lvtwid`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: deletesbsad.php");
?>
