<?php
require_once "../../modelo/gestorbitacoras.php";
require_once "../../controlador/gestorbitacoras.php";
class Ajax{
	public $hospitalid;
	static public function seleccionarContactoHospitalAjax(){
		$dato = $this->hospitalid;
		$respuesta = GestorBitacoras::seleccionarContactoHospital($dato);
		$response = array();
		foreach($respuesta as $item){
			$response[] = array(
				"id" => $item['idcontacto'],
				"name" => $item['nombrecontacto']
			);
		}
		echo json_encode($enviarDatos);
		exit;
	}
}
if(isset($_POST["hospitalid"])){
	$c = new Ajax();
	$c -> hospitalid = $_POST["hospitalid"];
	$c -> seleccionarContactoHospitalAjax();	
}
