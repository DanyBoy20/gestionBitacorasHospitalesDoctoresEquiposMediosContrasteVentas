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
		<a href="registrohospitales" class="botones">NUEVO HOSPITAL</a>
	</div>
</div>
<br><hr><hr><br>
<div class="pie">
	<label for="verinyectores">
		<h3>HOSPITALES REGISTRADOS</h3>
	</label>
	<table id="inyectores">
		<thead>
			<tr>
				<th scope="col">Item</th>
				<th scope="col">Nombre</th>
				<th scope="col">Tipo</th>
				<th scope="col">Direccion</th>
				<th scope="col">Estado</th>
				<th scope="col">Ver</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$hospitales = new GestorHospital();
			$hospitales -> mostrarHospitalesController();
			?>
		</tbody>
	</table>
</div>
<br><hr><hr><br>
<?php 
include "vista/modulos/pie.php";
?>