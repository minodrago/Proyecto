<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gestión Documental</title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    

 </head>
<font size=2><body  background=""> 
<?php

include("../include/revisor/menu_r.php");
include("../include/revisor/arbol_r.php");


?>

</body></font>

</html>