
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	//valores del formulario
	  $dpid      = $_POST['pid'];
	  $dpname    = $_POST['dname'];
	  $dpage     = $_POST['age'];
	  $dpmc      = $_POST['mc'];
	  $dpdc      = $_POST['dc'];
    $dp        = $_POST['cod'];
//costo de uso de sala quirurgica
    $roompr = (("$dp")*(100));
//calcular el total de la factura
	  $invo_tot = ((50)+("$dpmc")+("$dpdc")+($roompr));



	$query = "INSERT INTO `admit_invo_db`
(`pet_no`, `pet_name`, `p_age`, `price_of_med`, `price_of_doc`, `day_count`, `price_of_room`, `ser_char`, `totl`)
VALUES
('$dpid','$dpname','$dpage','$dpmc','$dpdc','$dp','$roompr',500,'$invo_tot')";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registro Exitoso</div>';
             header("Location: admite.php");
	  		}


  }
?>
