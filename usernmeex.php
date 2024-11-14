
<?php include 'connectt.php';
$usernme=$dbhandle->real_escape_string($_POST["unem"]);

$checkune  ="SELECT * FROM sup_admin WHERE sadem = '".$usernme."'";
$checkeune ="SELECT * FROM lvl2_admin WHERE lvtwemail = '".$usernme."'";

$resultse=$dbhandle->query($checkune);
$numrowse=$resultse->num_rows;

$resultsse=$dbhandle->query($checkeune);
$numrowsse=$resultsse->num_rows;

if($numrowse > 0 || $numrowsse > 0){
	echo '<br/ ><br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Email Address you entered is already in use!</div>';
}else{
	echo '<br/ ><br/ ><div align="center" class="alert alert-success">User Email Address Avilable</div>';
}
//este código verifica si un correo electrónico de usuario ya está registrado en la base de datos antes de permitir que se cree una nueva cuenta.
?>
