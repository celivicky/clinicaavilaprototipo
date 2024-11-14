<?php include 'connectt.php';
/*este código verifica si un nombre de usuario proporcionado ya está en uso en la base de datos, ya sea en la tabla "sup_admin" o en la tabla "lvl2_admin", y muestra un mensaje de éxito o error en función del resultado.*/
$usernm=$dbhandle->real_escape_string($_POST["unex"]);

$checkun  ="SELECT * FROM sup_admin WHERE sadiun = '".$usernm."'";
$checkeun ="SELECT * FROM lvl2_admin WHERE lvtwusern = '".$usernm."'";

$results=$dbhandle->query($checkun);
$numrows=$results->num_rows;

$resultss=$dbhandle->query($checkeun);
$numrowss=$resultss->num_rows;

if($numrows > 0 || $numrowss > 0){
	echo '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Username you entered is already in use!</div>';
}else{
	echo '<br/ ><div align="center" class="alert alert-success">User Name Avilable</div>';
}

?>
