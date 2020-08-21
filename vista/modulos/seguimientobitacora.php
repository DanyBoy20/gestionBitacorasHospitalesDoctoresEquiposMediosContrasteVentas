<?php
/*session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}*/
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<div id="bitacorasB">	
	<div class="tituloB"><h4> SEGUIMIENTO BITACORAS</h4></div>
	<div class="busquedaB">
		<form method="post" action="filtrobitacora" onsubmit="return validarBusquedaBitacora()">
			<input type="number" id="id" name="id" placeholder="Buscar" required><input type="submit" value="Buscar">	
		</form>					
	</div>	
</div>
<?php 
include "vista/modulos/pie.php";
?>