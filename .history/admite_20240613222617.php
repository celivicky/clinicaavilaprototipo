
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital ConfiguroWeb</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet" href="css/hide.css">
</head>
<body>
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Clinica El Avila<br /><small style="font-size:20px">Sistema Administrativo de Quirofano</small></h1></div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Información del paciente admitido</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:10px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">Al hacer clic en Dar de alta se puede dar de alta al paciente desde el hospital.</h4>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>No de Admisión</strong></th>
<th><strong>No Paciente</strong></th>
<th><strong>Fecha de admisión</strong></th>
<th><strong>Nombre de Paciente</strong></th>
<th><strong>Edad del Paciente</strong></th>
<th><strong>Número de contacto del Paciente</strong></th>
<th><strong>Grupo de sangre del Paciente</strong></th>
<th><strong>Enfermedades del Paciente por la que se intervino</strong></th>
<th><strong>Número de quirofano</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `admit_pet` ORDER BY `admit_petid` ASC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["admit_petid"]; ?></td>
    <td align="center"><?php echo $row["pet_id"]; ?> </td>
    <td align="center"><?php echo $row["admit_date"]; ?></td>
    <td align="center"><?php echo $row["admit_name"]; ?> </td>
    <td align="center"><?php echo $row["admit_age"]; ?></td>
    <td align="center"><?php echo $row["admit_con"]; ?> </td>
    <td align="center"><?php echo $row["admit_bg"]; ?></td>
    <td align="center"><?php echo $row["pet_des"]; ?> </td>
    <td align="center">No de cuarto:<?php echo $row["admit_rn"]; ?></td>
      <td align="center"><a target="_blank" href="admiteinvo.php?id=<?php echo $row["admit_petid"];?> & rid=<?php echo $row["admit_rn"];?> & mid=<?php echo $row["pet_id"];?>">Descarga</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div></div>

</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>
