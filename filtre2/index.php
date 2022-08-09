<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
<hr style="border-top:1px dotted #ccc;"/>
<div class="col-md-2"></div>
<div class="col-md-8">
	<form method="POST" action="">
		<div class="form-inline">
			<label>Linea:</label>
			<select class="form-control" name="linea">
				<option value="0">Seleccione</option>
				<option value="1">ALLAFRANCE</option>
				<option value="2">AZLON</option>
				<option value="3">B+S</option>
				<option value="4">BESTCOPE</option>
				<option value="5">BIMOS</option>
				<option value="6">BINDER</option>
				<option value="7">BIOLOGIX</option>
				<option value="8">CAPP</option>
				<option value="9">CITOTEST</option>
				<option value="10">CLEAVER</option>
				<option value="11">D&N</option>
				<option value="12">DEDIETRICH</option>
				<option value="13">DLAB</option>
				<option value="14">DUPERTHAL</option>
				<option value="15">DURAN</option>
				<option value="16">ELMA</option>
				<option value="17">ESCO</option>
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
			<button class="btn btn-success" name="reset">Reset</button>
		</div>
	</form>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<th>No. Cotizacion</th>
					<th>Cliente</th>
					<th>Linea</th>
					<th>Valor</th>
					<th>Fecha Creacion</th>
					<th>Responsable</th>
					<th>Estatus</th>
					<th>Probabilidad</th>
					<th>Zona</th>
					<th>Ultimo Seguimiento</th>
					<th>Proximo Seguimiento</th>
					<th>Cierre</th>
					<th>Archivo</th>
					<th>Comentarios</th>
				</thead>
				<thead>
					<?php include'filter.php'?>
				</thead>
			</table>
		</div>
	</div>
</body>	
</html>