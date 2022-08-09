<!DOCTYPE html>

<html>
	    <head>
        <meta charset="UTF-8">
        <title>Lista de archivos</title>
    </head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>

@media screen and (max-width: 600px) {
table {
  border-collapse: collapse;
}

  table caption {
    font-size: 1.0000em;
  }
  

  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 1;
  }
}

/* general styling */
    body {
        color: #566787;
		background: #ffffff;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}




.myButton:hover {
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:5px;
}
	
    </style>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
			                <div class="row">
                    <div class="col-sm-4">
						<h2>Listado General de Cotizaciones</h2>
					</div>
					
                </div>
            </div>

            <div class="row text-center" id="loader" style="position: absolute;top: 140px;left: 50%">
				
			</div>
		<table width="1470" border='1' style="border-collapse: collapse" >


  <tbody>
  	   <thead>
			<tr>
                <th width="67" scope="col">No. Cotizacion</th>
                <th width="144" scope="col">Cliente</th>
                <th width="56" scope="col">Linea</th>
                <th width="103" scope="col">Valor</th>
                <th width="101" scope="col">Fcha Creacion</th>
                <th width="119" scope="col">Responsable</th>
                <th width="66" scope="col">Estatus</th>
                <th width="82" scope="col">Probabilidad</th>
                <th width="70" scope="col">Zona</th>
                <th width="100" scope="col">Ultimo Seguimiento</th>
                <th width="100" scope="col">Proximo Seguimiento</th>
                <th width="101" scope="col">Cierre</th>
                <th width="110" scope="col">Archivo</th>
                <th width="109" scope="col">Comentarios</th>
				<th width="80" scope="col">Accion</th> 
            </tr>
		</thead>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
           // $sql = "select*from tbl_cotizacion ORDER BY fecha_crea DESC";
			$sql = "SELECT id_cotizacion, tbl_cliente.nombre_cliente, tbl_linea.nombre_linea, valor, fecha_crea, tbl_responsable.nombre_responsable, tbl_estatus.nombre_estatus, probabilidad, tbl_zona.nombre_zona, ultseg_fecha, proxseg_fecha, cierre_fecha,archivo,comentarios FROM tbl_cotizacion INNER JOIN tbl_cliente ON tbl_cotizacion.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_responsable ON tbl_cotizacion.id_responsable = tbl_responsable.id_responsable INNER JOIN tbl_estatus ON tbl_cotizacion.id_estatus = tbl_estatus.id_estatus INNER JOIN tbl_zona ON tbl_cotizacion.id_zona = tbl_zona.id_zona INNER JOIN tbl_linea ON tbl_cotizacion.id_linea = tbl_linea.id_linea WHERE valor >= 500 order by fecha_crea desc;";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
     
			<tr>
                <td align="center" valign="middle" scope="row" data-label="No. Cotizacion"><?php echo $datos['id_cotizacion']; ?></td>
                <td align="center" valign="middle"><?php echo $datos['nombre_cliente']; ?></td>
				<td align="center" valign="middle"><?php echo $datos['nombre_linea']; ?></td>
				<td align="center" valign="middle"><pre>$<?php echo number_format ($datos ['valor'],2,',','.'); ?></pre></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($datos["fecha_crea"])); ?></td>
				<td align="center" valign="middle"><?php echo $datos['nombre_responsable']; ?></td>
				<td align="center" valign="middle"><?php echo $datos['nombre_estatus']; ?></td>
				<td align="center" valign="middle"><?php echo $datos['probabilidad']; ?></td>
				<td align="center" valign="middle"><?php echo $datos['nombre_zona']; ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($datos["ultseg_fecha"])); ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($datos["proxseg_fecha"])); ?></td>
				<td align="center" valign="middle"><?php echo date("d-m-Y", strtotime($datos["cierre_fecha"])); ?></td>
                <td align="center" valign="middle"><a href="archivo_r.php?id=<?php echo $datos['id_cotizacion']?>"><?php echo $datos['archivo']; ?></a></td>
				<td align="center" valign="middle"><font site="1px"><?php echo $datos['comentarios']; ?></td>
               	<td><a  class="myButton" title="Aquí para nuevas modificaciones" href="editar_r.php?id=<?php echo $datos['id_cotizacion']?>">Editar</a>
              </tr>
		</tbody>
                
          <?php  } ?>

        </table>
</body>
</html>
