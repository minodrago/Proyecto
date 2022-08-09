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


    <link href="css/bootstrap.min.css" rel="stylesheet"/>

 </head>
 
<font size=2><body  background="images/fondo_login.jpg"> 
<?php
?>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gestión Documental</title>

    <link href="css/bootstrap.min.css" rel="stylesheet"/>

 </head>
 
<font size=2><body  background="  "> 
<?php

include("../include/menu_r.php");
include("../include/arbol_r.php");


</body></font>

</html>
