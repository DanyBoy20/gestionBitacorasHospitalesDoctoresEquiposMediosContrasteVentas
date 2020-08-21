<?php
require_once "conexion.php";
class GestorBitacorasModel{
	static public function mostrarBitacorasModel(){
		$stmt = Conexion::conectar()->prepare("SELECT nombrepersonal, idbitacora, fechavisita, informacion, status, nombrehospital FROM personal INNER JOIN bitacora ON personal.idpersonal = bitacora.idpersonal INNER JOIN hospitales ON bitacora.idhospital = hospitales.idhospital");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 
	}

	static public function mostrarbitacoraModel($dato){
		$stmt = Conexion::conectar()->prepare("SELECT nombrepersonal, fechavisita, informacion, status, nombrehospital, nombrecontacto FROM personal INNER JOIN bitacora ON personal.idpersonal = bitacora.idpersonal INNER JOIN hospitales ON bitacora.idhospital = hospitales.idhospital INNER JOIN contactoshospital ON bitacora.idcontacto = contactoshospital.idcontacto WHERE idbitacora = :identificador");
		$stmt -> bindParam(":identificador", $dato, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	static public function mostrarbitacoraSeguimientoModel($dato){
		$stmt = Conexion::conectar()->prepare("SELECT fechaactualizacion, descripcionbitacora FROM bitacora2 WHERE idbitacora = :identificador");
		$stmt -> bindParam(":identificador", $dato, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

	static public function nuevaBitacoraModel($datosModel){
		$hoy = date("Y-m-d");
		$estado = "abierta";
		$stmt = Conexion::conectar()->prepare("INSERT INTO bitacora (idhospital, idpersonal, idcontacto, fechavisita, informacion, status) VALUES (:idhospital, :idpersonal, :idcontacto, :fechavisita, :informacion, :status)");
		$stmt->bindParam(":idhospital", $datosModel["hospitalid"], PDO::PARAM_INT);	
		$stmt->bindParam(":idpersonal", $datosModel["personalid"], PDO::PARAM_INT);
		$stmt->bindParam(":idcontacto", $datosModel["doctorid"], PDO::PARAM_INT);
		$stmt->bindParam(":fechavisita", $hoy, PDO::PARAM_STR);
		$stmt->bindParam(":informacion", $datosModel["informacion"], PDO::PARAM_STR);
		$stmt->bindParam(":status", $estado, PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}else{
			return "error";
		}
		$stmt2->close(); 
	}

	static public function actualizarBitacoraModel($datosModel){
		$hoy = date("Y-m-d");
		$estado = "abierta";
		$stmt = Conexion::conectar()->prepare("INSERT INTO bitacora2 (idbitacora, fechaactualizacion, descripcionbitacora) VALUES (:idbitacora, :fecha, :informacion)");
		$stmt->bindParam(":idbitacora", $datosModel["bitacoraid"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha", $hoy, PDO::PARAM_STR);
		$stmt->bindParam(":informacion", $datosModel["comenta"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}else{
			return "error";
		}
		$stmt2->close();
	}

}
?>