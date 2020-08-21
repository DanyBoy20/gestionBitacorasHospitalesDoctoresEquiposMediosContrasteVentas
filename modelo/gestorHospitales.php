<?php
require_once "conexion.php";
class GestorHospitalModel{
	# MOSTRAR LISTA DE HOSIPITALES
	static public function mostrarHospitalesModel(){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM hospitales");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 		
	}	
	# LISTAR HOSPITALES
	static public function listarHospitalesModel(){
		$stmt = Conexion::conectar()->prepare("SELECT idhospital, nombrehospital FROM hospitales");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close(); 		
	}
	# MOSTRAR HOSPITAL SELECCIONADO
	static public function mostrarHospitalModel($dato){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM hospitales WHERE idhospital = :identificador");
		$stmt -> bindParam(":identificador", $dato, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
	# MOSTRAR CONTACTOS HOSPITAL SELECCIONADO
	static public function mostrarContactosModel($dato){
		$stmt = Conexion::conectar()->prepare("SELECT nombrecontacto, cargocontacto, telefonocontacto, emailcontacto FROM contactoshospital WHERE idhospital = :identificador");
		$stmt -> bindParam(":identificador", $dato, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();		
	}
	# MOSTRAR INYACTORES HOSPITAL SELECCIONADO
	static public function mostrarInyectoresHospitalModel($dato){
		$stmt = Conexion::conectar()->prepare("SELECT modeloinyector, descripcioninyector, tipoinyector,  fecharegistro FROM inyectores INNER JOIN inyectoreshospital ON inyectores.idinyector = inyectoreshospital.idinyector WHERE inyectoreshospital.idhospital = :identificador");
		$stmt -> bindParam(":identificador", $dato, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();		
	}
	#INSERTAR HOSPITAL
	static public function insertarHospitalModel($datosModel){

		$pdo = Conexion::conectar();
		$stmt = $pdo->prepare("INSERT INTO hospitales (nombrehospital, tipohospital, direccionhospital, ciudadhospital, estadohospital) VALUES (:nombrehp, :tipohp, :direccionhp, :ciudadhp, :estadohp)");		
		$stmt->bindParam(":nombrehp", $datosModel["hospitalnombre"], PDO::PARAM_STR);
		$stmt->bindParam(":tipohp", $datosModel["hospitaltipo"], PDO::PARAM_STR);
		$stmt->bindParam(":direccionhp", $datosModel["hospitaldireccion"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudadhp", $datosModel["hospitalciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estadohp", $datosModel["hospitalestado"], PDO::PARAM_STR);
		if($stmt->execute()){
			$idhospital = $pdo->lastInsertId();
			$stmt1 = $pdo->prepare("INSERT INTO contactoshospital (idhospital, nombrecontacto, cargocontacto, telefonocontacto, emailcontacto) VALUES (:hospitalid, :contactonombre, :contactocargo, :contactotelefono, :contactoemail)");
			$stmt1->bindParam(":hospitalid", $idhospital, PDO::PARAM_INT);
			$stmt1->bindParam(":contactonombre", $datosModel["contactonombre"], PDO::PARAM_STR);
			$stmt1->bindParam(":contactocargo", $datosModel["contactopuesto"], PDO::PARAM_STR);
			$stmt1->bindParam(":contactotelefono", $datosModel["contactotelefono"], PDO::PARAM_STR);
			$stmt1->bindParam(":contactoemail", $datosModel["contactoemail"], PDO::PARAM_STR);
			$stmt1->execute(); 
			$stmt2 = $pdo->prepare("INSERT INTO areaoportunidad (idhospital, descripcionoportunidad) VALUES (:hospitalid, :oportdescrip)");
			$stmt2->bindParam(":hospitalid", $idhospital, PDO::PARAM_INT);
			$stmt2->bindParam(":oportdescrip", $datosModel["hospitalarea"], PDO::PARAM_STR);
			$stmt2->execute(); 
			return "success";
		}else{
			return "error";
		}
		$pdo->close(); 
	}
}
?>