<?php
/* Este código es un archivo PHP que se encarga de eliminar un registro de la tabla "admit_pet" en la base de datos y actualizar el estado de disponibilidad de una habitación en la tabla "hospi_room". El código utiliza las variables `$id`, `$rid`, y `$mid` que se pasan como parámetros desde la solicitud HTTP (probablemente mediante un formulario). 
El código elimina el registro con el ID especificado en la tabla "admit_pet" y luego actualiza el estado de disponibilidad de la habitación con el ID especificado en la tabla "hospi_room" a "AV" (probablemente significando "Available"). Finalmente, redirige al usuario a la página "admiteinvo.php". El código utiliza funciones de MySQL para realizar las operaciones en la base de datos y función `header` para redirigir al usuario. El código también utiliza `die` para mostrar cualquier error que surja durante la ejecución.*/
require('connect.php');
$id=$_REQUEST['id'];
$rid=$_REQUEST['rid'];
$mid=$_REQUEST['mid'];
$query = "DELETE FROM `admit_pet` WHERE `admit_petid`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
$rquery="UPDATE `hospi_room` SET `room_avilabl`= 'AV' WHERE `room_id` = '$rid'";
$result = mysqli_query($con,$rquery) or die ( mysqli_error());
header('Location: admiteinvo.php');
?>
