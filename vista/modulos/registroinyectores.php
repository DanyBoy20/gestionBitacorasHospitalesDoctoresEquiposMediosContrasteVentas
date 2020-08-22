<?php
session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<form method="post" onsubmit="return validarRegistroInyector()">
	<div id="registroInyectores">	
		<div class="tituloI"><h4>Registro Inyectores</h4></div>
		<div class="nombreI">
			<label for="nombreI"><p>Modelo</p></label>
			<input type="text" id="nombreI" name="nombreI" placeholder="Modelo" pattern="[a-zA-Z0-9. ]+" maxlength="25" required>
		</div>
		<div class="descripcionI">
			<label for="descripcionI"><p>Descripcion</p></label>
			<input type="text" id="descripcionI" name="descripcionI" placeholder="Descripcion" pattern="[a-zA-Z0-9. ]+" maxlength="50" required>
		</div>
		<div class="tipoI">
			<label for="tipoI"><p>Tipo</p></label>
			<select id="tipoI" name="tipoI">
				<option value="Hemodinamia">Hemodinamia</option>
				<option value="Resonancia magnetica">Resonancia Magnetica</option>
				<option value="Tomografia">Tomografía</option>
			</select>
		</div>
		<div class="guardarI">
			<input type="submit" value="Guardar">
		</div>
	</div>
</form>
<?php
$registroinyector = new GestorInyectores();
$registroinyector -> registroInyectorController();
if(isset($_GET["action"])){
	if($_GET["action"] == "bien"){
		echo "Registro Exitoso";
	}
}
include "vista/modulos/pie.php";
?>