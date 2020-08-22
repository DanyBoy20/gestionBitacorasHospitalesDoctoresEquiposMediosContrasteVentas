<?php
session_start();
if(!$_SESSION["validar"]){
	/* DESCOMENTAR EN SERVIDORES CON PHP 5.6
	session_unset();
    session_destroy();
    echo "<script>window.location.replace('https://localhost/medikrom')</script>";
	exit();
	*/
	# PHP 7+
	header("Location:ingreso");
	exit();	
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<form method="post" onsubmit="return validarNuevaBitacora()">
	<div id="registroB" onsubmit="return validarNuevaBitacora()">	
		<div class="tituloNB"><h4>NUEVA BITACORA</h4></div>
		<div class="fechaNB"><h4>18 de Febrero del 2020</h4></div>
		<div class="hospitalNB">
			<label for="hospitalNB"><p>Hospital</p></label>
			<select id="hospitalNB" name="hospitalNB">
				<option value='0'>SELECCIONAR HOSPITAL</option>
				<?php
				$listahospitales = new GestorHospital();
				$listahospitales -> listaHospitalesController();
				?>
			</select>
		</div>
		<div class="doctorNB">
			<label for="doctorNB"><p>Doctor</p></label>
			<select id="doctorNB" name="doctorNB">
				<option value='0'>SELECCIONAR DOCTOR</option>
			</select>
		</div>
		<div class="informacionNB">
			<label for="informacionNB"><p>Informacion</p></label>
			<input type="text" id="informacionNB" name="informacionNB" placeholder="Informacion" pattern="[a-zA-Z0-9. ]+" maxlength="80" required>						
		</div>
		<div class="guardarNB">		
			<?php echo "<input type='hidden' id='cve' name='cve' value='".$_SESSION["usuario"]."'>";?>			
			<input type="submit" value="Guardar">
		</div>
	</div>
</form>
<?php 
$nuevabitacora = new GestorBitacoras();
$nuevabitacora -> nuevaBitacoraController();
if(isset($_GET["action"])){
	if($_GET["action"] == "creada"){
		echo "Registro Exitoso";
	}
}
include "vista/modulos/pie.php";
?>
