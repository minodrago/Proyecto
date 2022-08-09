<?php
	$server="localhost";
	$username="admin";
	$password="Q!w2e3r4t5";
	$db='ingresar';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>