<?php


extract($_POST);	
	require("connect_db.php");
	$sentencia="update login set user='$user', email='$email', pasadmin='$pasadmin', creador='$creador', revisor='$revisor', aprobador='$lector', lector='$lector' where identificacion='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>