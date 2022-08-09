<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado Cotizaciones Inferiores a 100 Millones</title>
    </head>
<style>
* body {
	background:url();
	font-family:"BrowalliaUPC", Gadget, sans-serif;
	
	}

table {
  background:#EEE; 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 

}

h6 {
margin: 10px;
}

.myButton:hover {
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:1px;
}
	
    </style>
    <body>
       <form>
    		<center><table width="20%">
            <tr>
                <th width="200">No. Cotizacion</th>
                <th width="105">Cliente</th>
                <th width="116">Linea</th>
                <th width="446">Valor</th>
                <th width="102">Fcha Creacion</th>
                <th width="120">Responsable</th>
                <th width="112">Estatus</th>
                <th width="150">Probabilidad</th>
                <th width="105">Zona</th>
                <th width="116">Ultimo Seguimiento</th>
                <th width="446">Proximo Seguimiento</th>
                <th width="102">Cierre</th>
                <th width="120">Archivo</th>
                <th width="112">Comentarios</th>
				<th width="112">Accion</th>
                
				
             
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
           // $sql = "select*from tbl_cotizacion ORDER BY fecha_crea DESC";
			//$sql = "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM `tbl_cotizacion` INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea ORDER BY fecha_crea DESC";
            $sql = "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea WHERE  valor < '100000000'  order by fecha_crea desc;";
			$query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['id_cotizacion']; ?></td>
                <td><?php echo $datos['nombre_cliente']; ?></td>
				<td><?php echo $datos['nombre_linea']; ?></td>
				<td><?php echo $datos['valor']; ?></td>
				<td><?php echo $datos['fecha_crea']; ?></td>
				<td><?php echo $datos['nombre_responsable']; ?></td>
				<td><?php echo $datos['nombre_estatus']; ?></td>
				<td><?php echo $datos['probabilidad']; ?></td>
				<td><?php echo $datos['nombre_zona']; ?></td>
                <td><?php echo $datos['ultseg_fecha']; ?></td>
               	<td><?php echo $datos['proxseg_fecha']; ?></td>
                <td><?php echo $datos['cierre_fecha']; ?></td>
                <td><a href="archivo_r.php?id=<?php echo $datos['id_cotizacion']?>"><?php echo $datos['archivo']; ?></a></td>
				<td><font site="1px"><?php echo $datos['comentarios']; ?></td>
               	<td><a  class="myButton" title="Aquí para nuevas modificaciones" href="editar_r.php?id=<?php echo $datos['id_cotizacion']?>">Editar</a>
              </tr>
                
          <?php  } ?>
            
        </table>
    </form>
    </body>
</html>
