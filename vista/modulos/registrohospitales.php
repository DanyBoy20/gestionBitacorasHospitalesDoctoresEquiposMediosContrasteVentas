<?php
/*session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}*/
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<form method="post" onsubmit="return validarRegistroHospital()">
	<div id="registroHospitales">				
		<div class="tituloRegistro"><h4>Registro de hospitales</h4></div>
		<div class="nombreHospital">
			<label for="nombreh"><p>Nombre:</p></label>
			<input type="text" id="nombreh" name="nombreh" placeholder="Razon social" pattern="[a-zA-Z0-9. ]+" maxlength="50" required>
		</div>
		<div class="tipoHospital">
			<label for="tipoh"><p>Tipo:</p></label>
			<select id="tipoh" name="tipoh">
				<option value="Privado">Privado</option>
				<option value="Publico">Publico</option>
				<option value="Otro">Otro</option>
			</select>
		</div>
		<div class="direccionHospital">
			<label for="direccionh"><p>Dirección</p></label>
			<input type="text" id="direccionh" name="direccionh"  pattern="[a-zA-Z0-9., ]+" maxlength="60" placeholder="Direccion" required>
		</div>
		<div class="ciudadHospital">
			<label for="ciudadh"><p>Ciudad</p></label>
			<input type="text" id="ciudadh" name="ciudadh" pattern="[a-zA-Z0-9., ]+" maxlength="35" placeholder="Ciudad" required>
		</div>
		<div class="estadoHospital">
			<label for="estadoh"><p>Estado</p></label>
			<input type="text" id="estadoh" name="estadoh" pattern="[a-zA-Z0-9., ]+" maxlength="35" placeholder="Estado" required>
		</div>
		<div class="oportunidadHospital">
			<label for="areaoh"><p>Area de oportunidad</p></label>
			<input type="text" id="areaoh" name="areaoh" pattern="[a-zA-Z0-9., ]+" maxlength="20" placeholder="Area de oportunidad" required>
		</div>
		<div class="contactosHospital"><h4>Contacto</h4></div>
		<div class="nombreCh">
			<label for="nombrech"><p>Nombre</p></label>
			<input type="text" id="nombrech" name="nombrech" pattern="[a-zA-Z. ]+" maxlength="35" placeholder="Nombre doctor" required>
		</div>
		<div class="puestoHospital">
			<label for="puestoch"><p>Puesto</p></label>
			<input type="text" id="puestoch" name="puestoch" pattern="[a-zA-Z0-9. ]+" maxlength="25" placeholder="Puesto" required>
		</div>
		<div class="telefonoHospital">
			<label for="telefonoch"><p>Telefono</p></label>
			<input type="text" id="telefonoch" name="telefonoch" maxlength="25" placeholder="Telefono" pattern="[a-zA-Z0-9,. ]+" required>
		</div>
		<div class="emailHospital">
			<label for="emailch"><p>Email</p></label>
			<input type="email" id="emailch" name="emailch" placeholder="Email" required>
		</div>
		<div class="guardarHospital">
			<input type="submit" value="Guardar">
		</div>
	</div>
</form>
<?php 
$registroHospital = new GestorHospital();
$registroHospital -> insertarHospitalController();
if(isset($_GET["action"])){
	if($_GET["action"] == "ok"){
		echo "Registro Exitoso";
	}
}
include "vista/modulos/pie.php";
?>