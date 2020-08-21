<?php
session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<div id="inicio">
	<img src="vista/img/bg06.png">				
	<div class="content">
		<h1 class="headline">BITACORA<br>HOSPITALES MEDIKROM</h1>
		<br>
		<p><a href="salir">Salir</a></p>
	</div>				
</div>	
<?php 
include "vista/modulos/pie.php";
?>