<?php
/*Este código se utiliza para implementar la funcionalidad de eliminar un registro de la tabla "patient" en la base de datos.*/
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `patient` WHERE `pet_id`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: supadminop.php");
?>
