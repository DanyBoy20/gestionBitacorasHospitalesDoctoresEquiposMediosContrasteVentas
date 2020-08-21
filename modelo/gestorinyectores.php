<?php
require_once "conexion.php";
class GestorInyectoresModel{
	static public function mostrarInyectoresModel(){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM inyectores");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 
	}

	static public function listaInyectoresModel(){
		$stmt = Conexion::conectar()->prepare("SELECT idinyector, modeloinyector FROM inyectores");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 
	}

	static public function tipoInyectoresModel(){
		$stmt = Conexion::conectar()->prepare("SELECT idinyector, modeloinyector FROM inyectores");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 
	}

	static public function asignarInyectorHospitalModel($datosModel){
		$hoy = date("Y-m-d");
		$stmt2 = Conexion::conectar()->prepare("INSERT INTO inyectoreshospital (idinyector, idhospital, fecharegistro, cantidadinyectores, comentarios) VALUES (:inyector, :hospital, :fecha, :cantidad, :comenta)");
		$stmt2->bindParam(":inyector", $datosModel["tipoAI"], PDO::PARAM_INT);	
		$stmt2->bindParam(":hospital", $datosModel["hospitalAI"], PDO::PARAM_INT);
		$stmt2->bindParam(":fecha", $hoy, PDO::PARAM_STR);
		$stmt2->bindParam(":cantidad", $datosModel["cantidadAI"], PDO::PARAM_INT);
		$stmt2->bindParam(":comenta", $datosModel["comentariosAI"], PDO::PARAM_STR);
		if($stmt2->execute()){
			return "success";
		}else{
			return "error";
		}
		$stmt2->close(); 
	}

	static public function registroInyectorlModel($datosModel){
		$stmt = Conexion::conectar()->prepare("INSERT INTO inyectores (modeloinyector, descripcioninyector, tipoinyector) VALUES (:modelo, :descripcion, :tipo)");
		$stmt->bindParam(":modelo", $datosModel["nombreI"], PDO::PARAM_STR);	
		$stmt->bindParam(":descripcion", $datosModel["descripcionI"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datosModel["tipoI"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}else{
			return "error";
		}
		$stmt->close(); 
	}

}
