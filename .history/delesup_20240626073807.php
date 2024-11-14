<?php
/*Este código se utiliza para implementar la funcionalidad de eliminar un registro de la tabla "sup_admin" en la base de datos.*/
include 'connect.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM `sup_admin` WHERE `sadid`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: deletesupad.php");
?>
