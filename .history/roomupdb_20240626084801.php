
<?php
include 'connect.php';
//Este código forma parte de un sistema de gestión de quirofanos, donde los administradores pueden actualizar la información de las habitaciones, como los médicos asignados a ellas. La funcionalidad de actualización es importante para mantener la información de la clinica actualizada y precisa.
if(isset($_POST['submit']))
  {
	  $rid_pid     = $_POST['ridd'];
	  $ro_d        = $_POST['mrdo'];
    $ero_d        = $_POST['erdo'];
    $admm_date   = date("Y-m-d");

    $rquery = "UPDATE `hospi_room` SET `room_drid`='$ro_d',`eroom_drid` = '$ero_d' WHERE `room_id` = '$rid_pid'";
    if(mysqli_query($con,$rquery)){
		$success =  '<div align="center" class="alert alert-success">Registro Exitoso</div>';
    header("Location: roomavi.php");
	  		}
		}



?>
