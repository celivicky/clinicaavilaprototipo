<?php include 'connectt.php';?>
<?php
	include 'connect.php';
    // Proceso de registro//
    if (isset($_POST['register'])){
//verificacion de datos//
		$admfuname = $_POST['ufn'];
		$admun = $_POST['unn'];
		$admemail = $_POST['uemail'];
		$admpw = $_POST['upw'];
		$admpwdup = $_POST['ucpw'];

		$trn_date = date("Y-m-d H:i:s");
   //verificacion de existencia de usuario//
		$checkeml ="SELECT lvtwemail FROM lvl2_admin WHERE lvtwemail = '$admemail'";
	  $checkun  ="SELECT lvtwusern FROM lvl2_admin WHERE lvtwusern = '$admun'";

    $checkemll ="SELECT sadem FROM sup_admin WHERE sadem = '$admemail'";
    $checkunn  ="SELECT sadiun FROM sup_admin WHERE sadiun = '$admun'";

	  $logPermitionem=mysqli_query($con,$checkeml);
		$logPermitionun=mysqli_query($con,$checkun);

    $logPermitionemm=mysqli_query($con,$checkemll);
    $logPermitionunn=mysqli_query($con,$checkunn);


   		
   	$rowem=mysqli_fetch_array($logPermitionem);
		$rowemun=mysqli_fetch_array($logPermitionun);

    $rowemm=mysqli_fetch_array($logPermitionemm);
    $rowemunn=mysqli_fetch_array($logPermitionunn);

         //verificacion de usuario y e-mail*/
        if($rowemun['lvtwusern']==$admun || $rowemunn['sadiun']==$admun){
        $lvltadeun = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">¡El nombre de usuario que ingresó ya está en uso!</div>';
		}
	  	else if($rowem['lvtwemail']==$admemail || $rowemm['sadem']==$admemail){
        $lvltademe = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">¡La dirección de correo electrónico que ingresó ya está en uso!</div>';
		}
     /*verificacion de contrasenas*/
		else if($admpwdup != $admpw ){
        $pwm = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Los campos de contraseña y confirmar contraseña no coinciden</div>';
			}

        else
		{
      /*Insercion de datos en la base de datos*/*
        $query = "INSERT INTO `lvl2_admin`(`lvtwname`, `lvtwusern`, `lvtwemail`, `lvtwpass`,`lvtwcdate`) VALUES ('$admfuname','$admun','$admemail','".md5($admpw)."','$trn_date')";


        if(mysqli_query($con,$query)){
            $regs = '<br> <div align="center" class="alert alert-success">Registro exitoso ! </div>';
        }}
    }else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital ConfiguroWeb</title>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}
</style>
<script type="text/javascript">
  function chechunfn(val){
    $.ajax({
      type:"POST",
      url:"cheunex.php",
      data:'unex='+val,
      success: function(data){
          $("#msg").html(data);
      }
    })
  }
</script>
<script type="text/javascript">
  function chechemfn(val){
  $.ajax({
      type:"POST",
      url:"usernmeex.php",
      data:'unem='+val,
      success: function(data){
          $("#msge").html(data);
      }
    })
}
</script>
</head>

<body>
<?php include 'slvlauth.php'; ?>
<div style="background-color: white; height: 40px; padding: 10px; z-index: 1; position:fixed; width: 1366px;">
Eres bienvenido de nivel superior <?php echo $_SESSION['topadun']; ?> Options. <a href="dminlogout.php">Cerrar Sesión</a>
</div><br />
<br /><br />

<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center ">Clinica EL Avila<br /><small style="font-size:20px">Sistema Administrativo de Quirofano</small></h1>
</div>
</div>
</div>
<br /><br />

<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li  style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmopt.php"><strong>Opciones de Super Administrador</strong></a></li>
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="basiadminopts.php"><strong>Opciones básicas de administración</strong></a></li>
</ul>
</div></div>
<hr>
<div class="container-fluid">
<div class="row col-md-8 col-md-offset-2 col-xs-12">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="basiadminopts.php"><strong>inserte administración básica</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="deletesbsad.php"><strong>Eliminar administración básica</strong></a></li>
</ul>
<hr>
</div></div>

<div align="center" >
Le invitamos al formulario de registro de usuario del sistema.</div><br>
<div class="alert alert-danger col-md-4 col-md-offset-4 col-xs-12 text-center">Este formulario de registro de usuario crea solo Cuentas de Resiption, las Cuentas de Resiption solo pueden inserciones.</div></div>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading text-center">Formulario de registro de administración del sistema de nivel 2</div>

  <div class="panel-body"><center>
  <small class="text-danger">Todos los campos son requeridos</small>
    <form action="" method="post">

<table style="border:none; background-color: #FFFFFF;"  border="0" class="table table-responsive">
<tr>
<td colspan="2" style="padding:5px;">
  <input name="ufn"   required="required" style="border-radius:0px; padding:10px;" type="text" class="form-control" placeholder="Nombre completo">
</td>

</tr>
<tr>
<td colspan="2" style="padding:5px;">

  <input onkeyup="chechunfn(this.value)" name="unn" type="text" required="required" class="form-control" placeholder="Usuario" style="border-radius:0px"><div id="msg"></div>
  <center><script type="text/javascript">
document.write('<?php echo $lvltadeun; ?>');</script></center>


</td>
</tr>
<tr><td colspan="2" style="padding:5px;">
  <input onkeyup="chechemfn(this.value)" name="uemail"  required="required" style="border-radius:0px" type="text" class="form-control" placeholder="Correo"><div id="msge"></div>
  <center><script type="text/javascript">
document.write('<?php echo $lvltademe; ?>');</script></center>

</td></tr>
<tr><td colspan="2" style="padding:5px;">
  <input name="upw"  required="required" style="border-radius:0px" type="password" class="form-control" placeholder="Contraseña"></td>
</tr><tr><td colspan="2" style="padding:5px;">
  <input name="ucpw"  required="required" style="border-radius:0px" type="password" class="form-control" placeholder="Conform Password"><center><script type="text/javascript">
document.write('<?php echo $pwm; ?>');</script> </center> </td></tr>
  <tr><td colspan="2" style="padding:5px;"><center><button name="register" class="btn btn-block">Enviar</button></center></td></tr>

</table>
<center><script type="text/javascript">
document.write('<?php echo $regs; ?>');</script> </center>
</center></form>


  </div>
  <div class="panel-footer text-center">Presione el botón Enviar después de completar</div>
</div>

</div>
</div>
</div>





<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>
