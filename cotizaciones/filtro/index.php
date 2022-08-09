<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>

			<form method="POST" action="">
				<div class="form-inline"></div>
			</form>
			<form method="POST" action="">
				<div class="form-inline"></div>
			</form>
			<table width="1447" height="67" border="0">
			  <tbody>
			    <tr>
			      <td width="273"><label>Linea</label>
                    <select class="form-control" name="linea">
                      <option value="ALLAFRANCE">ALLAFRANCE</option>
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
                      <option value="DEDIETRICH">DEDIETRICH</option>
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
                      <option value="HEATHROWSC">HEATHROWSC</option>
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
                      <option value="OTRASLINEAS">OTRASLINEAS</option>
                      <option value="RADLEYS">RADLEYS</option>
                      <option value="RADWAG">RADWAG</option>
                      <option value="SERVICIOTECNICO">SERVICIOTECNICO</option>
                      <option value="SHINVA">SHINVA</option>
                      <option value="SIANALYTICS">SIANALYTICS</option>
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
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                  <button class="btn btn-success" name="reset">Reset</button></td>
			      <td width="10">&nbsp;</td>
			      <td width="275"><label>Responsable</label>
                    <select class="form-control" name="category6">
                      <option value="Suzuki">Suzuki</option>
                      <option value="Honda">Honda</option>
                      <option value="Kawasaki">Kawasaki</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                  <button class="btn btn-success" name="reset">Reset</button></td>
			      <td width="10">&nbsp;</td>
			      <td width="277"><label>Zona</label>
                    <select class="form-control" name="category3">
                      <option value="Suzuki">Suzuki</option>
                      <option value="Honda">Honda</option>
                      <option value="Kawasaki">Kawasaki</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                  <button class="btn btn-success" name="reset">Reset</button></td>
			      <td width="12">&nbsp;</td>
			      <td width="280"><label>Estatus</label>
                    <select class="form-control" name="category4">
                      <option value="Suzuki">Suzuki</option>
                      <option value="Honda">Honda</option>
                      <option value="Kawasaki">Kawasaki</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                  <button class="btn btn-success" name="reset">Reset</button></td>
			      <td width="14">&nbsp;</td>
			      <td width="237"><label>otro</label>
                    <select class="form-control" name="category5">
                      <option value="Suzuki">Suzuki</option>
                      <option value="Honda">Honda</option>
                      <option value="Kawasaki">Kawasaki</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                  <button class="btn btn-success" name="reset">Reset</button></td>
			      <td width="17">&nbsp;</td>
		        </tr>
		      </tbody>
</table>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
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
					</thead>
				<thead>
	<?php include'filter.php'?>
				</thead>
			</table>
		</div>
	</div>
</body>	
</html>