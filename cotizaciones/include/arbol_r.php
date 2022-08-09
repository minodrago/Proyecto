<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gestión Documental</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
<script>
$ (document).ready(function(e) {

$("#pulsar").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/doc_creador_r.php");

});

});

</script>
<script>
$ (document).ready(function(e) {

$("#pulsar500").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/listar500.php");

});

});

</script>
<script>
$ (document).ready(function(e) {

$("#pulsar100500").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/listar100500.php");

});

});

</script>
<script>
$ (document).ready(function(e) {

$("#pulsar100").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/listar100.php");

});

});

</script>


<script>

$ (document).ready(function(e) {

$("#pulsar4").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/doc_creador.php");

});

});

</script>
<script>

$ (document).ready(function(e) {

$("#pulsar5").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../filtro/index.php");

});

});

</script>
 </head>
 <style>
body {
position: relative;
 top:  -22px; 
 left: 0px;
}
form {
	font-size: 12px; 
	position: relative;
 top:  -16px; 
 left: -10px;
	
}

html { font-size: 50%; /* IE hack */ }
body { font-size: 1em; /* Sets base font size to 16px */ }
table { font-size: 100%; /* IE hack */ }
input, select, textarea, th, td { font-size: 1em; }
	
/* CSS Tree menu styles */
ol.tree
{
	padding: 0 0 0 30px;
	width: 300px;
}
	li 
	{ 
		position: relative; 
		margin-left: -15px;
		list-style: none;
	}
	li.file
	{
		margin-left: -1px !important;
	}
	
	
		
	li input
	{
		position: absolute;
		left: 0;
		margin-left: 0;
		opacity: 0;
		z-index: 2;
		cursor: pointer;
		height: 1em;
		width: 1em;
		top: 0;
	}
		li input + ol
		{
			background: url(toggle-small-expand.png) 40px 0 no-repeat;
			margin: -0.7em 0 0 -44px; /* 15px */
			height: 1em;
			position: relative;
 			top:  -14px; 
 			left: 0px;
		}
		li input + ol > li { display: none; margin-left: -14px !important; padding-left: 1px; }
	li label
	{
		background: url(folder-horizontal.png) 15px 1px no-repeat;
		cursor: pointer;
		padding-left: 37px;
	}

	li input:checked + ol
	{
		background: url(toggle-small.png) 40px 5px no-repeat;
		margin: -1.25em 0 0 -44px; /* 20px */
		padding: 1.563em 0 0 80px;
		height: auto;
	}
		li input:checked + ol > li { display: block; margin: 0 0 0.125em;  /* 2px */}
		li input:checked + ol > li:last-child { margin: 0 0 0.063em; /* 1px */ }


##fondo {
    width: 260px;

    background-color: #fff;
    margin: -20px;

}

#fondo2 {

  
  width: 83%;

  position:absolute; z-index:0;
  top:64px;
  left:16%;

}


.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0px;
    left: 0;
    width: 100%;
    height: 91%;
} 

}


</style> 
<font size=2><body  background=""> 
<aside id="fondo">
<br><br><form id="form1">
<ol class="tree">
		<li>
		<label for="folder2">Cotizaciones</label> <input type="checkbox" id="folder2" />
			
					<ol>
						<li class="file"><a href="" id="pulsar">Todos los Cotizaciones</a></li>
					</ol>
         </li>
		 <li>
		<label for="folder3">Filtros</label> <input type="checkbox" id="folder3" />
			
					<ol>
						<li class="file"><a href="" id="pulsar500">Superiores a 500 Millones</a></li>
						<li class="file"><a href="" id="pulsar100500">De 100 a 500 Millones</a></li>
						<li class="file"><a href="" id="pulsar100">Menores a 100 Millones</a></li>
						<li class="file"><a href="" id="pulsar5">Otros Filtros</a></li>
					</ol>
         </li>
</ol>
		 </form>
</aside>
<aside id="fondo2">

<div class="embed-container"><iframe src="" id="externo"frameborder="0" allowfullscreen></iframe>
</div>
</aside>
</body></font>
</html>
