<?php
class GestorInyectores{
	static public function mostrarInyectoresController(){
		$respuesta = GestorInyectoresModel::mostrarInyectoresModel();
		foreach ($respuesta as $row => $item) {
			echo '<tr>
			<td scope="row" data-label="Clave">'.$item["idinyector"].'</td>
			<td data-label="Modelo">'.$item["modeloinyector"].'</td>
			<td scope="row" data-label="Descripcion">'.$item["descripcioninyector"].'</td>
			<td data-label="Tipo">'.$item["tipoinyector"].'</td>
			</tr>';
		}
	}

	static public function listaInyectoresController(){
		$respuesta = GestorInyectoresModel::listaInyectoresModel();
		foreach ($respuesta as $row => $item) {
			echo '<option value="'.$item["idinyector"].'">'.$item["modeloinyector"].'</option>';
		}
	}

	static public function tipoInyectoresController(){
		$respuesta = GestorInyectoresModel::tipoInyectoresModel();
		foreach ($respuesta as $row => $item) {
			echo '<option value="'.$item["idinyector"].'">'.$item["modeloinyector"].'</option>';
		}
	}

	static public function asignarInyectorHospitalController(){
		if(isset($_POST["hospitalAI"], $_POST["tipoAI"], $_POST["cantidadAI"], $_POST["comentariosAI"])){
			$datosController = array("hospitalAI"=>$_POST["hospitalAI"], "tipoAI"=>$_POST["tipoAI"], "cantidadAI"=>$_POST["cantidadAI"], "comentariosAI"=>$_POST["comentariosAI"]);
			$respuesta = GestorInyectoresModel::asignarInyectorHospitalModel($datosController);
			if($respuesta == "success"){
				// echo '<script>window.location.href="bien"</script>';
				header("Location:bien");
			}else{ // y si no
				// echo '<script>window.location.href="inicio"</script>';
				header("Location:inicio");
			}
		}
	}

	static public function registroInyectorController(){
		if(isset($_POST["nombreI"], $_POST["descripcionI"], $_POST["tipoI"])){
			$datosController = array("nombreI"=>$_POST["nombreI"], "descripcionI"=>$_POST["descripcionI"], "tipoI"=>$_POST["tipoI"]);
			$respuesta = GestorInyectoresModel::registroInyectorlModel($datosController);
			if($respuesta == "success"){
				// echo '<script>window.location.href="bien"</script>';
				header("Location:bien");
			}else{ 
				//echo '<script>window.location.href="inicio"</script>';
				header("Location:inicio");
			}
		}		
	}
	
}