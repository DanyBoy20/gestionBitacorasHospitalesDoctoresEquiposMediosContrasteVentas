<?php
class GestorHospital{

	static public function mostrarHospitalesController(){
		$respuesta = GestorHospitalModel::mostrarHospitalesModel();
		foreach ($respuesta as $row => $item) {
			echo '<tr>
			<td scope="row" data-label="Clave">'.$item["idhospital"].'</td>
			<td data-label="Nombre">'.$item["nombrehospital"].'</td>
			<td scope="row" data-label="Tipo">'.$item["tipohospital"].'</td>
			<td data-label="Direccion">'.$item["direccionhospital"].', '.$item["ciudadhospital"].'</td>
			<td data-label="Estado">'.$item["estadohospital"].'</td>
			<td data-label="Ver"><a class="botones" href="index.php?action=detallehospital&id='.$item["idhospital"].'">VER</a></td>
			</tr>';
		}
	}

	static public function listaHospitalesController(){
		$respuesta = GestorHospitalModel::listarHospitalesModel();
		foreach ($respuesta as $row => $item) {
			echo '<option value="'.$item["idhospital"].'">'.$item["nombrehospital"].'</option>';
		}
	}

	static public function mostrarHospitalController(){
		$idhospital = $_GET["id"];
		$datoshospital = GestorHospitalModel::mostrarHospitalModel($idhospital);
		$datoscontactos = GestorHospitalModel::mostrarContactosModel($idhospital);
		$datosinyectores = GestorHospitalModel::mostrarInyectoresHospitalModel($idhospital);
		echo '<br><div class="titulo">
		<h3>'.$datoshospital["nombrehospital"].'</h3>
		</div>
		<div class="fila">
		<div class="lado">
		<h3>Tipo</h3>
		<p>'.$datoshospital["tipohospital"].'</p>
		<h3>Direccion</h3>
		<p>'.$datoshospital["direccionhospital"].'</p>
		<h3>Ciudad, Estado</h3>
		<p>'.$datoshospital["ciudadhospital"].', '.$datoshospital["estadohospital"].'</p>
		</div>
		<div class="principal">
		<h3>Contactos</h3>';
		foreach ($datoscontactos as $fila => $contacto){
			echo '<h5>'.$contacto["nombrecontacto"].'</h5>
			<p>'.$contacto["cargocontacto"].'</p>
			<p>'.$contacto["emailcontacto"].'</p>
			<p>'.$contacto["telefonocontacto"].'</p><hr>';
		}
		echo '</div></div>
		<div class="pie">
		<label for="verinyectores">
		<h3>INYECTORES INSTALADOS</h3>
		</label>
		<table id="inyectores">
		<thead>
		<tr>
		<th scope="col">Modelo</th>
		<th scope="col">Descripcion</th>
		<th scope="col">Tipo</th>
		<th scope="col">Fecha</th>
		</tr>
		</thead>
		<tbody>';
		foreach ($datosinyectores as $row => $inyector){
			echo'<tr>
			<td data-label="Modelo">'.$inyector["modeloinyector"].'</td>
			<td data-label="Descripcion">'.$inyector["descripcioninyector"].'</td>
			<td data-label="Tipo">'.$inyector["tipoinyector"].'</td>
			<td data-label="Fecha">'.$inyector["fecharegistro"].'</td>
			</tr>';
		}
		echo '</tbody></table></div><br><hr><hr><br>';
	}

	static public function insertarHospitalController(){
		if(isset($_POST["nombreh"], $_POST["tipoh"], $_POST["direccionh"], $_POST["ciudadh"], $_POST["estadoh"], $_POST["areaoh"], $_POST["nombrech"], $_POST["puestoch"], $_POST["telefonoch"], $_POST["emailch"])){
			$datosController = array("hospitalnombre"=>$_POST["nombreh"], "hospitaltipo"=>$_POST["tipoh"], "hospitaldireccion"=>$_POST["direccionh"], "hospitalciudad"=>$_POST["ciudadh"], "hospitalestado"=>$_POST["estadoh"], "hospitalarea"=>$_POST["areaoh"], "contactonombre"=>$_POST["nombrech"], "contactopuesto"=>$_POST["puestoch"], "contactotelefono"=>$_POST["telefonoch"], "contactoemail"=>$_POST["emailch"]);
			$respuesta = GestorHospitalModel::insertarHospitalModel($datosController);
			if($respuesta == "success"){
				header("Location:ok");
			}else{ // y si no
				header("Location:inicio");
			}
		}
	}

}
?>