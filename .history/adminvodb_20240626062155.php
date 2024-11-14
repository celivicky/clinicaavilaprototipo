
<?php
/* 
Parte 1: Inicialización y conexión a la base de datos
La primera parte del código incluye la conexión a la base de datos MySQL utilizando el archivo connect.php. Este archivo debe contener la función mysqli_connect() para establecer la conexión con la base de datos.*/
include 'connect.php';
/*recuperacion de datos del formulario. La segunda parte del código recupera los datos ingresados en el formulario HTML a través de las variables $_POST. Estas variables son arrays asociativos que almacenan los valores enviados por el formulario */
if(isset($_POST['submit']))
  {
	  $in_pname  = $_POST['pname'];
	  $in_dname  = $_POST['dname'];
	  $in_age    = $_POST['age'];
	  $in_mc   = $_POST['mc'];
	  $in_dc     = $_POST['dc'];

	  Cálculo del total

/*La tercera parte del código calcula el total de la factura sumando los valores con respecto a intervencion medica.*/
	  $invo_date = date("Y-m-d H:i:s");
	  $invo_tot = ((150)+("$in_mc")+("$in_dc"));

/*insertar datos a la base de datos*/

	$query = "INSERT INTO `pet_invo`
	( `invo_doc_name`, `invo_Pet_name`, `invo_pet_id`, `invo_pet_age`, `invo_date`, `medi_charge`, `doc_charge`, `hos_charge`, `total_charge`)
	VALUES
	('$in_dname','$in_pname',11,'$in_age','$invo_date','$in_mc','$in_dc',150,$invo_tot)";
/*ejecucion de la consulta y mensaje con exito*/
	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registro exitoso !</div>';
	  		}


  }
?> 

