<?php
require_once "conexion.php";
class IngresoModels{
	static public function ingresoModel($datosModel){
		$stmt = Conexion::conectar()->prepare("SELECT idpersonal, nombrepersonal, emailpersonal, passwordpersonal FROM personal WHERE emailpersonal = :usuario AND passwordpersonal = :password");
		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
		//$stmt -> close();
	}
}
?>