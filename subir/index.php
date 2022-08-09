<!DOCTYPE html>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php
session_start();
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
	$nombre = $_FILES['archivo']['id_cotizacion'];
	$fecha = date("j/m/Y");
	$tipo = $_POST['tipo'];
	$linea = $_POST['linea'];
	$tamano = $_FILES['archivo']['size'];
	$respo = $_POST['responsable'];
	$ruta = $_FILES['archivo']['tmp_name'];
	$destino = "archivos/" . $nombre;
	if ($nombre !="" && !empty($_POST['para'])) {
		if (copy($ruta, $destino)) {
			$para= $_POST['para'];
			$titulo= $_POST['titulo'];
			$descri= $_POST['descripcion'];
			$db=new Conect_MySql();
			$sql = "INSERT INTO tbl_documentos(para,titulo,version,fecha,descripcion,tipo,responsable,archivo,id_usuario) VALUES('".$para."','".$titulo."','0.0','".$fecha."','".$descri."','".$tipo."','".$respo."','".$nombre."','".$_SESSION['identificacion']."')";
			$query = $db->execute($sql);
			if ($query) {
				echo "<script type=\"text/javascript\">alert(\"Se guardo correctamente.\");</script>";
			}
		} else {
			echo "<script type=\"text/javascript\">alert(\"Hubo un error, intente nuevamente.\");</script>";
		}
	}
}

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			body{
				background: url();
			}

			h5 {
				font-size: 12pt;
				color: #8A8E27;
				font-weight: normal;
				font-family: Arial, Helvetica, sans-serif;
			}

			h3 {
				color: #666666;
				font-weight: normal;
				font-family: Arial, Helvetica, sans-serif;
			}

			* form {
				padding: 20px 0px 0px 30px;
				font-family: verdana,arial;
				font-size: 9pt;
			}

			textarea {
				position: relative;
				top: -22px;
				left: 0px;

			}

			div {
				width: 430px;
	margin: 60px auto;
	padding: 50px 30px;
				background: #ffffff;
	border: 1px solid #e1e1e1;
				-moz-box-shadow: 0px 0px 8px #444;
				border-radius: 10px;
				-webkit-box-shadow: 0px 0px 1px #444;
			}

		</style>
	</head>
	<body>
		
		<div style="width: 600px;margin: auto;border: 0px solid #ffffffding: 30px;">

			<center>
				<h3>Subir Cotizaciones</h3></center>

			<form method="post" action="" enctype="multipart/form-data">
			  <table width="496" border="0">
			    <tbody>
			      <tr>
			        <td width="112">No. Cotizacion</td>
			        <td width="14">:</td>
			        <td width="356"><input type="text" name="id_cotizacion"></td>
		          </tr>
			   
				  <?php
				  $usuario  = "admin";
				  $password = "Q!w2e3r4t5";
				  $servidor = "localhost";
				  $basededatos = "ingresar";
				  $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
				  $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

				  $sqlClientes         = ("SELECT ini_responsable,nombre_responsable FROM tbl_responsable");
				  $dataClientesSelect  = mysqli_query($con, $sqlClientes);
				  ?>
					<tr>
			        <td>Responsable</td>
			        <td>:</td>
					<td>
						<select name="nombre" class="form-control form-control-sm">
							<option value="">Seleccione el Responsable</option>
							<?php
					while ($dataSelect = mysqli_fetch_array($dataClientesSelect)) { ?>
							<option value="<?php echo $dataSelect["ini_responsable"]; ?>">
								<?php echo utf8_encode($dataSelect["nombre_responsable"]); ?>
							</option>
							<?php } ?>
						</select></td>
		          </tr>
				  <?php
				  $usuario  = "admin";
				  $password = "Q!w2e3r4t5";
				  $servidor = "localhost";
				  $basededatos = "ingresar";
				  $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
				  $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

				  $sqlClientes         = ("SELECT `nombre_cliente` FROM `tbl_cliente`");
				  $dataClientesSelect  = mysqli_query($con, $sqlClientes);
				  ?>
			      <tr>
			        <td>Cliente</td>
			        <td>:</td>
					  <td>
						<select name="nombre" class="form-control form-control-sm">
							<option value="">Seleccione el Cliente</option>
							<?php
					while ($dataSelect = mysqli_fetch_array($dataClientesSelect)) { ?>
							<option value="<?php echo $dataSelect["nombre_cliente"]; ?>">
								<?php echo utf8_encode($dataSelect["nombre_cliente"]); ?>
							</option>
							<?php } ?>
						</select></td>
		          </tr>
			      <tr>
					  <?php
				  $usuario  = "admin";
				  $password = "Q!w2e3r4t5";
				  $servidor = "localhost";
				  $basededatos = "ingresar";
				  $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
				  $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

				  $sqlClientes         = ("SELECT `nombre_linea` FROM `tbl_linea`");
				  $dataClientesSelect  = mysqli_query($con, $sqlClientes);
				  ?>
			        <td>Linea</td>
			        <td>:</td>
			        <td><select name="nombre" class="form-control form-control-sm">
							<option value="">Seleccione Linea</option>
							<?php
					while ($dataSelect = mysqli_fetch_array($dataClientesSelect)) { ?>
							<option value="<?php echo $dataSelect["nombre_linea"]; ?>">
								<?php echo utf8_encode($dataSelect["nombre_linea"]); ?>
							</option>
							<?php } ?>
						</select></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td><select class="form-control" name="linea">
			          <option value=" "> </option>
			          <option value="AZLON">AZLON</option>
			          <option value="B+S">B+S</option>
			          <option value="BESTCOPE">BESTCOPE</option>
			          <option value="BIMOS">BIMOS</option>
			          <option value="BINDER">BINDER</option>
			          <option value="BIOLOGIX">BIOLOGIX</option>
			          <option value="CAPP">CAPP</option>
			          <option value="CITOTEST">CITOTEST</option>
			          <option value="CLEAVER">CLEAVER</option>
			          <option value="D&N">D&N</option>
			          <option value="DE DIETRICH">DE DIETRICH</option>
			          <option value="DLAB">DLAB</option>
			          <option value="DUPERTHAL">DUPERTHAL</option>
			          <option value="DURAN">DURAN</option>
			          <option value="ELMA">ELMA</option>
			          <option value="ESCO">ESCO</option>
			          <option value="EVOQUA">EVOQUA</option>
			          <option value="GERBER">GERBER</option>
			          <option value="GERHARDT">GERHARDT</option>
			          <option value="HAIER">HAIER</option>
			          <option value="HANON/SINEO">HANON/SINEO</option>
			          <option value="HEATHROW SC">HEATHROW SC</option>
			          <option value="HETTICH">HETTICH</option>
			          <option value="HIRSCHMANN">HIRSCHMANN</option>
			          <option value="HW">HW</option>
			          <option value="ISOLAB">ISOLAB</option>
			          <option value="J.T.BAKER/MACRON">J.T.BAKER/MACRON</option>
			          <option value="KINEMATICA">KINEMATICA</option>
			          <option value="KNAUER">KNAUER</option>
			          <option value="LABTECH">LABTECH</option>
			          <option value="LAUDA">LAUDA</option>
			          <option value="MAPADA">MAPADA</option>
			          <option value="MIELE">MIELE</option>
			          <option value="OTRAS LINEAS">OTRAS LINEAS</option>
			          <option value="RADLEYS">RADLEYS</option>
			          <option value="RADWAG">RADWAG</option>
			          <option value="SERVICIO TECNICO">SERVICIO TECNICO</option>
			          <option value="SHINVA">SHINVA</option>
			          <option value="SI ANALYTICS">SI ANALYTICS</option>
			          <option value="SYSTEC">SYSTEC</option>
			          <option value="TUTTNAUER">TUTTNAUER</option>
			          <option value="V-BINDER">V-BINDER</option>
			          <option value="V-ESCO">V-ESCO</option>
			          <option value="V-GERHARDT">V-GERHARDT</option>
			          <option value="V-HAIER">V-HAIER</option>
			          <option value="V-HETTICH">V-HETTICH</option>
			          <option value="V-SYSTEC">V-SYSTEC</option>
			          <option value="V-TUTTNAUER">V-TUTTNAUER</option>
			          <option value="WALDNER">WALDNER</option>
			          <option value="WELCH">WELCH</option>
			          <option value="WHEATON">WHEATON</option>
			          <option value="WTW">WTW</option>
		            </select></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
		        </tbody>
		      </table>
			  <p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				  <p>
				  	<label>:</label>
				  </p>
				<p>&nbsp;</p>
				<h5>Descripción</h5>
				<textarea rows="12" cols="60" name="descripcion" maxlength="1000"></textarea>

				
				Tipo:
				<input type="checkbox" name="tipo" value="Guía">Guía
				<input type="checkbox" name="tipo" value="Procedimiento">Procedimiento


				<br>
				<br><input type="file" name="archivo">
				<br><br>
				<input type="submit" value="Envíar" name="subir">
			</form>
		</div>
	</body>
</html>





