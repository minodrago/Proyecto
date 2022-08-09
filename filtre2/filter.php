<?php
	require'conn.php';
	//$conn=mysqli_connect("localhost", "admin", "Q!w2e3r4t5", "ingresar");
	if(ISSET($_POST['filter']))
	{
		$linea=$_POST['linea'];
		$query=mysqli_query($conn, "SELECT `id_cotizacion`, `id_cliente`, `id_linea`, `valor`, `fecha_crea`, `id_responsable`, `id_estatus`, `Probabilidad`, `id_zona`, `ultseg_fecha`, `proxseg_fecha`, `cierre_fecha`, `archivo`,`comentarios` FROM `tbl_cotizacion` WHERE id_linea='$linea' ORDER BY `fecha_crea` ASC") or die(mysqli_error());
		
		//$query=mysqli_query($conn,"SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.ini_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea WHERE tbl_linea.id_linea='$linea' ORDER BY `fecha_crea` ASC";) or die(mysqli_error());
		
		//$query=mysqli_query($conn, "SELECT * FROM `tbl_cotizacion` WHERE `id_linea`='$linea'") or die(mysqli_error());
		while ($fetch=mysqli_fetch_array($query)) 
		{
			
			echo"<tr>
			<td>".$fetch['id_cotizacion']."</td>
			<td>".$fetch['id_cliente']."</td>
			<td>".$fetch['id_linea']."</td>
			<td>".$fetch['valor']."</td>
			<td>".$fetch['fecha_crea']."</td>
			<td>".$fetch['id_responsable'] ."</td>
			<td>".$fetch['id_estatus'] ."</td>
			<td>".$fetch['Probabilidad'] ."</td>
			<td>".$fetch['id_zona'] ."</td>
			<td>".$fetch['ultseg_fecha']."</td>
			<td>".$fetch['proxseg_fecha']."</td>
			<td>".$fetch['cierre_fecha']."</td>
			<td>".$fetch['archivo'] ."</td>
			<td>".$fetch['comentarios'] ."</td>
				</tr>";
		}
	}
	else if(ISSET($_POST['reset']))
	{
		$query=mysqli_query($conn, "SELECT `id_cotizacion`, `id_cliente`, `id_linea`, `valor`, `fecha_crea`, `id_responsable`, `id_estatus`, `Probabilidad`, `id_zona`, `ultseg_fecha`, `proxseg_fecha`, `cierre_fecha`, `archivo`,`comentarios` FROM `tbl_cotizacion` WHERE 1") or die(mysqli_error());
		//$query=mysqli_query($conn, "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.ini_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea ORDER BY `fecha_crea` ASC  ";) or die(mysqli_error());
		while ($fetch=mysqli_fetch_array($query)) 
		{
			echo"<tr>
			<td>".$fetch['id_cotizacion']."</td>
			<td>".$fetch['id_cliente']."</td>
			<td>".$fetch['id_linea']."</td>
			<td>".$fetch['valor']."</td>
			<td>".$fetch['fecha_crea']."</td>
			<td>".$fetch['id_responsable'] ."</td>
			<td>".$fetch['id_estatus'] ."</td>
			<td>".$fetch['Probabilidad'] ."</td>
			<td>".$fetch['id_zona'] ."</td>
			<td>".$fetch['ultseg_fecha']."</td>
			<td>".$fetch['proxseg_fecha']."</td>
			<td>".$fetch['cierre_fecha']."</td>
			<td>".$fetch['archivo'] ."</td>
			<td>".$fetch['comentarios'] ."</td>
				</tr>";
		}
	}
	else
	{
	$query=mysqli_query($conn, "SELECT `id_cotizacion`, `id_cliente`, `id_linea`, `valor`, `fecha_crea`, `id_responsable`, `id_estatus`, `Probabilidad`, `id_zona`, `ultseg_fecha`, `proxseg_fecha`, `cierre_fecha`, `archivo`,`comentarios` FROM `tbl_cotizacion` WHERE 1") or die(mysqli_error());
	//$query=mysqli_query($conn, "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.ini_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM `tbl_cotizacion` INNER JOIN `tbl_cliente` ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN `tbl_responsable` ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea ORDER BY `fecha_crea` ASC  ";) or die(mysqli_error());
	while ($fetch=mysqli_fetch_array($query)) {
		echo"<tr>
					<td>".$fetch['id_cotizacion']."</td>
					<td>".$fetch['id_cliente']."</td>
					<td>".$fetch['id_linea']."</td>
					<td>".$fetch['valor']."</td>
					<td>".$fetch['fecha_crea']."</td>
					<td>".$fetch['id_responsable'] ."</td>
					<td>".$fetch['id_estatus'] ."</td>
					<td>".$fetch['Probabilidad'] ."</td>
					<td>".$fetch['id_zona'] ."</td>
					<td>".$fetch['ultseg_fecha']."</td>
					<td>".$fetch['proxseg_fecha']."</td>
					<td>".$fetch['cierre_fecha']."</td>
					<td>".$fetch['archivo'] ."</td>
					<td>".$fetch['comentarios'] ."</td>
				</tr>";
		  } 
	 } ?>


