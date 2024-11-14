<!-- Este código utiliza PHP y MySQL para consultar la base de datos y obtener los detalles de las habitaciones (room_id y room_avilabl) desde la tabla "hospi_room". El código itera sobre cada fila de la consulta y crea elementos de tipo "hidden" en el HTML con los valores correspondientes de las habitaciones. Los elementos "hidden" tienen IDs como "ro1", "ro2", etc., que corresponden a las habitaciones 1 a 10. Cada elemento contiene el valor de la ID de la habitación y el valor de la disponibilidad de la habitación (room_avilabl). El código es repetitivo, ya que se utiliza la misma estructura para consultar y mostrar los detalles de cada habitación individualmente. El objetivo del código parece ser proporcionar los detalles de las habitaciones a un sistema o aplicación que requiere esta información.
<?php
$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '1' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
    <input id="ro1" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
<?php
 } ?>

<?php
$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '2' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
    <input id="ro2" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
<?php
 } ?>

 <?php
 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '3' ";
 $result = mysqli_query($con,$sel_query);
 while($row = mysqli_fetch_assoc($result)) { ?>
 	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
     <input id="ro3" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
 <?php
  } ?>

	<?php
  $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '4' ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
      <input id="ro4" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
  <?php
   } ?>

	 <?php
	 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '5' ";
	 $result = mysqli_query($con,$sel_query);
	 while($row = mysqli_fetch_assoc($result)) { ?>
		 <input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
			 <input id="ro5" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
	 <?php
		} ?>

		<?php
		$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '6' ";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		    <input id="ro6" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		<?php
		 } ?>

		<?php
		$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '7' ";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		    <input id="ro7" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		<?php
		 } ?>

		 <?php
		 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '8' ";
		 $result = mysqli_query($con,$sel_query);
		 while($row = mysqli_fetch_assoc($result)) { ?>
		 	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		     <input id="ro8" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		 <?php
		  } ?>

			<?php
		  $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '9' ";
		  $result = mysqli_query($con,$sel_query);
		  while($row = mysqli_fetch_assoc($result)) { ?>
		  	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		      <input id="ro9" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		  <?php
		   } ?>

			 <?php
			 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '10' ";
			 $result = mysqli_query($con,$sel_query);
			 while($row = mysqli_fetch_assoc($result)) { ?>
				 <input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
					 <input id="ro10" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
			 <?php
				} ?>
