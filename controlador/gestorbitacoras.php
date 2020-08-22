<?php
class GestorBitacoras{
	static public function mostrarBitacorasController(){
		$resultado = GestorBitacorasModel::mostrarBitacorasModel();
		foreach ($resultado as $row => $item) {
			echo '<tr>
			<td scope="row" data-label="ID">'.$item["idbitacora"].'</td>
			<td data-label="Hospital">'.$item["nombrehospital"].'</td>
			<td data-label="Fecha Registro">'.$item["fechavisita"].'</td>
			<td data-label="Vendedor">'.$item["nombrepersonal"].'</td>
			<td data-label="Informacion">'.$item["informacion"].'</td>
			<td data-label="Status">'.$item["status"].'</td>
			<td data-label="Accion"><a class="botones" href="index.php?action=seguimiento&id='.$item["idbitacora"].'">VER</a></td>
			</tr>';
		}
	}

	static public function nuevaBitacoraController(){
		if(isset($_POST["hospitalNB"], $_POST["doctorNB"], $_POST["informacionNB"], $_POST["cve"])){
			$datosController = array("hospitalid"=>$_POST["hospitalNB"], "doctorid"=>$_POST["doctorNB"], "informacion"=>$_POST["informacionNB"], "personalid"=>$_POST["cve"]);
			$respuesta = GestorBitacorasModel::nuevaBitacoraModel($datosController);
			if($respuesta == "success"){
				// echo '<script>window.location.href="creada"</script>';
				header("Location:creada");
			}else{ // y si no
				// echo '<script>window.location.href="inicio"</script>';
				header("Location:inicio");
			}
		}
	}

	static public function mostrarBitacoraController(){
		$idbitacora = $_GET["id"];
		$datosbitacora = GestorBitacorasModel::mostrarbitacoraModel($idbitacora);
		$datosseguimientos = GestorBitacorasModel::mostrarbitacoraSeguimientoModel($idbitacora);
		echo '<div id="bitacoraseguimiento">
		<div class="seguimientobt"><h4>BITACORA NUMERO: '.$idbitacora.' | ESTADO: '.$datosbitacora["status"].'</h4></div>
		<div class="hospitalbt">
		<p>Hospital: '.$datosbitacora["nombrehospital"].'</p>
		</div>
		<div class="fechabt">
		<p>Fecha reporte: '.$datosbitacora["fechavisita"].'</p>
		</div>
		<div class="nombrevbt">
		<p>Personal: '.$datosbitacora["nombrepersonal"].'</p>
		</div>
		<div class="nombredrbt">
		<p>Contacto: '.$datosbitacora["nombrecontacto"].'</p>
		</div>
		<div class="informacionbt">
		<p>Información: '.$datosbitacora["informacion"].'</p>
		</div>
		<dic class="tseguimientos">
		<table id="bseguimientos">
		<thead>
		<tr>
		<th scope="col">FECHA</th>
		<th scope="col">SEGUIMIENTO</th>
		</tr>
		</thead>
		<tbody>';
		foreach ($datosseguimientos as $row => $item) {
			echo '<tr>
			<td scope="row" data-label="FECHA">'.$item["fechaactualizacion"].'</td>
			<td data-label="SEGUIMIENTO">'.$item["descripcionbitacora"].'
			</td>
			</tr>';
		}
		echo '</tbody>
		</table>
		</dic>
		<div class="actbt"><h4>ACTUALIZAR BITACORA</h4></div>
		<form method="post" onsubmit="return validarSeguimientoBitacora()">
		<input type="hidden" id="identifica" name="identifica" value="'.$idbitacora.'">
		<div class="actualizarbt">
		<label for="actualizarbt"><p>Seguimiento</p></label>
		<input type="text" id="actualizarbt" name="actualizarbt" placeholder="Seguimiento" pattern="[a-zA-Z0-9. ]+" maxlength="80" required>
		</div>
		<div class="guardarseguimiento">
		<input type="submit" value="Guardar">
		</div>
		</form>					
		</div>';
	}		

	static public function actualizarBitacoraController(){
		if(isset($_POST["identifica"], $_POST["actualizarbt"])){
			$datosController = array("bitacoraid"=>$_POST["identifica"], "comenta"=>$_POST["actualizarbt"]);
			$respuesta = GestorBitacorasModel::actualizarBitacoraModel($datosController);
			if($respuesta == "success"){
				// echo '<script>window.location.href="actualizada"</script>';
				header("Location:actualizada");
			}else{ // y si no
				// echo '<script>window.location.href="inicio"</script>';
				header("Location:inicio");
			}
		}
	}

	static public function filtroBitacoraController(){
		if(isset($_POST["id"])){
			$idbitacora = $_POST["id"];
			$datosbitacora = GestorBitacorasModel::mostrarbitacoraModel($idbitacora);
			if(!empty($datosbitacora)){
				$datosseguimientos = GestorBitacorasModel::mostrarbitacoraSeguimientoModel($idbitacora);
				echo '<div id="bitacoraseguimiento">
				<div class="seguimientobt"><h4>BITACORA NUMERO: '.$idbitacora.' | ESTADO: '.$datosbitacora["status"].'</h4></div>
				<div class="hospitalbt">
				<p>Hospital: '.$datosbitacora["nombrehospital"].'</p>
				</div>
				<div class="fechabt">
				<p>Fecha reporte: '.$datosbitacora["fechavisita"].'</p>
				</div>
				<div class="nombrevbt">
				<p>Personal: '.$datosbitacora["nombrepersonal"].'</p>
				</div>
				<div class="nombredrbt">
				<p>Contacto: '.$datosbitacora["nombrecontacto"].'</p>
				</div>
				<div class="informacionbt">
				<p>Información: '.$datosbitacora["informacion"].'</p>
				</div>
				<dic class="tseguimientos">
				<table id="bseguimientos">
				<thead>
				<tr>
				<th scope="col">FECHA</th>
				<th scope="col">SEGUIMIENTO</th>
				</tr>
				</thead>
				<tbody>';
				foreach ($datosseguimientos as $row => $item) {
					echo '<tr>
					<td scope="row" data-label="FECHA">'.$item["fechaactualizacion"].'</td>
					<td data-label="SEGUIMIENTO">'.$item["descripcionbitacora"].'
					</td>
					</tr>';
				}
				echo '</tbody>
				</table>
				</dic>
				<div class="actbt"><h4>ACTUALIZAR BITACORA</h4></div>
				<form method="POST" onsubmit="return validarSeguimientoBitacora()">
				<input type="hidden" id="identifica" name="identifica" value="'.$idbitacora.'">
				<div class="actualizarbt">
				<label for="actualizarbt"><p>Seguimiento</p></label>
				<input type="text" id="actualizarbt" name="actualizarbt" placeholder="Seguimiento" pattern="[a-zA-Z0-9. ]+" maxlength="80" required>
				</div>
				<div class="guardarseguimiento">
				<input type="submit" value="Guardar">
				</div>
				</form>					
				</div>';
			}else{
				echo "<p id='popuperror'>BITACORA DESCONOCIDA</p>";
			}
		}else{
			echo "<p id='popuperror'>ERROR</p>";
		}	
	}

}
