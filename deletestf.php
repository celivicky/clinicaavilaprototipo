<?php
require('connect.php');// Esta línea incluye el archivo 'connect.php' que contiene la información de conexión a la base de datos
$id=$_REQUEST['id']; // Esta línea obtiene el valor de la variable 'id' enviada a través de la URL y lo almacena en la variable
$query = "DELETE FROM `staff` WHERE `staffID`=$id";// Esta línea incluye el archivo 'connect.php' que contiene la información de conexión a la base de datos
$result = mysqli_query($con,$query) or die ( mysqli_error());// Esta línea incluye el archivo 'connect.php' que contiene la información de conexión a la base de datos
header("Location: supadminopsm.php");// Esta línea redirige al usuario a la página 'supadminopsm.php' después de que se haya eliminado el registro de la base de datos
?>
