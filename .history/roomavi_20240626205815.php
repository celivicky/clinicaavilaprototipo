<?php include 'connect.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/roosi.css">
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Sistema de quirofano</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
</head>
<body>
  <link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Clinica El Avila<br /><small style="font-size:20px">Sistema Administrativo de Quirofano</small></h1></div>

</div>
</div>




<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Quirofanos Disponibles</h3></div>
<br />
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3 col-xs-12">
<div class="alert alert-info">Al hacer clic en <img  width="32px" src="images/info.png"> puede obtener información sobre la información del paciente admitido</div>
</div>
</div>
</div>
<center>
  <?php include 'romc.php'; ?>
<table style=""    border="0" width="1100">
<tr>
  <td style="border: 5px solid black" id="r1" height="100"><center><div id="">Quirofano 1<img id="rr1" width="32px" src="images/info.png"></div><center></td>
  <td style="border: 5px solid black" id="r2" height="100"><center>Quirofano 2<img id="rr2" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r3" height="100"><center>Quirofano 3<img id="rr3" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r4" height="100"><center>Quirofano 4<img id="rr4" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r5" height="100"><center>Quirofano 5<img id="rr5" width="32px" src="images/info.png"></center></td>
</tr>
<tr>


  <td valign="top" ><center><div style="padding: 10px" align="left" id="infor1">

<?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 1";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente   : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?>

</div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor2"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 2";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente   : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor3"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 3";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del paciente :<?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente :<?php echo $row["admit_name"]; ?><br>
  Edad del Paciente <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente :<?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion :<?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor4"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 4";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID Del Paciente :<?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor5"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 5";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente   : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
</tr>
<tr>
  <td style="border: 5px solid black" id="r6" height="100"><center>Quirofano 6<img id="rr6" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r7" height="100"><center>Quirofano 7<img id="rr7" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r8" height="100"><center>Quirofano 8<img id="rr8" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r9" height="100"><center>Quirofano 9<img id="rr9" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r10" height="100"><center>Quirofano 10<img id="rr10" width="32px" src="images/info.png"></center></td>
</tr>
<tr>


  <td valign="top"><center><div style="padding: 10px" align="left" id="infor6">

<?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 6";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente   : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?>

</div></center></td>
  <td valign="top" ><center><div style="padding: 10px" align="left" id="infor7"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 7";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente  : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor8"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 8";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  ID del Paciente : <?php echo $row["pet_id"]; ?><br>
  Nombre del Paciente : <?php echo $row["admit_name"]; ?><br>
  Edad del Paciente  : <?php echo $row["admit_age"]; ?><br>
  Grupo sanguíneo del Paciente : <?php echo $row["admit_bg"]; ?><br>
  Motivo de intervencion : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor9"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 9";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor10"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 10";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
</tr>
</table>
</center>
<br>
<center>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3 col-xs-12">
<div class="alert alert-info">Al hacer clic en Información del médico puede obtener información sobre el médico, al hacer clic en Información del paciente puede obtener información sobre el paciente admitido, al hacer clic en Actualizar información de la habitación puede actualizar la información de la habitación</div>
</div>
</div>
</div>
  <table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
  <thead>
  <tr>

  <th><strong>ID de Cuarto</strong></th>
  <th><strong>Nombre de Cuarto</strong></th>
  <th><strong>Información de Doctor en la Mañana</strong></th>
  <th><strong>Información de Doctor en la Tarde</strong></th>
  <th><strong>Disponibilidad de Cuarto</strong></th>
  <th><strong>Información de Paciente</strong></th>
  <th><strong>Hora de Limpieza Mañana</strong></th>
  <th><strong>Hora de Limpieza Tarde</strong></th>
  <th></th>
  </tr>
  </thead>
  <tbody>
  <?php
  $count=1;
  $sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,staff.smfname,staff.smlname
  FROM hospi_room
  LEFT JOIN staff
  ON staff.staffID=hospi_room.room_drid  ORDER BY `room_id` ASC ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  <tr valign="middle">

      <td  align="left"><?php echo $row["room_id"]; ?></td>
      <td  align="left"><?php echo $row["room_name"]; ?></td>
      <td  align="left"><?php echo $row["room_drid"]?>  | <a target="_blank" href="admitdf.php?id= <?php echo $row["room_drid"]; ?>">Info Doctor</a></td>
      <td  align="left"><?php echo $row["eroom_drid"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["eroom_drid"]; ?>">Info Doctor</a></td>
      <td  align="left"><?php echo $row["room_avilabl"]; ?></td>
      <td  align="left"><?php echo $row["room_petID"]; ?> | <a target="_blank" href="admitpf.php?id= <?php echo $row["room_petID"]; ?>">Info Paciente</a></td></td>
      <td  align="left"><?php echo $row["rc_time_mo"]; ?></td>
      <td  align="left"><?php echo $row["rc_time_ev"]; ?></td>
      <td  align="center"><a href="roomup.php?id=<?php echo $row["room_id"]; ?>" name="ad">Actualizar Información Cuarto</a></td>

  </tr>

  <?php
  $count++; } ?>
  </tbody>
  </table>
</center>
</div>
</div>
</div>
<br>






<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>

</body>
<footer>
	 <?php include 'footer.php';?>
</footer>
</html>
