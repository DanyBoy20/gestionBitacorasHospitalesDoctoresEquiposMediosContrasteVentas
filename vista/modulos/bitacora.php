<?php
session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
?>
<div id="bitacorasB">					
	<div  class="nuevaB">
		<a href="nuevabitacora" class="botones">Nueva Bitacora</a>
	</div>
	<div  class="seguimientoB">
		<a href="seguimientobitacora" class="botones">Seguimiento Bitacora</a>
	</div>
</div>
<br><hr><hr><br>
<div class="pie">
	<input type="checkbox" id="verinyectores">
	<label for="verinyectores">
		<h3>BITACORAS</h3>
	</label>
	<table id="inyectores">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">HOSPITAL</th>
				<th scope="col">FECHA REGISTRO</th>
				<th scope="col">VENDEDOR</th>
				<th scope="col">INFORMACION</th>
				<th scope="col">STATUS</th>
				<th scope="col">ACCION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$listabitacoras = new GestorBitacoras();
			$listabitacoras -> mostrarBitacorasController();
			?>					
		</tbody>
	</table>
</div>			
<?php 
include "vista/modulos/pie.php";
?>