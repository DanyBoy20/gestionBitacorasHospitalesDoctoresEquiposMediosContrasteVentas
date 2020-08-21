<?php
/*session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}*/
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<form method="post" onsubmit="return validarRegistroContacto()">
	<div id="registroContacto">						
		<div class="contactosh"><h4>Contacto</h4></div>
		<div class="hospitalC">
			<label for="hospitalC"><p>Filtrar:</p></label>
			<select id="hospitalC" name="hospitalC">
				<option value="Hospital 1">Hospital 1</option>
				<option value="Hospital 2">Hospital 2</option>
				<option value="Hospital 3">Hospital 3</option>
				<option value="Hospital n">Hospital n</option>
			</select>
		</div>
		<div class="nombreC">
			<label for="nombrechp"><p>Nombre</p></label>
			<input type="text" id="nombrechp" name="nombrechp" pattern="[a-zA-Z ]+" maxlength="35" placeholder="Nombre doctor" required>
		</div>
		<div class="puestoC">
			<label for="puestochp"><p>Puesto</p></label>
			<input type="text" id="puestochp" name="puestochp" pattern="[a-zA-Z0-9. ]+" maxlength="25" placeholder="Puesto" required>
		</div>
		<div class="telefonoC">
			<label for="telefonochp"><p>Telefono</p></label>
			<input type="text" id="telefonochp" name="telefonochp" maxlength="25" placeholder="Telefono" pattern="[0-9, ]+" required>
		</div>
		<div class="emailC">
			<label for="emailchp"><p>Email</p></label>
			<input type="email" id="emailchp" name="emailchp" placeholder="Email" required>
		</div>
		<div class="guardarChp">
			<input type="submit" value="Guardar">
		</div>
	</div>
</form>
<?php 
include "vista/modulos/pie.php";
?>