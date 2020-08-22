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
<div class="boton">
	<div>
		<a href="registroinyectores" class="botones">NUEVO INYECTOR</a>
	</div>
</div>
<br><hr><hr><br>
<div class="pie">
	<input type="checkbox" id="verinyectores">
	<label for="verinyectores">
		<h3>CATALOGO DE INYECTORES</h3>
	</label>
	<table id="inyectores">
		<thead>
			<tr>
				<th scope="col">Clave</th>
				<th scope="col">Modelo</th>
				<th scope="col">Descripcion</th>
				<th scope="col">Tipo</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$listainyectores = new GestorInyectores();
			$listainyectores -> mostrarInyectoresController();
			?>
		</tbody>
	</table>
</div>
<br><hr><hr><br>
<form method="post" onsubmit="return validarAsignacionIntector()">
	<div id="asignacionInyectores">	
		<div class="tituloAI"><h4>Asignacion Inyectores a Hospital</h4></div>
		<div class="hospitalAI">
			<label for="hospitalAI"><p>Hospital</p></label>
			<select id="hospitalAI" name="hospitalAI">
				<?php
				$listahospitales = new GestorHospital();
				$listahospitales -> listaHospitalesController();
				?>
			</select>
		</div>
		<div class="tipoAI">
			<label for="tipoAI"><p>Inyector</p></label>
			<select id="tipoAI" name="tipoAI">
				<?php
				$listainyectores = new GestorInyectores();
				$listainyectores -> listaInyectoresController();
				?>
			</select>
		</div>	
		<div class="cantidadAI">
			<label for="cantidadAI"><p>Cantidad</p></label>
			<input type="number" id="cantidadAI" name="cantidadAI" min="1" max="4" required>
		</div>
		<div class="comentariosAI">
			<label for="comentariosAI"><p>Comentarios</p></label>
			<input type="text" id="comentariosAI" name="comentariosAI" placeholder="Descripcion" pattern="[a-zA-Z0-9. ]+" maxlength="50" required>
		</div>
		<div class="guardarAI">
			<input type="submit" value="Guardar">
		</div>
	</div>
</form>
<?php
$asignarinyector = new GestorInyectores();
$asignarinyector -> asignarInyectorHospitalController();
if(isset($_GET["action"])){
	if($_GET["action"] == "bien"){
		echo "Registro Exitoso";
	}
}
include "vista/modulos/pie.php";
?>