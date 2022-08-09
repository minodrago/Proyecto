<?php
	require'conn.php';
	if(ISSET($_POST['filter'])){
		$linea=$_POST['linea'];
		
		
		$query=mysqli_query($conn, "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea WHERE `nombre_linea`='$linea' ORDER BY fecha_crea DESC ") or die(mysqli_error());
		
		//$query=mysqli_query($conn, "SELECT * FROM `tbl_cotizacion` WHERE `id_linea`='$linea'") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
				<tr>
                <td align="center"; valign="middle"; scope="row"; data-label="No. Cotizacion"><?php echo $fetch['id_cotizacion']; ?></td>
                <td align="center"; valign="middle"><?php echo $fetch['nombre_cliente']; ?></td>
				<td align="center"; valign="middle"><?php echo $fetch['nombre_linea']; ?></td>
				<td align="center": valign="middle"><pre>$<?php echo number_format ($fetch ['valor'],2,',','.'); ?></pre></td>
				<td align="center"; valign="middle"><?php echo date("d-m-Y", strtotime($fetch["fecha_crea"])); ?></td>
				<td align="center"; valign="middle"><?php echo $fetch['nombre_responsable']; ?></td>
				<td align="center"; valign="middle"><?php echo $fetch['nombre_estatus']; ?></td>
				<td align="center"; valign="middle"><?php echo $fetch['probabilidad']; ?></td>
				<td align="center"; valign="middle"><?php echo $fetch['nombre_zona']; ?></td>
				<td align="center"; valign="middle"><?php echo date("d-m-Y", strtotime($fetch["ultseg_fecha"])); ?></td>
				<td align="center"; valign="middle"><?php echo date("d-m-Y", strtotime($fetch["proxseg_fecha"])); ?></td>
				<td align="center"; valign="middle"><?php echo date("d-m-Y", strtotime($fetch["cierre_fecha"])); ?></td>
                <td align="center"; valign="middle"><a href="archivo_r.php?id=<?php echo $fetch['id_cotizacion']?>"><?php echo $fetch['archivo']; ?></a></td>
				<td align="center"; valign="middle"><font site="1px"><?php echo $fetch['comentarios']; ?></td>
              </tr>;
		}
	}else if(ISSET($_POST['reset'])){
		$query=mysqli_query($conn, "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea ORDER BY fecha_crea DESC ";) or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
			<tr>
                <td align="center" valign="middle" scope="row" data-label="No. Cotizacion"><?php echo $fetch['id_cotizacion']; ?></td>
                <td align="center" valign="middle"><?php echo $fetch['nombre_cliente']; ?></td>
				<td align="center" valign="middle"><?php echo $fetch['nombre_linea']; ?></td>
				<td align="center" valign="middle"><pre>$<?php echo number_format ($fetch ['valor'],2,',','.'); ?></pre></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($fetch["fecha_crea"])); ?></td>
				<td align="center" valign="middle"><?php echo $fetch['nombre_responsable']; ?></td>
				<td align="center" valign="middle"><?php echo $fetch['nombre_estatus']; ?></td>
				<td align="center" valign="middle"><?php echo $fetch['probabilidad']; ?></td>
				<td align="center" valign="middle"><?php echo $fetch['nombre_zona']; ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($fetch["ultseg_fecha"])); ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($fetch["proxseg_fecha"])); ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($fetch["cierre_fecha"])); ?></td>
                <td align="center" valign="middle"><a href="archivo_r.php?id=<?php echo $fetch['id_cotizacion']?>"><?php echo $fetch['archivo']; ?></a></td>
				<td align="center" valign="middle"><font site="1px"><?php echo $fetch['comentarios']; ?></td>
             </tr>
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `tbl_cotizacion`") or die(mysqli_error());
		//query=mysqli_query($conn, "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea ORDER BY fecha_crea DESC ";) or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
			echo"<tr><td>".$fetch['id_cotizacion']."</td><td>".$fetch['nombre_cliente]."</td><td>".$fetch['nombre_linea']."</td></tr>";
			
			
		}
	}
?>