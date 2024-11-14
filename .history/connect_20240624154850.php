<?php
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("Venezuela");
	mysqli_select_db($con,"clinicaelavila");
	if(!$con){
			die("Failed to connect");
			}

?>
